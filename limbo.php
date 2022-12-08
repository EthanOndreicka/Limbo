<!DOCTYPE HTML>
<html lang="en">
<head><meta charset="UTF-8">
  <title>Limbo</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
  <section class="header">
    <nav>
      <a href="limbo.php"><img src="images/logo.png"></a>
      <div class="nav-links">
        <ul>
          <li><a href="limbo.php">Home</a></li>
          <li><a href="lostSomething.php">Lost Something</a></li>
          <li><a href="foundSomething.php">Found Something</a></li>
          <li><a href="adminLogin.php">Admin Login</a></li>
        </ul>
      </div>
    </nav>

    <div class="text-box">
      <h1>With Limbo,</h1>
      <p>Finding and reporting lost items has never been easier!</p>
    </div>

  </section>
<?php

# Connect to MySQL server and the database
require( '../connect_db.php' ) ;

# Close the connection
mysqli_close( $dbc ) ;
?>
</body>
</html>