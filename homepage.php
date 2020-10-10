<?php include("connection/connection.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-light">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="registration.php">registration</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="addbook.php">Add Book</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="deletebook.php">delete book</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="returnbook.php">return book</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="borrow.php">Borrow book</a>
    </li>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" name="addbook1" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search Book</button>
      
      
    </form>
  </ul>
</nav>
<br>
</body>
</html>
<?php include("connection/connection.php") ?>

    <?php
          if(isset($_POST['search'])){
            $on=$_POST['addbook1'];
            $query = "SELECT * FROM addbook1 WHERE name= '$on' or writer='$on' or isbn='$on'";
            $data=mysqli_query($cont,$query);
            if($data){
            $track_data = mysqli_fetch_assoc($data);
            
        ?>
        
        <div class=" d-flex justify-content-center"><p class="pt-5 font-weight-bolder userfont">Book Information</p>
                                    </div>
    <table class="table table-bordered text-center mt-5">
      <!--<thead>
        <tr>
          <th>Process</th>
          <th>Status</th>
        </tr>
      </thead>-->
      <tbody>
        <tr>
          <td class="py-5">Book Name</td>
          <td class="py-5"><?php echo $track_data['name'];?></td>
        </tr>
        <tr>
          <td class="py-5">writer Name</td>
          <td class="py-5"><?php echo $track_data['writer'];?></td>
        </tr>
          <td class="py-5">ISBN</td>
          <td class="py-5"><?php echo $track_data['isbn'];?></td>
        </tr>
        <tr>
          <td class="py-5">Edition</td>
          <td class="py-5"><?php echo $track_data['edition'];?></td>
        </tr>
        
      </tbody>
      <?php
      //  }
      ?>
    </table>
            <?php }
            else{  ?>
    <p class="text-center">NO Order Found!</p>
   <?php } 
   }
   ?>

