<<<<<<< HEAD

<form action="/phpProject/home.php">
  <div class="form-group">
    <input type="email" class="form-control" id="loginInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
=======
<?php include('../../views/components/header.php') ?>
<?php include('../../views/components/navBar.php') ?>
<form method="post">
  <div class="form-group">
    <input name="email" type="email" class="form-control" id="loginInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
>>>>>>> 3ecb882ebf7c1881827a54227f3324c831ba65c9
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1" id="rememberMe">Remember me</label>
  </div>
<<<<<<< HEAD
  <button type="submit" id="submitLogin" class="btn btn-primary">Submit</button>
  <br>
  <a href="#" id="forgetLink">Forget Password</a>
</form>
=======
  <button type="submit" name="submit" id="submitLogin" class="btn btn-primary">Submit</button>

  <button type="submit" name="forget" id="forgetLink" class="btn btn-primary">Forget Password</button>
  <br>
  <a href="#" id="forgetLink">Forget Password</a>
</form>
<?php include('../../views/components/footer.php') ?>
>>>>>>> 3ecb882ebf7c1881827a54227f3324c831ba65c9
