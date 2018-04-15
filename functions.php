<?php
include 'connections.php';


function createContact(){
    global $conn;
    //validate data on server side in addition to client side validation
    $lname = test_input($_POST["lname"]);
    $fname = test_input($_POST["fname"]);
    $pname = test_input($_POST['pname']);
    $ename = test_input($_POST["email"]);

// after data is validated, do sql Insert

    $sql = "INSERT INTO users (last_name, first_name, phone, email)
VALUES ('$lname', '$fname', '$pname', '$ename')";

    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New contact created successfully')</script>";
        echo "<script>window.location.assign('phoneBookMain.php');</script>";

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
}

    


function deleteContact(){
    global $conn;
    $the_contact_id = $_GET['delete'];
    $query = "DELETE FROM users WHERE id = $the_contact_id";
    $conn->query($query);
    
}

function updateContact(){
    global $conn;
    
    $the_last_name = test_input($_POST["lname"]);
    $the_first_name = test_input($_POST['fname']);
    $the_phone_num = test_input($_POST['pname']);
    $the_email = test_input($_POST['email']);
    $the_id = $_POST['id'];

    $updateQuery = "UPDATE users SET last_name = '$the_last_name', first_name = '$the_first_name',
    phone = '$the_phone_num', email = '$the_email'
    WHERE id = $the_id";
    //$conn->query($updateQuery);
    if ($conn->query($updateQuery) === TRUE) {
        echo "<script>alert('Contact was updated successfully')</script>";
        echo "<script>window.location.assign('phoneBookMain.php');</script>";

    } else {
        echo "Error: " . $updateQuery . "<br>" . $conn->error;
    }


}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
 
?>
