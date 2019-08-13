<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width"><!-- Ensures that the website width is dynamic with the width of the device on which it is being viewed -->
    <meta name="description" content="Customer Management System">
    <meta name="keywords" content="Customer Management System, CRUD system, order sytem">
    <meta name="author" content="Ronald Shiloli">
    <title>Customer Management System | Welcome</title>
    <link rel="stylesheet" href="./CSS/main.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div id ="branding">
          <h1>That <span class="highlight">Better</span> Team</h1>
        </div>
        <nav>
          <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="login.php">Log in </a></li>
          </ul>

        </nav>

      </div>
    </header>
    <section id="showcase">
      <div class="container">
        <h1>Customer Management System</h1>
        <p>Create, Read, Update and Delete records. <br> Keep track of customer details and orders</p>
      </div>
      <div class="pending">
        <h3>Pending Orders</h3>
        <table cellspacing="20" cellpading="20" border="0" bgcolor="lightgrey">
          <thead>
            <tr>
              <th>Order Id</th><th>Customer Id</th><th>Order Date</th><th>Date Due</th><th>Duration</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td><td>cus_1</td><td>4/3/2019</td><td>6/3/2019</td><td>3 days</td>
            <td><button type="button" name="update" class="updatebutton">Update</button></td>
            <td><button type="button" name="delete" class="deletebutton">Delete</button></td>
            </tr>
            <tr>
              <td>2</td><td>cus_2</td><td>5/3/2019</td><td>9/3/2019</td><td>4 days</td>
              <td><button type="button" name="update" class="updatebutton">Update</button></td>
              <td><button type="button" name="delete" class="deletebutton">Delete</button></td>
            </tr>
          </tbody>
      </table>
      </div>

      <div class="completed">
        <h3>Completed Orders</h3>
        <table cellspacing="20" cellpading="20" border="0" bgcolor="lightgrey">
          <thead>
            <tr>
              <th>Order Id</th><th>Customer Id</th><th>Order Date</th><th>Date Completed</th><th>Duration</th>

            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td><td>cus_21</td><td>24/2/2019</td><td>28/2/2019</td><td>4 days</td>
              <td><button type="button" name="update" class="updatebutton">Update</button></td>
              <td><button type="button" name="delete" class="deletebutton">Delete</button></td>
            </tr>
            <tr>
              <td>2</td><td>cus_2</td><td>18/1/2019</td><td>25/1/2019</td><td>7 days</td>
              <td><button type="button" name="update" class="updatebutton">Update</button></td>
              <td><button type="button" name="delete" class="deletebutton">Delete</button></td>
            </tr>
          </tbody>
      </table>
      </div>

    <footer>
      <p>That Better Team &copy; 2019</p>
    </footer>
  </body>
</html>
