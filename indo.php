<?php
require 'config.php';
if (!empty($_SESSION["user_id"]))
{
  $id = $_SESSION["user_id"];
  $res = mysqli_query($conn, "SELECT * FROM user WHERE user_id = $id");
  $row = mysqli_fetch_assoc($res);
}
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Welcome</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  <h2>Welcome <?php echo $row["name"]; ?></h2>
  <div id="log">
    <a href="logout.php">Logout</a>
  </div>
</div>
</body>
</html>
