<?php

  require '../php/connection.php';

  if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM user_table WHERE user_email='".$email."' AND user_password='".$password."' LIMIT 1";
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
      $userType = $row['user_admin'];

      if($_POST['email'] == 'user@email.com'){
        header('Location: ../index.php');
      } else {
        header('Location: ./settings.php');
      }
    } else {
      echo "Email or Password incorrect!";
      exit();
    }
  }
?>

<!DOCTYPE HTML>
<html lang = "en">
  <head>
    <title>Events Manager</title>
    <meta charset = "UTF-8" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/login.css">
  </head>

  <body>
    <div class="loginContainer">
      <div class="logoContainer">
        <a class="logoIcon"><i class="glyphicon glyphicon-calendar navIcon"></i></a>
        <h1 class="logoText">Events Manager</h1>
      </div>

      <div class="loginbreak"></div>

      <div class="loginFormContainer">
        <form method="post" action="login.php">
          <div class="form-group">
            <label>Email:</label>
            <input name="email" type="email" class="form-control" id="login-email" placeholder="Enter Email">
          </div>

          <div class="form-group">
            <label>Password:</label>
            <input name="password" type="password" class="form-control" id="login-password" placeholder="Enter Password">
          </div>

          <input class="btn btn-primary" type="submit" value="Login" />
        </form>
      </div>
    </div>
  </body>
</html>