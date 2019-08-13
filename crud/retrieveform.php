<?php
require_once 'dbconnection.php';
/* Validating input  */
//  htmlspecialchars(); - This function converts all text fields of the form into html special characters
//  stripslashes();  - Takes out the slashes
// trim();
// filter_var(var, filtername, options); -Does both validation and sanitization and takes 2 parameters, first a variable and a special

/*
if($_SERVER['REQUEST_METHOD'] == 'GET'){

}*/
if(isset($_POST['login']))
{
  echo "The button works <br>";
}else{
  echo "The button does not work";
}

if (isset($_POST['username']) && isset($_POST['password'])) {
  if (!empty($_POST['username']) && !empty($_POST['password'])) {
    //validation
    $raw_pass = $_POST['password'];
    $raw_username = trim($_POST['username']); //Sanitizing the data
    $username = filter_var($raw_username,FILTER_VALIDATE_REGEXP);
    echo $username."<br>";

    //creating the sql query.
    $sql=

  //  echo $_POST['username'], "<br>";
  //  echo md5($_POST['password']), "<br>";
}else if(empty($_POST['username']) || empty($_POST['password'])){
    header("location:login.php?Empty= Please fill in all the fields");
                            /*This Empty variable will be passed to the $_GET in the login file*/
}
}


//The about page
if (isset($_POST['email']) && !empty($_POST['email'])) {

    //validation
    $raw_email = $_POST['email'];
    $raw_email = trim($_POST['email']); //Sanitizing the data
    $email = filter_var($raw_email,FILTER_VALIDATE_EMAIL);
    echo $email."<br>";
}
 ?>
