<?php


  @include 'config.php';

  session_start();

  if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM `backend` WHERE `email` = '$email' && `password` = '$password'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
      $row = mysqli_fetch_assoc($result);
        $_SESSION["email"] = $row["email"];
        $_SESSION["name"] = $row["name"];
        $_SESSION["type"] = $row["type"];
        if($row["email"] == 'admin'){
          header("Location: admin_dashboard.php");
        }else{
          header("Location: user_dashboard.php");
        }

      }else {
        echo "Email and Pasword doesn't match";
      }
    }



?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>

    <div class="container">
    <form class="" action="" method="post">
        <div class="row">
            <label for="">Email</label>
            <input type="text" name="email" value="">
        </div>

          <div class="row">
              <label for="">Password</label>
              <input type="password" name="password" value="">
          </div>
          <button name="submit" id="btn" onclick="clicked()">Log In</button>
    </form>
    <p> Don't have an account? <a href="registration.php">Register now</a>
    </div>

    <script type="text/javascript">
      function clicked(){
        window.alert("Login Succesful");
      }
    </script>

</body>
</html>
