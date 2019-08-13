<?php include_once 'main.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


      <div id="newuser">
        <h1><center> Create New User </center> </h1>
        <table class="inserttable" cellspacing="2" cellpadding="10" >
          <form class="insertform" action="insertdb.php" method="post">
            <tbody>
              <tr>
                <td><label for="user_id">User id: </label></td>
                <td><input type="number" name="user_id" value="" placeholder="User ID (can be null)"></td>
              </tr><br>
              <tr>
                <td><label for="username">Username: </label></td>
                <td><input type="text" name="username" value="" placeholder="Username"></td>
              </tr>  <br>
              <tr>
                <td><label for="uemail">Email: </label></td>
                <td><input type="email" name="uemail" value="" placeholder="Email"></td>
              </tr><br>
              <tr>
                <td><label for="password">Password: </label></td>
                <td><input type="password" name="" value="" placeholder="Password "></td>
              </tr><br>
              <tr>
                <td><label for="privilege">Privilege: </label></td>
                <td>
                  <select class="" name="privilege">
                  <option value="admin">admin</option>
                  <option value="user">user</option>
                  </select>
                </td>
              </tr><br>
              <tr>
                <td><label for="udate_registered">Date Registered: </label></td>
                <td><input type="date" name="udate_registered" value="" placeholder="Date of Registration"></td>
              </tr>
              <br><br>
              <td></td><td><button type="button" name="create_user"> Create User </button></td><td></td>
              </tbody>
            </form>
        </table>
      </div>

<!-- This is for creating the customer -->

      <div id="newcustomer">
        <h1><center> Create New Customer </center> </h1>
        <table class="inserttable" cellspacing="2" cellpadding="10" >
          <form class="insertform" action="insertdb.php" method="post">
            <tbody>
              <tr>
                <td><label for="customer_id">Customer Id: </label></td>
                <td><input type="number" name="customer_id" value="" placeholder="Customer Id"></td>
              </tr>
              <tr>
                <td><label for="fname">First Name: </label></td>
                <td><input type="text" name="fname" value="" placeholder="First Name"></td>
                <td><label for="lname">Last Name: </label></td>
                <td><input type="text" name="lname" value="" placeholder="Last Name"></td>
              </tr>  <br>
              <tr>
                <td><label for="cemail">Email: </label></td>
                <td><input type="email" name="cemail" value="" placeholder="Email"></td>
                <td><label for="phone">Phone: </label></td>
                <td><input type="number" name="phone" value="" placeholder="Phone"></td>
              </tr><br>
              <tr>
                <td><label for="cdate_registered">Date Registered: </label></td>
                <td><input type="date" name="cdate_registered" value="" placeholder="Date of Registration"></td>
              </tr>
              <br><br>
              <td></td><td><button type="button" name="create_customer"> Register Customer </button></td><td></td>
              </tbody>
            </form>
        </table>
      </div>

      <!-- This is for creating the Orders -->

            <div id="neworder">
              <h1><center> Create Order </center> </h1>
              <table class="inserttable" cellspacing="2" cellpadding="10" >
                <form class="insertform" action="insertdb.php" method="post">
                  <tbody>
                    <tr>
                      <td><label for="order_id">Order Id: </label></td>
                      <td><input type="number" name="order_id" value="" placeholder="Order Id"></td>
                    <tr>
                      <td><label for="ocustomer_id">Customer Id: </label></td>
                      <td><input type="number" name="ocustomer_id" value="" placeholder="Customer Id"></td>
                    </tr>
                    </tr>  <br>
                    <tr>
                      <td><label for="order_date">Order Date: </label></td>
                      <td><input type="date" name="order_date" value="" placeholder="Order Date"></td>
                    </tr><br>
                    <tr>
                      <td><label for="due_date">Due Date: </label></td>
                      <td><input type="date" name="due_date" value="" placeholder="Due Date"></td>
                    </tr><br>
                    <tr>
                      <td><label for="date_completed">Date Completed: </label></td>
                      <td><input type="date" name="date_completed" value="" placeholder="Date Completed"></td>
                    </tr>
                    <br><br>
                    <td></td><td><button type="button" name="create_order"> Create Order </button></td><td></td>
                    </tbody>
                  </form>
              </table>
            </div>

    <footer>
      <p>That Better Team &copy; 2019</p>
    </footer>
  </body>
</html>
