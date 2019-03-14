<?php include('../../views/components/header.php') ?>
<?php include('../../views/components/navBar.php') ?>
<form method="post">
  <div class="form-group">
    <input name="email" type="email" class="form-control" id="loginInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1" id="rememberMe">Remember me</label>
  </div>
  <button type="submit" name="submit" id="submitLogin" class="btn btn-primary">Submit</button>

  <button type="submit" name="forget" id="forgetLink" class="btn btn-primary">Forget Password</button>
  <br>
  <a href="#" id="forgetLink">Forget Password</a>
</form>
<?php include('../../views/components/footer.php') ?>