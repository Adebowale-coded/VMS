
    <!DOCTYPE html>
    <html>
    <head>
      <meta charset="utf-8">
      <title></title>
      <link rel="stylesheet" href="css/print.css">
      <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>

    </style>
    </head>

    <style type="text/css">
  @media screen
  {
      .noprint{}
      .noScreen{display:none;}
  }

  @media print
  {
      .noprint{display:none;}
      .noScreen{}
  }
  </style>
    <body>
      <header class="noprint">
      <a href="admin_dashboard.php">VMS</a>

     <div class="logout" >
       <a href="login.php" class="btn btn-primary" onclick="myFunction()"> Logout</a>
     </div>
     <script type="text/javascript">
       function myFunction(){
         alert("Thank you for using the VMS (VISITOR'S MANAGEMENT SYSTEM)");
       }
     </script>
   </header>
      <?php
        @include 'config.php';


        $id = $_GET['id'];

        $sql = "SELECT * FROM user_dashboard WHERE id = '$id'";

        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)){
          $row = mysqli_fetch_assoc($result);
        }
        $name = $row['name'];
        $user_type = $row['user_type'];
        $pname = $row['pname'];
        $email = $row['email'];
        $mobileno = $row['mobileno'];
        $purpose = $row['purpose'];
        $parent = $row['parent'];
        $DOV = $row['DOV'];
        $TOV = $row['TOV'];

      ?>

      <table class="table noprint">
        <!--this is the form that they will see-->
      <thead>
        <tr>
          <th scope="col">Printed Bage</th>
          <th scope="col">Information</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row"><img src="img/class.jpg" alt="passport" width="100px"></th>
          <td><p>Ward's Name: <?php echo $name; ?></p></td>

        </tr>
        <tr>
          <th scope="row"></th>
          <td><p>Level: <?php echo $user_type; ?></p></td>

        </tr>
        <tr>
          <th scope="row"></th>
          <td><p>Visitor's Name: <?php echo $pname; ?></p></td>
        </tr>
        <tr>
          <th scope="row"></th>
          <td><p>Email Address: <?php echo $email; ?></p></td>
        </tr>

        <tr>
          <th scope="row"></th>
          <td><p>Mobile Number: <span style="font-family= Britannic Bold;">+234 - </span><?php echo $mobileno; ?></p></td>
        </tr>

        <tr>
          <th scope="row"></th>
          <td><p>Purpose of Visit: <?php echo $purpose; ?></p></td>
        </tr>

        <tr>
          <th scope="row"></th>
          <td><p>Who are you: <?php echo $parent; ?></p></td>
        </tr>

        <tr>
          <th scope="row"></th>
          <td><p>Date Of Visit: <?php echo $DOV; ?></p></td>
        </tr>

        <tr>
          <th scope="row"></th>
          <td><p>Time Of Visit: <?php echo $TOV; ?></p></td>
        </tr>


      </tbody>
    </table>

    <div class="noprint">
    <p><button class="btn btn-primary" style="font-size:18px" onclick="window.print()">Print</button></p>
    </div>


<!--form they will not see-->

  <table class="table noScreen">
  <thead>
    <tr>
      <th scope="col">Printed Bage</th>
      <th scope="col">Information</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><img src="img/class.jpg" alt="passport" width="100px"></th>
      <td><p>Ward's Name: <?php echo $name; ?></p></td>

    </tr>
    <tr>
      <th scope="row"></th>
      <td><p>Level: <?php echo $user_type; ?></p></td>

    </tr>
    <tr>
      <th scope="row"></th>
      <td><p>Visitor's Name: <?php echo $pname; ?></p></td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td><p>Email Address: <?php echo $email; ?></p></td>
    </tr>

    <tr>
      <th scope="row"></th>
      <td><p>Mobile Number: <?php echo $mobileno; ?></p></td>
    </tr>

    <tr>
      <th scope="row"></th>
      <td><p>Purpose of Visit: <?php echo $purpose; ?></p></td>
    </tr>

    <tr>
      <th scope="row"></th>
      <td><p>Who are you: <?php echo $parent; ?></p></td>
    </tr>

    <tr>
      <th scope="row"></th>
      <td><p>Date Of Visit: <?php echo $DOV; ?></p></td>
    </tr>

    <tr>
      <th scope="row"></th>
      <td><p>Time Of Visit: <?php echo $TOV; ?></p></td>
    </tr>


  </tbody>
</table>


    </body>
    </html>
