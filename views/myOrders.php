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
      <?php foreach ($orders["resultset"] as $value) {?>
      <?php $total = $total + $value["total_price"];?>
        <tr>
        <td>
          <!-- first section  -->
            <div class="ac">
              <input class="ac-input" id="ac-1" name="ac-1" type="checkbox" />
              <label id ="firstRow" class="ac-label" for="ac-1"><?php echo $value["date"] ?></label>

              <article class="ac-text" style="position: absolute;top: 80vh;left: 50vw;">
                  <div class="ac-sub">
                    <label for="ac-1"><?php echo $value["date"]?></label>
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
          echo "<a href=''>cancel</a>";
        }
        ?>
        </td>
        </tr>
      <?php }?>
      <tr>
        <td>Total:<?php echo $total ?></td>
      </tr>
    </tbody>
  </table>
</div>


<!-- start pagination  -->

<nav aria-label="Page navigation example">
<ul class="pagination pagination-circle pg-blue">
  <li class="page-item disabled"><a class="page-link">First</a></li>
  <li class="page-item disabled">
    <a class="page-link" aria-label="Previous">
      <span aria-hidden="true">&laquo;</span>
      <span class="sr-only">Previous</span>
    </a>
  </li>
  <li class="page-item active"><a class="page-link">1</a></li>
  <li class="page-item"><a class="page-link">2</a></li>
  <li class="page-item"><a class="page-link">3</a></li>
  <li class="page-item"><a class="page-link">4</a></li>
  <li class="page-item"><a class="page-link">5</a></li>
  <li class="page-item">
    <a class="page-link" aria-label="Next">
      <span aria-hidden="true">&raquo;</span>
      <span class="sr-only">Next</span>
    </a>
  </li>
  <li class="page-item"><a class="page-link">Last</a></li>
</ul>
</nav>
<!-- end pagination -->

<?php include('../../views/components/footer.php') ?>
