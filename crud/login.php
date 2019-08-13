<?php include "main.php"?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width"><!-- Ensures that the website width is dynamic with the width of the device on which it is being viewed -->
    <meta name="description" content="Customer Management System">
    <meta name="keywords" content="Customer Management System, CRUD system, order sytem">
    <meta name="author" content="Ronald Shiloli">
    <title>Customer Management System | Login</title>

  </head>
  <body>

    <div class="container bodycontainer" id="formcontainer">
       <h1>Log In to continue<hr></h1>
       <?php
            if (@$_GET['Empty']==true) {
        ?>

          <div class="alert"> <?php echo $_GET['Empty'] ?>  </div>

        <?php
            }
         ?>

         <table  cellspacing="5" cellpadding="10" >
           <form  action="retrieveform.php" method="post">
             <tbody>
               <tr>
                 <td>
                   <label for="username">Username: </label>
                 </td>
                 <td>
                   <input type="text" name="username" value="" placeholder="Username">
                 </td>
               </tr>
               <tr>
                 <td>
                   <label for="password">Password: </label>
                 </td>
                 <td>
                   <input type="password" name="password" value="" placeholder="Password">
                 </td>
               </tr>
               <tr>
                 <td>
                   <button type="submit" name="login">Log in</button>
                 </td>
               </tr>
             </tbody>
           </form>
         </table>
         <br>
         <a href="#">Forgot Password?</a>


    </div>


    <footer>
      <p>That Better Team &copy; 2019</p>
    </footer>
  </body>
</html>
