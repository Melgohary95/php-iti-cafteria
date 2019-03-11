<?php include('./components/header.php') ?>
<?php include('./components/navBar.php') ?>

<div class="container">

<h2>checks</h2>

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
        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
          <option selected>Choose...</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>
</div>

</div>
</form>


<div class="ac">
<input class="ac-input" id="ac-1" name="ac-1" type="checkbox" />
<label class="ac-label" for="ac-1">Amal Moustafa</label>

<article class="ac-text">
  
  <div class="ac-sub">
    <input class="ac-input" id="ac-2" name="ac-2" type="checkbox" />
    <label class="ac-label" for="ac-2">order date 1 </label>

    <article class="ac-sub-text">
    <table class="table table-striped">
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>
  </article>
  </div>
  
<!--/ac-text--> 
</div> <!--/ac--> 


<!-- second section  -->
<div class="ac">
<input class="ac-input" id="ac-4" name="ac-4" type="checkbox" />
<label class="ac-label" for="ac-4">Nourhame sherif</label>

<article class="ac-text">

<div class="ac-sub">
  <input class="ac-input" id="ac-5" name="ac-5" type="checkbox" />
  <label class="ac-label" for="ac-5">order date 2</label>
  <article class="ac-sub-text">
    <p>orders 3</p>
  </article>
</div>

</article>
<!--/ac-text-->

<!-- third section  -->
<div class="ac">
    <input class="ac-input" id="ac-6" name="ac-6" type="checkbox" />
    <label class="ac-label" for="ac-6">Fatema mohamed</label>
  
    <article class="ac-text">
  
      <div class="ac-sub">
        <input class="ac-input" id="ac-7" name="ac-7" type="checkbox" />
        <label class="ac-label" for="ac-7">order date 2</label>
        <article class="ac-sub-text">
          <p>orders 3</p>
        </article>
      </div>
  
    </article>
    <!--/ac-text-->

</div>
<!--/ac-->

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
