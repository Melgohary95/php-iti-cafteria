<?php include('./components/header.php') ?>

<?php include('./components/navBar.php') ?>

<div class="container">
    <div class="head">
      <div class="col-md-6 divLeft">
        <h1>All User</h1>
      </div>
      <div style class="col-md-6 divRight">
        <a class="btn btn-danger " href="/phpProject/views/adminAddUser.php">Add User</a>
      </div>
    </div>
    <div class="tablecontant">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th>Users</th>
            <th>Room</th>
            <th>image</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Fatema mohamed</td>
            <td>2005</td>
            <td> <img class="img" src="img/17241-200.png" alt=""> </td>
            <td>
              <i class="fa fa-trash" aria-hidden="true"></i>
              <i class="far fa-edit"></i>
            </td>
          </tr>
          <tr>
            <td>Nourhan elshrif</td>
            <td>2006</td>
            <td> <img class="img" src="img/17241-200.png" alt="">  </td>
            <td>
              <i class="fa fa-trash" aria-hidden="true"></i>
              <i class="far fa-edit"></i>
            </td>
          </tr>
          <tr>
            <td>Aml mostafa</td>

            <td>2007</td>
            <td> <img class="img" src="img/17241-200.png" alt=""> </td>
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

