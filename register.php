<?php
require 'config.php';
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['pass'];
  $confirmpass = $_POST['confirmpass'];
  $dub = mysqli_query($conn, "SELECT * FROM user WHERE name = '$name' OR email = '$email'");
  if (mysqli_num_rows($dub) > 0) {
    echo
    "<script> alert('name/email is already taken'); </script>";
  }
  else {
    if ($password == $confirmpass) {
      $query = "INSERT INTO user (email,name,password) VALUES ('$email', '$name', '$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Sign up successful'); </script>";
    }
    else {
      echo
      "<script> alert('Password doesnt match'); </script>";
    }
  }
}
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign up</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  <h2>Sign up</h2>
</div>

  <form class="" action="" method="post" onsubmit="">
    <div class="input-group">
  <label>Name</label>
  <input type="text" name="name" required><br>
  <label>Email</label>
  <input type="text" name="email" required><br>
  <label>Password</label>
  <input type="password" name="pass" required><br>
  <label>Confirm Password</label>
  <input type="password" name="confirmpass" required><br>
  <button type="submit" class="sub" name="submit">Sign up</button>
  <p>Already have an account? <a href="login.php">Login</a></p>
</div>
</form>
<footer>Copyright &copy; Scorpion</footer>
</body>
</html>
