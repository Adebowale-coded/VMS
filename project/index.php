<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>VMS</title>
    <link rel="stylesheet" href="css/web.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <section class="header">
          <nav>
              <a href="web.php"><img src="img/crwlg.png"></a>
              <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                  <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="">ABOUT</a></li>
                    <li><a href="registration.php">SIGN UP</a></li>
                    <li><a href="login.php">LOG IN</a></li>
                  </ul>
              </div>
              <i class="fa fa-bars" onclick="showMenu()"></i>
          </nav>

          <div class="text-box">
            <h1>VISITOR'S MANAGEMENT SYSTEM</h1>
            <p>Managing visitors is an essential access control
              activity traditionally handled through pen and paper method <br>or guest books,
              where visitors sign in at the front desk or hall manager’s office.
            </p>
            <a href="registration.php" class="hero-btn">Register Now</a>
          </div>
    </section>

    <!-- About -->
    <section class="about">
      <h2> FEATURES OF VMS </h2>
      <p>A visitor’s management system can track and record the usage of the facilities
        by specific visitors and provide documentation of guest’s whereabouts.</p>

      <div class="row">
        <div class="about-col">
          <h3>Request</h3>
          <p>A visitor’s management system enables quick visitor self sign-in with face capture.</p>
        </div>

        <div class="about-col">
          <h3>Alert</h3>
          <p>Instant visitor badge/pass printing for pre-registered visitors automated visitor self sign-out with feedback</p>
        </div>

        <div class="about-col">
          <h3>Biometrics / Camera capture</h3>
          <p>A visitor’s management system can track and record the usage of the facilities
            by specific visitors and provide documentation of guest’s whereabouts.</p>
        </div>
      </div>

    </section>

    <section class="register">
        <h1>Registration</h1>
        <p>A visitor’s management system can track and record</p>

        <div class="row">
          <div class="reg-col">
              <img src="img/unsplash.jpg" alt="">
              <div class="layer">
                  <h3>HOSTEL</h3>
              </div>
          </div>

          <div class="reg-col">
              <img src="img/library.jpg" alt="">
              <div class="layer">
                  <h3>CAMPUS</h3>
              </div>
          </div>

          <div class="reg-col">
              <img src="img/class.jpg" alt="">
              <div class="layer">
                  <h3>CLASS</h3>
              </div>
          </div>
        </div>
    </section>

    <!--testimonials-->
    <section class="testimonials">
      <h1>What Our Users Says</h1>
      <p>Reviews from our users far and wide</p>

      <div class="row">
          <div class="testimonial-col">
            <img src="img/debo2.jpg" alt="">
            <div class="davs">
              <p>This app does exactly as it advertises. I use Roku on my phone as a remote,
                 it runs off 2 devices connected to the same WiFi poa. I have to disconnect VPN to be able to use the remote on my phone,
                  so it does what it is supposed to. One add to turn on or off is worth it to me.</p>
                <h3>Charlie Adeoye</h3>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
            </div>

          </div>

          <div class="testimonial-col">
            <img src="img/debo1.jpg" alt="">
            <div class="davs">
              <p>This app does exactly as it advertises. I use Roku on my phone as a remote,
                it runs off 2 devices connected to the same WiFi poa. I
                have to disconnect VPN to be able to use the remote on my phone,
                 so it does what it is supposed to. One add to turn on or off is worth it to me.</p>
                <h3>Moremi Omotunde</h3>

                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half" aria-hidden="true"></i>
            </div>

          </div>
      </div>
    </section>

    <section class="cta">
        <h1>Enrol your child/ward into Crawford University</h1>
        <a href="" class="hero-btn"> CONTACT US </a>
    </section>

    <section class="footer">
        <h4>Contact Us</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
           sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br/>
           Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
           <div class="icons">
              <i class="fa fa-facebook"></i>
              <i class="fa fa-instagram"></i>
              <i class="fa fa-twitter"></i>
           </div>
    </section>




<!-- Javacript for the close and open button -->
<script>
    var navLinks = document.getElementById("navLinks");
    function showMenu(){
      navLinks.style.right = "0";
    }

    function hideMenu(){
      navLinks.style.right = "-200px";
    }
</script>

  </body>
</html>
