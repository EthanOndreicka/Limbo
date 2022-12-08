<!DOCTYPE HTML>
<html lang="en">
<head><meta charset="UTF-8">
  <title>Limbo</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
  <style>
    body{
      min-height: 100vh;
      display: flex;
    }
    .container{
      margin: auto;
      width: 500px;
      max-width: 90%;
    }
    .container form{
      width: 100%;
      height: 100%;
      padding: 20%;
      background: white;
      border-radius: 4px;
      box-shadow: 0 0 20px rgba(0,0,0,0.15);
    }
    .container form h1{
      text-align: center;
      margin-bottom: 24px;
      color: black;
    }
    .container form .form-control{
      width: 100%;
      height: 40px;
      background: white;
      border-radius: 4px;
      border: 1px solid silver;
      margin: 10px 0 18px 0;
      padding: 0 10px;
    }
    .container form .btn{
      margin-left: 50%;
      transform: translateX(-50%);
      width: 120px;
      height: 34px;
      border: none;
      outline: none;
      background: #3678f4;
      cursor: pointer;
      font-size: 16px;
      text-transform: uppercase;
      color: white;
      border-radius: 4px;
      transition: .3s;
    }
    .container form .btn:hover{
      opacity: .7;
    }


  </style>
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
    
    <br>
    <br>
    <div class="container">
      <form action="">
        <h1>Login Form</h1>
        <div class="form-group">
          <label for="">Email ID</label>
          <input type="text" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="">Password</label>
          <input type="password" class="form-control" required>
        </div>
        <input type="submit" class="btn" value="Login">
      </form>
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