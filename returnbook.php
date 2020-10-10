<?php include("connection/connection.php") ?>
<title> Return Book</title>



<?php

if(isset($_POST['submit'])) 
{
  $name = $_POST['name'];
  $writer= $_POST['writer'];
  $isbn = $_POST['isbn'];
  



    if($name == "" || $writer == ""   || $isbn == "" ) 
    {
        echo "All fields should be filled. Either one or many fields are empty.";
    }
    else
    {
        $insert="INSERT INTO addbook1(name,writer,isbn) 
        VALUES('$name', '$writer','$isbn')";
    }

        if (mysqli_query($conn,$insert)) 
        {
             echo " <div class='alert alert-primary alert-dismissible fade show' role='alert'>
             <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                 <span aria-hidden='true'>&times;</span>
                 <span class='sr-only'>Close</span>
             </button>
             <strong>Successfully Added</strong> You should check all fields.
         </div>";
        } 
        else 
        {
             echo "Error: " . mysqli_error($conn);

}


?>

<body>
  <section class="donor">

 
<center>
  <form class="reg-box2 border-warning" action="" method="post" enctype="multipart/form-data">
      <h3 class="text-capitalize text-center text-white p-lg-4">Return book</h3>
      <div class="w-75 m-auto">
  
  <div class="form-group">
    <input type="text" class="form-control" name="name"  placeholder="Name of Book">
  </div>
  <div class="form-group ">
    <input type="text" class="form-control" name="writer"  placeholder="Name of writer">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="isbn"  placeholder="enter the ISBN no. of Book">
  </div>
  
<br>
<br>
<br>
<div>
   <input type="submit" name="submit" class="btn btn-success" value="Submit" placeholder="Return">
</div>


</form>
</center>

</section>
</body>

<?php