<?php

  @include 'config.php';

  session_start();

  if(!isset($_SESSION['email'])){
    header('location: login.php');
  }

?><!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  </head>
  <body>
      <div class="sidebar">
        <div class="sidebar-brand">
          <h1><span class=""><img src="img/crwlg.png" style="width:70px;height:35px;"></span>VMS</h1>
        </div>

        <div class="sidebar-menu">
          <ul>
            <li>
              <a href="#" class="active"><span class="las la-igloo"></span>
              <span>Dashoard</span></a>
            </li>

            <li>
              <a href="#"><span class="las la-users"></span>
              <span>Customers</span></a>
            </li>

            <li>
              <a href="#"><span class="las la-clipboard-list"></span>
              <span>Projects</span></a>
            </li>

            <li>
              <a href="#"><span class="las la-shopping-bag"></span>
              <span>Orders</span></a>
            </li>

            <li>
              <a href="#"><span class="las la-receipt"></span>
              <span>Inventory</span></a>
            </li>
            <li>
              <a href="#"><span class="las la-user-circle"></span>
              <span>Accounts</span></a>
            </li>
          </ul>

        </div>

      </div>

      <div class="main-content">
        <header>
          <h3>
            <label for="">
                <span class="las la-bars"></span>
            </label>

            Dashboard
          </h3>

          <div class="search-wrapper">
            <span class="las la-search"></span>
            <input type="search" placeholder="search here" />
          </div>

          <div class="user-wrapper">
            <img src="img/debo2.jpg" width="30px" height="40px" alt="">
            <div class="">
              <h4>John Doe</h4>
              <small>Super admin</small>
            </div>
          </div>
        </header>

        <main>
          <div class="cards">
            <div class="card-single">
              <h3>Hi, <span>Admin</span></h3>
              <h1>Welcome <span><?php echo $_SESSION['name'];?></span></h1>
              <!--<p>This an admin page</p>-->
            </div>

          </div>
          <div class = "box">
          <div class="form_wrapper">
  <div class="form_container">
    <div class="title_container">
      <h2>Responsive Registration Form</h2>
    </div>
    <div class="row clearfix">
      <div class="">
        
      <form>
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
            <input type="text" name="Name" placeholder="Email" required />
          </div>

          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
            <input type="password" name="password" placeholder="Password" required />
          </div>

          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
            <input type="password" name="password" placeholder="Re-type Password" required />
          </div>

          <div class="row clearfix">
            <div class="col_half">
              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                <input type="text" name="name" placeholder="First Name" />
              </div>
            </div>

            <div class="col_half">
              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                <input type="text" name="name" placeholder="Last Name" required />
              </div>
            </div>
          </div>

            	<div class="input_field radio_option">
              <input type="radio" name="radiogroup1" id="rd1">
              <label for="rd1">Male</label>
              <input type="radio" name="radiogroup1" id="rd2">
              <label for="rd2">Female</label>
              </div>
              <div class="input_field select_option">
                <select>
                  <option>Select a country</option>
                  <option>Option 1</option>
                  <option>Option 2</option>
                </select>
                <div class="select_arrow"></div>
              </div>
            <div class="input_field checkbox_option">
            	<input type="checkbox" id="cb1">
    			<label for="cb1">I agree with terms and conditions</label>
            </div>
            <div class="input_field checkbox_option">
            	<input type="checkbox" id="cb2">
    			<label for="cb2">I want to receive the newsletter</label>
            </div>
          <input class="button" type="submit" value="Register" />
        </form>
      </div>
    </div>
  </div>
</div>
</div>

        </main>

        <section> 
        
        </section>

      </div>

  </body>
</html>
