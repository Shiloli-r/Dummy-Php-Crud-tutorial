<?php include ('main.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width"><!-- Ensures that the website width is dynamic with the width of the device on which it is being viewed -->
    <meta name="description" content="Customer Management System">
    <meta name="keywords" content="Customer Management System, CRUD system, order sytem">
    <meta name="author" content="Ronald Shiloli">
    <title>Customer Management System | About</title>
    <link rel="stylesheet" href="./CSS/main.css">
  </head>
  <body>
    <section id="showcase">
      <div class=" containerx" id="mgmt">
        <h2>The Customer Management System</h2>
        <p>The system is for managing orders placed by customers, and keeping track of them.
          It is managed by users with different roles and privileges. It has admin and regular user roles.
          <p>
            It allows Creating, Reading, Updating and Deleting data. It is a CRUD application, with an underlying database
          </p>

        </p>

      </div>

    </section>
    <aside class="containerx" id="tbt">
      <article >
        <h3>That Better Team </h3>
        <p>Just a bunch of guys with a lot of psyche</p>
      </article>
    </aside>

    <div id="contact">
      <h4>Ask a question or Leave a comment</h4>
          <form class="" action="retrieveform.php" method="post">
            <label for="email">Email</label>
            <br>
            <input type="email" name="email" value="" placeholder="johndoe@example.com">
            <br>
            <label for="comments">Question / Comment: </label>
            <br>
            <textarea name="comments" rows="8" cols="80" placeholder="Question or Comment"></textarea>
            <button type="submit" name="comments" id="commentsbutton"> Submit</button>
          </form>

    </div>
    <div class="footer">
      <footer>
         <p>That Better Team &copy; 2019</p>
       </footer>
    </div>

  </body>
</html>
