<?php

  @include 'config.php';

  session_start();

  if(!isset($_SESSION['email'])){
    header('location: login.php');
  }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/admin_dashboard.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
    <header>
       <a href="admin_dashboard.php">VMS</a>

      <div class="logout">
        <a href="login.php" class="btn btn-primary">Logout</a>
      </div>
    </header>

    <!--<aside class="">
      <ul>
        <li><a href="">WELCOME</a></li>

        <li><a href="">Register Ward</a></li>

        <li><a href="">Book An Appointment</a></li>

        <li><a href="">US</a></li>

        <li><a href="">Contact</a></li>
      </ul>
    </aside>-->

    <div class="content">
        <!--php code go day thsi side-->
        <h3>Hi, <span>Admin</span></h3>
        <h2>Welcome <span><?php echo $_SESSION['name'];?></span></h2>
    </div>

    <!--Table-->
<table class="table table-striped w-auto">

  <!--Table head-->
  <thead>
    <tr>
      <th>S/N</th>
      <th>Image</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone Number</th>
      <th>Purpose</th>
      <th>Date of visit</th>
      <th>Time of visit</th>
      <th>Block Visitor</th>


    </tr>
  </thead>
  <!--Table head-->

  <!--Table body-->
  <tbody>
    <?php
    $sql = "SELECT * FROM user_dashboard";
    $res = mysqli_query($conn, $sql);

    if(mysqli_num_rows($res) > 0){
      while ($row = mysqli_fetch_assoc($res)) {
        ?>
        <tr class="table-info">
          <th scope="row"><?php echo $row['id']; ?></th>
          <td><?php echo $row['location']; ?></td>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['mobileno']; ?></td>
          <td><?php echo $row['purpose']; ?></td>
          <td><?php echo $row['DOV']; ?></td>
          <td><?php echo $row['TOV']; ?></td>
          <td><button class="btn btn-danger">BLOCK</button></td>

        </tr>
        <?php
      }
    }
    ?>
  </tbody>
  <!--Table body-->


</table>
<!--Table-->

  </body>
</html>
