<<<<<<< HEAD
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
=======
<?php include('../../views/components/header.php') ?>
<?php include('../../views/components/navBar.php') ?>


<div class="container">
    <div class="head">
      <div class="col-md-6">
        <h1>All Users</h1>
      </div>
      <div class="col-md-6 addProBtn">
        <a class="btn btn-danger " href="/php-iti-cafteria/App/controller/addUser.php">Add User</a>
      </div>
      <div id="edit">
        <ul id="editForm">
            <form id="f" method='post' role="form" data-toggle="validator" novalidate="true">
            <input type="hidden" id="userId" name="userId" value="1">
              <div class="row editUser">
                <div class="col-5 mt-2">
                <li class="editField">
                    <label>
                        UserName
                    </label>
                    <input type="text" id="nameEditInput" class="form-control"  name="nameEditInput" required>
                </li>
                </div>
                <div class="col-5 mt-2">
                <li class="editField">
                    <label>
                        Room
                    </label>
                    <input type="number" id="roomEditInput" class="form-control"  name="roomEditInput" required>
                </li>
                </div>
                <div class="col-5 mt-2">
                <li class="editField">
                    <label>
                        Ext
                    </label>
                    <input type="number" id="extEditInput" class="form-control"  name="extEditInput" required>
                </li>
                </div>
               
                <!-- <div class="col-5 mt-2">
                <li class="editField">
                    <label>
                        Image
                    </label>
                    <input type="file" id="imageEditInput" class="form-control" name="imageEditInput" required>
                </li>
                </div> -->
                <div class="col-5 mt-2">
                <li class="editField">
                    <input value="Submit" type="submit" id="submitEditBtn" class="btn btn-success">
                </li>
              </div>
            </form>
        </ul>
    </div>
    </div>

    <div class="tablecontant">
      <table class="productsTable table">
        <thead class="thead-dark">
          <tr>
          <th>Users</th>
            <th>Room</th>
            <th>image</th>
            <th>ext</th>
>>>>>>> 3ecb882ebf7c1881827a54227f3324c831ba65c9
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
<<<<<<< HEAD
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

=======
        <?php if(count($users)>2){
          array_splice($users,0,2);
          if(sizeof($users)>0)
          {
        foreach($users['resultset'] as $key =>$user)
        { ?>
          <tr>
            <td><?php echo $user['name'] ?></td>
            <td><?php echo $user['room_id'] ?></td>
            <td> <img width=80 src="<?php echo $user['image'] ?>" alt=""> </td>
            <td><?php echo $user['ext'] ?></td>
            <td>
            <form id="form1" method="get">
              <button type="submit" form="form1" id="delProductBtn">
              <input type="hidden" id="userIdDel" name="userIdDel" value="<?php echo $user['id'] ?>">
                <i class="fa fa-trash fa-2x"  aria-hidden="true" onclick="deleteRow()"></i>   
              </button>
              <i class="far fa-edit fa-2x" id="editProductBtn" onclick="displayEdit2(<?php echo $user['id'] ?>)"></i>

              </form>
              </td>
          </tr>
          
        <?php } }} ?>
        </tbody>
      </table>


    </div>
  </div>



  <?php include('../../views/components/footer.php') ;
  
  ?>
>>>>>>> 3ecb882ebf7c1881827a54227f3324c831ba65c9
