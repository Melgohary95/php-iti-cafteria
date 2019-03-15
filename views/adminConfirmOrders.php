<?php include('../../views/components/header.php') ?>
<?php include('../../views/components/navBar.php') ?>
<div class="container-fluid">
    <div class="row main-header">
        <?php if (isset($_SESSION['err']) && $_SESSION['err'] != ""): ?>
            <?php $err = $_SESSION['err']; ?>
            <?php echo "<div class='alert alert-danger mt-3'> $err </div>" ?>
         <?php unset($_SESSION['err']) ?>
        <?php endif; ?>
            <?php if (isset($_SESSION['success']) && $_SESSION['success'] != ""): ?>
            <?php $sucess = $_SESSION['success']; ?>
            <?php echo "<div class='alert alert-success mt-3'> $sucess </div>" ?>
        <?php $_SESSION['success'] =""; ?>
        <?php endif; ?>
        <?php if (isset($_SESSION['userErr']) && $_SESSION['userErr'] != ""): ?>
            <?php $userErr = $_SESSION['userErr']; ?>
            <?php echo "<div class='alert alert-danger mt-3'> $userErr </div>" ?>
        <?php unset($_SESSION['success']) ?>
        <?php endif; ?>
    </div>
    <form method="POST">
        <div class="row">
            <div class="col-md-5 invoice">
                <div class="order"> 
                    <h3 class="order-item-header item"> Order Items </h3>
                    <table  class="table order_products_table" >
                        <tbody>

                        </tbody>
                    </table>
                </div>
                <table  class="table table-total m-0">
                    <tbody>
                        <tr>
                            <td class="total-header">Notes</a></td>
                            <td class="half-width">
                                <textarea class="form-control" rows="3" name="notes">
                                
                                </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="total-header">Room</td>
                            <td class="half-width">
                                <select class="form-control" required id="roomOfUser" name="room_id">
                                    <option  value="" disabled="" selected="">Add Room</option>

                                    <?php if (count($result['rooms']) > 0): ?>
                                        <?php foreach ($result['rooms'] as $room): ?>
                                            <option  value="<?= $room['id'] ?>" ><?= $room['number'] ?></option>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </select>
                            </td>
                        </tr>
                        <tr class="total-footer">
                            <td class="total-header black">
                                Total Pay
                            </td>
                            <td class="half-width" id="totalPrice">
                                <span></span>
                                <input type="hidden" value="" name="total_price" />
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="row order-buttons">
                    <div class="col-md-3">
                        <!--                    <button type="button" class="btn bg-purple btn-block btn-flat print-button" id="print_order">
                                                confirm
                                            </button>-->
                        <input type="submit" value="confirm" style="border:2px solid black" class="btn bg-purple btn-block btn-flat print-button" id="print_order" />
                    </div>
                </div>
            </div>

            <div class="col-md-7 categories">
                <div class="row categories-row">
                    <div class="col-md-4 category-tabs ">
                        <div class=" horizontal-tab ">
                            <ul class="nav nav-pills srcoll-div pr-3" id="pills-tab" role="tablist">
                                <?php if (count($result['categories']) > 0): ?>
                                    <?php foreach ($result['categories'] as $catgory): ?>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-coffee-tab" data-toggle="pill" href="#pills-<?= $catgory['id'] ?>" role="tab" aria-controls="pills-coffee" aria-selected="true">
                                                <i class="fa fa-coffee" aria-hidden="true"></i> <?= $catgory['name'] ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                                <!--                                    <li class="nav-item">
                                                                        <a class="nav-link active" id="pills-coffee-tab" data-toggle="pill" href="#pills-coffee" role="tab" aria-controls="pills-coffee" aria-selected="true">
                                                                            <i class="fa fa-coffee" aria-hidden="true"></i> Coffee
                                                                        </a>
                                                                    </li>-->
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8 category-photos">
                        <div class="row mb-3">                    
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-9" >
                                        <!--<form action="/action_page.php">-->
                                        <input type="text" placeholder="Search.." name="search" id="product_search" class="form-control" style="display:inline-block">

                                        <!--</form>-->
                                    </div>
                                    <div class="col-md-3">
                                        <!--<button type="submit" style="display:inline-block"><i class="fa fa-search"></i></button>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-md-12">
                                <select class="form-control" id="orderUser" name="user_id">
                                    <option value="" disabled="" selected="">Add User</option>

                                    <?php if (count($result['users']) > 0): ?>
                                        <?php foreach ($result['users'] as $user): ?>
                                            <option  value="<?= $user['id'] ?>" ><?= $user['name'] ?></option>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </select>
                            </div>
                        </div>
                        <div class="seacrch_clients"></div>
                        <div class="orginal-search">
                            <div class="tab-content" id="pills-tabContent">

                                <!--<div class="orginal-search">-->
                                <?php $count = 0; ?>
                                <?php foreach ($result['productCategories'] as $productcatgory): ?>
                                 <?php if (is_array($productcatgory)): ?>
                                    <?php foreach ($productcatgory as $productcatgorie): ?>
                                        <?php $count++; ?>

                                        <?php if ($count == 1): ?>
                                            <div class="tab-pane fade show active" id="pills-<?= $productcatgorie['category_id'] ?>" role="tabpanel" aria-labelledby="pills-coffee-tab">
                                            <?php else: ?>
                                                <div class="tab-pane fade" id="pills-<?= $productcatgorie['category_id'] ?>" role="tabpanel" aria-labelledby="pills-juice-tab">
                                                <?php endif; ?>

                                                <div class="row products">

                                                    <div class="col-md-6 " >
                                                        <div class="product pointer singleProduct" data-id="<?= $productcatgorie['id'] ?>" >
                                                            <img src="http://www.dar-elweb.com/demos/zarest/files/products/4b576dc6bdbace92f02cd8755d4832ad_thumb.jpeg" alt="tomato salad">
                                                            <div class="description">
                                                                <h3> <?= $productcatgorie['name'] ?></h3>
                                                                <span><?= $productcatgorie['price'] ?></span> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>  

                                            </div>
                                        <?php endforeach; ?>
                                            <?php endif; ?>
                                    <?php endforeach; ?>

                                </div>
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>



    <?php include('../../views/components/footer.php') ?>
