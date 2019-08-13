<?php include 'main.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div id="newuser">
      <h1><center> Create New User </center> </h1>

        <form class="insertform" action="insertdb.php" method="post">
          <label for="user_id">User id: </label>
          <input type="number" name="user_id" value="" placeholder="User ID (can be null)">
            <br>
          <label for="username">Username: </label>
          <input type="text" name="username" value="" placeholder="Username">
            <br>
          <label for="uemail">Email: </label>
          <input type="email" name="uemail" value="" placeholder="Email">
            <br>
          <label for="password">Password: </label>
          <input type="password" name="password" value="" placeholder="Password ">
            <br>
          <label for="privilege">Privilege: </label>
          <select class="" name="privilege">
            <option value="admin">admin</option>
            <option value="user">user</option>
          </select>
              <br>
          <label for="udate_registered">Date Registered: </label>
          <input type="date" name="udate_registered" value="" placeholder="Date of Registration">
          <br><br>
        <button type="submit" name="create_user"> Create User </button>
          </form>
          <<?php
            if (isset($_POST['create_user'])) {
              echo "The create user button has been pressed";
            }

           ?>

    </div>

  </body>
</html>
