<?php include('../../views/components/header.php') ?>
<?php include('../../views/components/navBar.php') ?>


<div class="noMarginRow row">
    <div class="col-2 ml-5 mt-2">
        <h3>Orders</h3>
    </div>
</div>
<div class="noMarginRow row mx-auto my-5">
    <div class="col-lg-6 mx-auto">
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">OrderDate</th>
            <th scope="col">Name</th>
            <th scope="col">Room</th>
            <th scope="col">Ext.</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php 
         
        foreach($result["orders"] as $key =>$res)
        { ?>
       <?php //var_dump($res); ?>
            <tr>
                <th scope="col">  <?php echo $res['date'] ?>  </th>
                <th scope="col"> <?php echo $res['user_name'] ?> </th>
                <th scope="col"> <?php echo $res['roomNo'] ?> </th>
                <th scope="col"> <?php echo $res['ext'] ?> </th>
                <th scope="col">pickup</th>
            </tr>


            <tr>
                <td colspan="5">
                <div class="scrolling-wrapper">
                    <div class="card"><h2>Card</h2></div>
                    <div class="card"><h2>Card</h2></div>
                    <div class="card"><h2>Card</h2></div>
                    <div class="card"><h2>Card</h2></div>
                    <div class="card"><h2>Card</h2></div>
                    
                </div>
                </td>
            </tr>
        
            <tr>
                <td colspan="5">
                    <p>total price </p>
        
                    <?php echo $res['total_price'] ?> 
                </td>
            </tr>
            <?php  } ?>
        </tbody>
    </table>
    </div>
</div>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

</body>
</html>