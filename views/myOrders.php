<?php include('./components/header.php') ?>

<div class="row main-header">
    <!-- Header Navbar: style can be found in header.less -->
    <div class="col-md-4 navbar" >
        <ul class="nav tab-bar-icons">
            <li>
                <a href="/phpProject/home.php">
                    <span class="menu-text">Home</span>
                </a>
            </li> 
            <li class="flat-box waves-effect waves-block">
                <a href="/phpProject/myOrders.php">
                    <span class="menu-text"> My Orders </span>
                </a>
            </li>

        </ul>
    </div>
    
    <div class="col-md-5">
    </div>
    <div class="col-md-3">
        <ul class="nav navbar-nav navbar-right user">

            <li class="dropdown navbar-user">
                
                <a href="javascript:;" class="dropdown-toggle profile-name" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/14690942_936478356496967_3208200680112630503_n.jpg" alt=""/>
                    <span class="hidden-xs">Nourhan</span>
                    <b class="caret"></b>
                </a>
                
            </li>
        </ul>
        <div class="clearfix"></div>
  
    </div>
</div>
<div class="container">

<h2>My Orders</h2>

<form>
<div class="row">
<div class="col">
  <input type="date" class="form-control" placeholder="First name">
</div>
<div class="col">
  <input type="date" class="form-control" placeholder="Last name">
</div>

</div>
<div class="row">
  <div class="form-row align-items-center">
      <div style="padding-left: 19px" class="col-auto my-1">
        <!-- <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
          <option selected>Choose...</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select> -->
      </div>
</div>

</div>
</form>
<div class="ac">
<!-- <input class="ac-input" id="ac-1" name="ac-1" type="checkbox" />
<label class="ac-label" for="ac-1">Amal Moustafa</label> -->
<table class="table table-striped">
      <tbody>
        <tr>
            <th>Order Date</th>
            <th>Status</th>
            <th>Amount</th>
            <th>Action</th>
        </tr>
        <tr>
            <td>
                <div class="ac">
                    <input class="ac-input" id="ac-1" name="ac-1" type="checkbox" />
                    <label class="ac-label" for="ac-1">2018-2-20 10:30 AM</label>
                    <article class="ac-text">  
                        <div class="ac-sub">
                            <div>
                                <img src="index.jpg" class="rounded float-left" alt="image" height="100px">
                                <img src="index.jpg" class="rounded float-left" alt="image" height="100px">
                                <img src="index.jpg" class="rounded float-left" alt="image" height="100px">
                            </div>
                        </div>
                    </article>
                </div>
            </td>
            <td>Processing</td>
            <td>50 LE</td>
            <td>Cancel</td>
        </tr>
        <tr>
            <td>
                <input class="ac-input" id="ac-2" name="ac-2" type="checkbox" />
                <label class="ac-label" for="ac-2">2018-5-12 3:00 PM</label>
                <article class="ac-text">  
                    <div class="ac-sub">
                        <div>
                            <img src="index.jpg" class="rounded float-left" alt="image" height="100px">
                            <img src="index.jpg" class="rounded float-left" alt="image" height="100px">
                            <img src="index.jpg" class="rounded float-left" alt="image" height="100px">
                        </div>
                    </div>
                </article>
            </td>
            <td>Out for delivery</td>
            <td>40 LE</td>
            <td></td>
        </tr>
        <tr>
            <td>
                <input class="ac-input" id="ac-3" name="ac-3" type="checkbox" />
                <label class="ac-label" for="ac-3">2019-10-16 6:30 PM</label>
                <article class="ac-text">  
                    <div class="ac-sub">
                        <div>
                            <img src="index.jpg" class="rounded float-left" alt="image" height="100px">
                            <img src="index.jpg" class="rounded float-left" alt="image" height="100px">
                            <img src="index.jpg" class="rounded float-left" alt="image" height="100px">
                        </div>
                    </div>
                </article>
            </td>
            <td>Done</td>
            <td>60 LE</td>
            <td></td>
        </tr>
        <tr>
        <td>
            <div>
                <P class="float-right">Total    EGP 100</P>
            </div>
            </td>
        </tr>
      </tbody>
    </table>
    </div>
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

<?php include('./components/footer.php') ?>
