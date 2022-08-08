<?php


  @include 'config.php';

  if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $mobileno = mysqli_real_escape_string($conn, $_POST['mobileno']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $reasons = mysqli_real_escape_string($conn, $_POST['reasons']);
    $who = mysqli_real_escape_string($conn, $_POST['who']);
    $user_type = $_POST['user_type'];
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    $sql = "SELECT * FROM `backend` WHERE `mobileno` = '$mobileno'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
      echo "The user is present";
    }else {
       if($password == $cpassword){
         $sql = "INSERT INTO `backend`(`name`, `dob`, `gender`, `mobileno`, `email`, `address`, `reason`, `who`, `type`, `state`, `password`, `cpassword`)
         VALUES ('$name','$dob','$gender','$mobileno','$email','$address','$reasons','$who','$user_type','$state','$password','$cpassword')";
         $result = mysqli_query($conn, $sql);
         if ($result) {
           echo "success";
         }else{
           echo "Something went wrong";
         }
       }else {
         echo "Password doesn't match";
         header('location:login.php');
       }

    }


    }


?>


<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title> VISITOR'S MANAGEMENT SYSTEM </title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

      <div class="container">
        <header>Registration</header>

        <!--<a href="#" class="logo">
            <img src="img/crwlg.png" alt="Logo" class="img-responsive" style="width:16%;">
        </a>-->



          <form action="" method="post">
              <div class="form first">
                <div class="details personal">
                  <span class="title">Personal Details</span>
                </div>



                <div class="fields">

                  <div class="input-field">
                    <label class="details">Full Name</label>
                    <input type="text" placeholder= "Enter your name" name="name" required/>
                  </div>

                  <div class="input-field">
                    <label class="details">Date of Birth</label>
                    <input type="Date" placeholder="Date of Birth" name="dob" required/>
                  </div>

                  <div class="input-field">
                    <label class="details">Gender</label>
                    <input type="text" placeholder="Gender" name="gender" required/>
                  </div>


                  <div class="input-field">
                    <label class="details">Mobile Number</label>
                    <input type="number" placeholder="Mobile Number" name="mobileno" required/>
                  </div>

                  <div class="input-field">
                    <label class="details">Email Address</label>
                    <input type="text" placeholder="Enter your email address" name="email" required/>
                  </div>

                  <div class="input-field">
                    <label class="details">Visitor's Address</label>
                    <input type="text" placeholder="Address" name="address" required/>
                  </div>

                  <!--<div class="input-field">
                    <label class="details">Town</label>
                    <input type="text" placeholder="Town" name="address" required/>
                  </div>-->

                </div>

                <!--Second part--> <!--Second part--> <!--Second part--> <!--Second part-->

                <div class="details ID">
                  <span class="title"> Visiting Details </span>
                </div>

                <div class="fields">

                  <div class="input-field">
                    <label class="details">Reasons For Visiting</label>
                    <input type="text" placeholder= "" name="reasons" required/>
                  </div>

                  <div class="input-field">
                    <label class="details">Who Are You Visiting / Ward</label>
                    <input type="text" placeholder="Who Are You Visiting" name="who" required/>
                  </div>

                  <div class="input-field">
                    <label for="">Select</label>
                    <Select  name="user_type" class="details">
                    <option value="parents">Parents</option>
                    <option value="siblings">Sibling</option>
                    <option value="relative">Relative</option>
                    <option value="delivery">Delivery</option>
                    <option value="others">Others</option>
                    </select>
                  </div>

                  <div class="input-field">
                    <label class="details">State</label>
                    <input type="text" placeholder="State" name="state" required/>
                  </div>

                  <div class="input-field">
                    <label class="details">Password</label>
                    <input type="password" placeholder="Password" name="password" required/>
                  </div>

                  <div class="input-field">
                    <label class="details">Confirm Password</label>
                    <input type="password" placeholder="Confirm Password" name="cpassword" required/>

                  </div>
                  <!--<input type="checkbox" onclick="myFunction()">Show Passwword-->
             </div>






             <button name="submit" class="nextBtn">
              <span class="btnText">Register</span>
            </button>

            <p> Already have an account? <a href="login.php">Login Now</a>


          </form>
      </div>
          </div>



          </html>


          <!--<script>
              function myFunction() {
                var x =
                document.getElementById("myInput");
                if (x.type === "password") {
                  x.type = "text";
                } else{
                  x.type = "password";
                }
              }
          </script>-->
