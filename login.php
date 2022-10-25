<?php
require 'config.php';
if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = $_POST['pass'];
  $exist = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email' AND password = '$password'");
  $row = mysqli_fetch_assoc($exist);
  if (mysqli_num_rows($exist) > 0) {
    $_SESSION["user_id"] = $row["user_id"];
    header("Location: indo.php");
  }
}
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  <h2>Login</h2>
</div>

<form class="" action="" method="post">
<div class="input-group">
  <label>Email</label>
  <input type="text" name="email" id="box1" required><br><br>
  <label>Password</label>
  <input type="password" name="pass" id="box2" required><br>
  <button type="submit" class="sub" name="submit">Login</button>
  <p><a href="register.php">Create account</a></p>
</div>
</form>

</body>
<footer>Copyright &copy; Scorpion</footer>
</html>
