<?php include('../../views/components/header.php') ?>
<?php include('../../views/components/navBar.php') ?>

<div class="container">

<h2>checks</h2>

<form>
<div class="row">
<div class="col">
  <input type="text" onfocus="(this.type='date')" 
      class="form-control" placeholder="Date from" name="startDate" >
</div>
<div class="col">
<input type="text" onfocus="(this.type='date')" 
      class="form-control" placeholder="Date to" name="endDate">
</div>

</div>
<div class="row">
  <div class="form-row align-items-center">
      <div style="padding-left: 19px" class="col-auto my-1">
        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
          <option selected = "selected">Choose...</option>
          <?php foreach ($users["resultset"] as $value) { ?>
            <option value="1" onchange = "checks($value['id'],$value['name']);">"><?php echo $value["name"]?></option>        
          <?php }?>
        </select>
      </div>
</div>

</div>
</form>


<!-- ===================================table=========================================== -->

<div class="table-responsive">
  <table style="margin-top:0px" class="table">
    <tbody>
      <tr>
        <td>Name</td>
        <td>Total Amount</td>
      </tr>
    <?php foreach ($orders as $value) { ?>
      <tr>
        <td>
          <div class="ac">
          <input class="ac-input" id="ac-1" name="ac-1" type="checkbox" />
          <label class="ac-label" for="ac-1"><?php var_dump($_POST)?></label>

          <article class="ac-text">
            
            <div class="ac-sub">
              <input class="ac-input" id="ac-2" name="ac-2" type="checkbox" />

              <label class="ac-label" for="ac-2">
                <div class="table-responsive">
                
                    <table style="width: 100%;">
                      
                      <tr>
                        <td><?php echo $value['date']?></td>
                        <td><?php echo $value['']?></td>
                      </tr>
                    </table>
                  </div>
              </label>

              <article class="ac-sub-text">
                <table style="margin-top: 0px;" class="table table-striped">
                  <tbody>
                    <tr>
                      <td>
                        <figure>
                          <img style="width:50px; height:50px;" src="../../assets/images/user.png" alt="product1">
                          <figcaption>tea</figcaption>
                            <figcaption>amount</figcaption>
                            <figcaption>price</figcaption>
                          </figure>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </article>
            </div>
            
          <!--/ac-text--> 
          </div> <!--/ac--> 
        </td>
        <td>20</td>
      </tr>
    <?php }?>
     
    </tbody>
  </table>
</div>
<!-- ============================================================================== -->




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