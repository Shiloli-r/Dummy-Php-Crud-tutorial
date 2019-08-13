<?php
require_once 'dbconnection.php';
/* Creating a new user */
if (isset($_POST['create_user'])) {
  /*Creating the SQL query */
    $user_id = $_POST['user_id'];
    $username = $_POST['username'];
    $email = $_POST['uemail'];
    $password = $_POST['password'];
    $privilege = $_POST['privilege'];
    $date_registered = $_POST['udate_registered'];


    $sql = "INSERT INTO users (	username,	email,	password,	privilege,	date_registered)
    VALUES ('".$username."' , '".$email."', '".$password."', '".$privilege."','".$date_registered."'  )";

  /* Running the query and checking for errors */


     if ($conn -> query($sql) == TRUE) { //Executes the query and checks whether it returns true(is successful )
       echo "Record Created successfully<br>";
     }else {
       echo "An Error occured".'<br>'. $conn->error;
       echo  $user_id. "<br>",$username."<br>",$email."<br>",$password."<br>",$privilege."<br>",$date_registered."<br>";
     }

}

 ?>
