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
      
      <button>Search Orders by date</button>
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
              <label class="ac-label" for="ac-1">
              <?php foreach($orders["resultset"] as $order): ?>
                <?php echo $order["date"] ?>
              <?php  endforeach;?>
              </label>

              <article class="ac-text" style="position: absolute;top: 80vh;left: 50vw;">
                  <div class="ac-sub">
                    <label for="ac-1">order date 1 </label>
                  </div>
              </article>
            </div>
          <!-- first section  -->
        </td>

        <td>Processing</td>
        <td>55 EGP</td>
        <td>Cancel</td>
      </tr>
      
      <tr>
        <td>
          <!-- second section  -->
            <div class="ac">
                <input class="ac-input" id="ac-4" name="ac-4" type="checkbox" />
                <label class="ac-label" for="ac-4">Nourhame sherif                    
                </label>
              
                <article class="ac-text" style="position: absolute;top: 80vh;left: 50vw;">
                  <div class="ac-sub">
                    <label for="ac-4">order date 2</label>
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
