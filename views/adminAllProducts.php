<?php include('../../views/components/header.php') ?>
<?php include('../../views/components/navBar.php') ?>


<div class="container">
    <div class="head">
      <div class="col-md-6">
        <h1>All Products</h1>
      </div>
      <div class="col-md-6 addProBtn">
        <a class="btn btn-danger " href="/phpProject/App/controller/addProduct.php">Add Product</a>
      </div>
      <div id="edit">
        <ul id="editForm">
            <form id="f" method='' action='' role="form" data-toggle="validator" novalidate="true">
              <div class="row editProduct">
                <div class="col-5 mt-2">
                <li class="editField">
                    <label>
                        ProductName
                    </label>
                    <input type="text" id="name" class="form-control" placeholder="Please Enter your name" name="inp1" required>
                </li>
                </div>
                <div class="col-5 mt-2">
                <li class="editField">
                    <label>
                        Price
                    </label>
                    <input type="number" id="phone" class="form-control" placeholder="Please Enter your phone" name="inp2" required>
                </li>
                </div>
                <div class="col-5 mt-2">
                <li class="editField">
                    <label>
                        Available
                    </label>
                    <input type="number" id="phone" class="form-control" placeholder="Please Enter your phone" name="inp2" required>
                </li>
                </div>
                <div class="col-5 mt-2">
                <li class="editField">
                    <label>
                        Image
                    </label>
                    <input type="file" id="editImage" class="form-control" name="inp3" required>
                </li>
                </div>
                <div class="col-5 mt-2">
                <li class="editField">
                    <input value="Submit" type="submit" id="submitEditBtn" class="btn btn-success">
                </li>
              </div>
            </form>
        </ul>
    </div>
    </div>

    <div class="tablecontant">
      <table class="productsTable table">
        <thead class="thead-dark">
          <tr>
            <th>Product</th>
            <th>price</th>
            <th>image</th>
            <th>Available</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        <?php if(count($products)>2){
          array_splice($products,0,2);
        foreach($products['resultset'] as $key =>$product)
        { ?>
          <tr>
            <td><?php echo $product['name'] ?></td>
            <td><?php echo $product['price'] ?></td>
            <td> <img width=80 src="<?php echo $product['image'] ?>" alt=""> </td>
            <td> <?php echo $product['availability'] == 1 ? "yes" : "no"?> </td>
            <td>
             <i class="fa fa-trash"  aria-hidden="true"></i>
              <i class="far fa-edit" onclick="displayEdit()"></i>
            </td>
          </tr>
          
        <?php } } ?>
        </tbody>
      </table>


    </div>
  </div>



  <?php include('../../views/components/footer.php') ?>
