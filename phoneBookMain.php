<?php
include 'connections.php';
include 'functions.php';

if(isset($_GET['delete'])){
  deleteContact();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Phone Book</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="mystyle.css" />
    
</head>
<body>
<div class="container">
  <h2>Contacts</h2>
          
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Action</th>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Phone</th>
        <th>Email</th>

      </tr>
    </thead>
    
    <tbody>
    
        <?php
        $query = "SELECT * FROM users order by last_name";
        $result = $conn->query($query);
        while($row = $result->fetch_assoc()){
          $contactId = $row['id'];
          $last = $row['last_name'];
          $first = $row['first_name'];
          $phone = $row['phone'];
          $mail = $row['email'];
          ?>
          
          <?php
          echo "<tr>";
          echo "<td><a href='phoneBookMain.php?delete={$contactId}'>Delete</a>
          <a href='updateContact.php?edit={$contactId}'>Edit</a>
          </td>";
          echo "<td>{$last}</td>";
          echo "<td>{$first}</td>";
          echo "<td>{$phone}</td>";
          echo "<td>{$mail}</td>";
          echo "</tr>";

      }


        ?>
      </tr>
    
    </tbody>
    
  </table>
    <div id="Add">
      <a href="newUser.php">Add New</a>
</div>

  
</div>



    
</body>
</html>