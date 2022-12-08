<!DOCTYPE HTML>
<html lang="en">
<head><meta charset="UTF-8">
  <title>Limbo</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
<style>
    table{
        border-collapse: collapse;
        border-radius: 5px;
        width: 90%;
        justify-content: center;
        box-shadow: 0 0 20px rgba(0,0,0,0.15);
        text-align: right;
        margin-right: auto;
        margin-left: auto;
        overflow: hidden;
    }
    th {
        background-color: #3678f4;
        text-align: right;
        color: white;
        padding: 5px;
        
    }
    tr:nth-child(even){
        background-color: #f2f2f2;
        text-align: right;
        
    }

    input[type=text]{
        width: 150px;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
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
    <div class="lost-text">
      <h1>Found Something?</h1>
      <p>Report it below!</p>
  </div>

  <br>

<table>
<tr>
    <th>ID</th>
    <th>Description</th>
    <th>Lost Date</th>
    <th>Status</th>
</tr>
    <?php
     # Connect to MySQL server and the database
    require( '../connect_db.php' ) ;
    $conn = mysqli_connect("localhost", "ethan", "pepper123", "limbo_db");
    if ($conn->connect_error){
        die("Connection Failed: " . $conn->connect_error);
    }
    # displays table
    $sql = "SELECT location_id, description, create_date, status FROM stuff";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
        while ($row = $result-> fetch_assoc()){
            echo "<tr><td>" . $row["location_id"] . "</td><td>" . $row["description"] .
            "</td><td>" . $row["create_date"] . "</td><td>" . $row["status"] . "</td></tr>";
        }
        echo "</table>";
    }
    else{
        echo "0 results";
    }
    $conn->close();
    ?>
  </table>
  <br>

  <!-- Gets input from users -->
  <div class="found-form">
  <form action="foundSomething.php" method="POST">
    <label for="name">Full name</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="description">Item Description</label><br>
    <input type="text" id="description" name="description"><br><br>
    <input type="submit" value="Submit">
  </form>
</div>



  </section>
</body>
</html>