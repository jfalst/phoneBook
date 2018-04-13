<?php
include 'connections.php';


function createContact(){
    global $conn;
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $pname = $_POST['pname'];
    $ename = $_POST['email'];

    

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
    $the_last_name = $_POST['lname'];
    $the_first_name = $_POST['fname'];
    $the_phone_num = $_POST['pname'];
    $the_email = $_POST['email'];
    $the_id = $_POST['id'];

    $updateQuery = "UPDATE users SET last_name = '$the_last_name', first_name = '$the_first_name',
    phone = '$the_phone_num', email = '$the_email'
    WHERE id = $the_id";
    $conn->query($updateQuery);
    if ($conn->query($updateQuery) === TRUE) {
        echo "<script>alert('Contact was updated successfully')</script>";
        echo "<script>window.location.assign('phoneBookMain.php');</script>";

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


}
 
?>
