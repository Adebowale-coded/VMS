<?php

  @include 'config.php';

  session_start();

  if(!isset($_SESSION['email'])){
    header('location: login.php');
  }

  if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $user_type = $_POST['user_type'];
    $pname = mysqli_real_escape_string($conn, $_POST['pname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mobileno = mysqli_real_escape_string($conn, $_POST['mobileno']);
    $purpose = mysqli_real_escape_string($conn, $_POST['purpose']);
    $parent = $_POST['parent'];
    $DOV = mysqli_real_escape_string($conn, $_POST['DOV']);
    $TOV = mysqli_real_escape_string($conn, $_POST['TOV']);
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $image_name = addslashes($_FILES['image']['name']);
    $image_size = getimagesize($_FILES['image']['tmp_name']);

    move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
    $location = "upload/" . $_FILES["image"]["name"];

    $sql = "INSERT INTO `user_dashboard`(`name`, `user_type`, `pname`, `email`, `mobileno`, `purpose`, `parent`, `DOV`, `TOV`, `location`) VALUES
    ('$name','$user_type','$pname','$email','$mobileno','$purpose', '$parent','$DOV','$TOV', '$location')";

    $result = mysqli_query($conn, $sql);

    if($result){
      $last_id = mysqli_insert_id($conn);
      header('location: print.php?id='.$last_id);
    }else{
      echo"not submitted";
    }
  }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/admin_dashboard.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  </head>
  <body>
    <header>
       <a href="admin_dashboard.php">VMS</a>

      <div class="logout">
        <a href="login.php" class="btn btn-primary"> Logout</a>
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
        <h3>Hi, <span><i class="fa fa-hand-paper-o" aria-hidden="true"></i></span></h3>
        <h2>Welcome <span><?php echo $_SESSION['name'];?></span></h2>
    </div>


<form method="post" enctype="multipart/form-data" id="form">
  <h5>BOOK AN APPOINTMENT</h5>

  <input type="file" id="myFile" name="image" required>
  <div class="form-row">
    <div class="form-group col-sm-2">
      <label for="inputEmail4">Ward's Name</label>
      <input type="name" class="form-control" name="name" placeholder="Full Name" id="name" required>
    </div>

    <div class="form-group col-sm-2">
      <label for="inputState">Level</label>
      <select  name="user_type" class="form-control" id="sname">
        <option selected>Choose...</option>
        <option value="100">100 LEVEL</option>
        <option value="200">200 LEVEL</option>
        <option value="300">300 LEVEL</option>
        <option value="400">400 LEVEL</option>
      </select>
    </div>
  </div>

  Visitor's name:<br>
  <input type="text" class="form-control col-sm-4" placeholder="Your name" name="pname" required><br>
  Email Address:<br>
  <input type="text" name="email" class="form-control col-sm-4" placeholder="@gmail.com" required><br><br>


  Mobile Number</label>
  <input type="number" class="form-control col-sm-4" name="mobileno"  placeholder="" required>

  <div class="form-row">
    <div class="form-group col-sm-2">
      <label for="inputCity">Purpose of visit</label>
      <input type="text" class="form-control" name="purpose" required>
    </div>

    <div class="form-group col-sm-2">
      <label for="inputState">Who are you</label>
      <select  name="parent" class="form-control" required>
        <option selected>Choose...</option>
        <option>Parent / Guardian</option>
        <option>Sibling</option>
        <option>Others</option>
      </select>
    </div>

    </div>


  <div class="form-row">
    <div class="form-group col-sm-2">
      <label for="inputCity">Date of visit</label>
      <input type="date" class="form-control" name="DOV" required>
    </div>

    <div class="form-group col-sm-2">
      <label for="inputCity">Time of visit</label>
      <input type="time" class="form-control" name="TOV" required>
    </div>

    </div>


  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

<img class="disk" src="img/monitor.png" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>




  </body>
</html>
