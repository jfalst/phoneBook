<?php
include 'connections.php';
include 'functions.php';
if(isset($_POST['submit'])){
  createContact();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>New Contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="mystyle.css" />
</head>
<body>

<div class="container">
  <h2>Create contact</h2>

  <form action="newUser.php" method="post">
    <div class="form-group">
      <label for="lastname">Last Name:</label>
      <input type="text" class="form-control" placeholder="Enter Last Name" name="lname" required pattern='[a-zA-Z]*'>
    </div>
    <div class="form-group">
      <label for="firstname">First Name:</label>
      <input type="text" class="form-control" placeholder="Enter First Name" name="fname" required pattern='[a-zA-Z]*'>
    </div>
    <div class="form-group">
      <label for="phone">Phone:</label>
      <input type="text" class="form-control" placeholder="Enter 10 Digit Phone Number" name="pname" required pattern="[0-9]{10}">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" placeholder="Enter Email up to 32 characters" name="email"required >
    </div>
  
    <button type="submit" name="submit" class="btn btn-default">Submit</button>
  </form>
</div>
    
</body>
</html>