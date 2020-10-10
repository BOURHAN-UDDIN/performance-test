<?php include("connection/connection.php") ?>
<title> Registration</title>
<?php

if(isset($_POST['submit'])) 
{
  $name = $_POST['name'];
  $age = $_POST['age'];
  $contact = $_POST['Contact'];
  $email = $_POST['email'];
  $Address = $_POST['Address'];
  $city = $_POST['city'];


    if($name == "" || $age == ""   || $contact == ""  || $email == "" 
    || $Address == "" || $city == "" ) 
    {
        echo "All fields should be filled. Either one or many fields are empty.";
    }
    else
    {
        $insert="INSERT INTO registration(name,Age,Contact, email, Address,city) 
        VALUES('$name', '$age','$contact','$email', '$Address','$city')";
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
}

?>

<body>
  <section class="donor">

<center>
  <form class="reg-box2 border-warning" action="" method="post" enctype="multipart/form-data">
      <h3 class="text-capitalize text-center text-white p-lg-4">Register</h3>
      <div class="w-75 m-auto">
  
  <div class="form-group">
    <input type="text" class="form-control" name="name"  placeholder="Full Name">
  </div>
  <div class="form-group ">
    <input type="text" class="form-control" name="age"  placeholder="Age">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="Contact"  placeholder="Contact no.">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="email"  placeholder="Email Address">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="Address"  placeholder="Full Address">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="city"  placeholder="city">
  </div>
<br>
<br>
<br>
<div>
   <input type="submit" name="submit" class="btn btn-success" value="Submit">
</div>


</form>
</center>

</section>
</body>

<?php