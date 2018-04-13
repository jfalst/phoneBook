<?php
include 'connections.php';
include 'functions.php';


if(isset($_GET['edit'])){
    
    $update_id = $_GET['edit'];

   
    
    $queryId = "SELECT * FROM users WHERE id = $update_id";
    $result = $conn->query($queryId);
     while($row = $result->fetch_assoc()){
          $contactId = $row['id'];
          $last = $row['last_name'];
          $first = $row['first_name'];
          $phone = $row['phone'];
          $mail = $row['email'];
        }
        
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Update Contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="mystyle.css" />
</head>
<body>
<div class="container">
  <h2>Edit Contact</h2>

  

  <form action="updateContact.php" method="post">
    
    <div class="form-group">
    
      <label for="lastname">Last Name:</label>
      <input value="<?php if(isset($last)) echo $last ?> " type="text" class="form-control" name="lname" required pattern='[a-zA-Z]*'>
    </div>
    <div class="form-group">
      <label for="firstname">First Name:</label>
      <input value="<?php if(isset($first)) echo $first ?> "type="text" class="form-control" name="fname" required pattern='[a-zA-Z]*'>
    </div>
    <div class="form-group">
      <label for="phone">Phone:</label>
      <input value="<?php if(isset($phone)) echo $phone ?> " type="text" class="form-control" name="pname" required pattern = "[0-9]{10}" >
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input value="<?php if(isset($mail)) echo $mail ?> "type="email" class="form-control"  name="email" required>
      
    </div>
    <div class="form-group">
      <label for="email"></label>
      <input value="<?php if(isset($contactId)) echo $contactId ?> "type="hidden" class="form-control"  name="id">
      
    </div>
  
    <button type="submit" name="update_contact" class="btn btn-default">Update</button>
  </form>
</div>
  
</body>
<?php 



if(isset($_POST['update_contact'])){
    updateContact();

}
    
    



?>



</html>

