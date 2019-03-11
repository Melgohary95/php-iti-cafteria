<?php include('./components/header.php') ?>

<?php include('./components/navBar.php') ?>

<div class="container">
    <div class="head">
      <div class="col-md-6 divLeft">
        <h1>All Products</h1>
      </div>
      <div style="float:right" class="col-md-6 divRight">
        <a class="btn btn-danger " href="/phpProject/adminAddProduct.php">Add Product</a>
      </div>
    </div>
    <div class="tablecontant">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th>Product</th>
            <th>price</th>
            <th>image</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>tea</td>
            <td>10 EGB</td>
            <td> <img class="img" src="img/Tea Cup.png" alt=""> </td>
            <td>
             <i class="fa fa-trash" aria-hidden="true"></i>
              <i class="far fa-edit"></i>
            

            </td>
          </tr>
          <tr>
            <td>nescafee</td>
            <td>20 EGB</td>
            <td> <img class="img" src="img/nescafee.jpg" alt=""> </td>
            <td>
              <i class="fa fa-trash" aria-hidden="true"></i>
               <i class="far fa-edit"></i>
             
 
             </td>
          </tr>
          <tr>
            <td>coffee</td>
  
            <td>5 EGB</td>
            <td><img class="img" src="img/coffee.png" alt=""> </td>
            <td>
              <i class="fa fa-trash" aria-hidden="true"></i>
               <i class="far fa-edit"></i>
             
 
             </td>
          </tr>
          <tr>

        </tbody>
      </table>


    </div>
  </div>



  <?php include('./components/footer.php') ?>
