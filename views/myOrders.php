<?php include('../../views/components/header.php') ?>

<?php include('../../views/components/navBar.php') ?>

<div class="container">

<h2>My Orders</h2><br>

<form method="post">
  <div class="row">
    <div class="col">
      <input type="text" onfocus="(this.type='date')" 
      class="form-control" placeholder="Date from" name="startDate" >
    </div>

    <div class="col">
      <input type="text" onfocus="(this.type='date')" 
      class="form-control" placeholder="Date to" name="endDate">
    </div>

    <div class="col">
      
      <button type="submit" onclick="getMyOrders()">Search Orders by date</button>
    </div>
    
  </div>
</form>

<br><br>

<div class="table-responsive">
  <table style="margin-top:0px" class="table">
    <tbody>
      <tr>
        <td>Order Date</td>
        <td>Status</td>
        <td>Amount</td>
        <td>Action</td>
      </tr>
      <tr>
        <td>
          <!-- first section  -->
            <div class="ac">
              <input class="ac-input" id="ac-1" name="ac-1" type="checkbox" />
              <label id ="firstRow" class="ac-label" for="ac-1">amal moustafa</label>

              <article class="ac-text" style="position: absolute;top: 80vh;left: 50vw;">
                  <div class="ac-sub">
                    <label for="ac-1">
                        <div class="table-responsive">
                          <table>
                            <tr>
                              <td>
                                <figure>
                                  <img style="width:50px; height:50px;" src="../../assets/images/user.png" alt="product1">
                                  <figcaption>tea</figcaption>
                                  <figcaption>amount</figcaption>
                                  <figcaption>price</figcaption>
                                </figure>
                              </td>
                              
                              <td><img style="width:50px; height:50px;" src="../../assets/images/user.png" alt="product2"></td>
                              <td><img style="width:50px; height:50px;" src="../../assets/images/user.png" alt="product3"></td>
                            </tr>
                          </table>
                        </div>
                    </label>
                  </div>
              </article>
            </div>
          <!-- first section  -->
        </td>
        <td><?php 
        if($value["status"] == 0){ 
           echo "Processing";
        } else if($value["status"] == 1){
          echo "Out for delivery";
        } else {
          echo "Done";
        }
        ?>
        </td>
        <td><?php 
        echo $value["total_price"];
        ?>
        </td>
        <td><?php 
        if($value["status"] == 0){
          $newOrder = new Order(); 
          echo '<button type=submit onclick = '<?php "$newOrder->cancelOrders($value[id])"?>'>';
          echo '<a href="./myOrders.php">cancel</a>';
          echo '</button>';
        }
        ?>
        </td>
        </tr>
      <?php }?>
      <tr>
        <td>
          <!-- second section  -->
            <div class="ac">
                <input class="ac-input" id="ac-4" name="ac-4" type="checkbox" />
                <label class="ac-label" for="ac-4">ahmed mostafa</label>
              
                <article class="ac-text" style="position: absolute;top: 80vh;left: 50vw;">
                  <div class="ac-sub">
                    <label for="ac-4">
                      <div class="table-responsive">
                        <table>
                          <tr>
                            <td><img style="width:50px; height:50px;" src="../../assets/images/user.png" alt="product1"></td>
                          </tr>
                        </table>
                      </div>
                    </label>
                  </div>
                </article>
              </div>
          <!-- second section  -->
        </td>
        <td>Out for delivery</td>
        <td>20 EGP</td>
        <td></td>
      </tr>
     
    </tbody>
  </table>
</div>


<!-- start pagination  -->


<!-- end pagination -->

<?php include('../../views/components/footer.php') ?>
