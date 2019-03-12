<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

require '../model/product.php'; 

$p = new Product();
$products = $p->db->select("products");

?>

<?php include('../../views/components/header.php') ?>
<?php include('../../views/components/navBar.php') ?>


<div class="container">
    <div class="head">
      <div class="col-md-6 divLeft">
        <h1>All Products</h1>
      </div>
      <div style="float:right" class="col-md-6 divRight">
        <a class="btn btn-danger " href="/phpProject/App/controller/addProduct.php">Add Product</a>
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
        <?php if(count($products)>2){
          array_splice($products,0,2);
        foreach($products['resultset'] as $key =>$product)
        { ?>
          <tr>
            <td><?php echo $product['name'] ?></td>
            <td><?php echo $product['price'] ?></td>
            <td> <img class="img" width=80 src="<?php echo $product['image'] ?>" alt=""> </td>
            <td>
             <i class="fa fa-trash" aria-hidden="true"></i>
              <i class="far fa-edit"></i>
            

            </td>
          </tr>
          
        <?php } } ?>
        </tbody>
      </table>


    </div>
  </div>



  <?php include('../../views/components/footer.php') ?>
