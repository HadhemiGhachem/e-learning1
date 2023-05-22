<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"
    />

    <!--Name of our File-->
    <title>Login</title>

    <!--link file CSS-->
    <link rel="stylesheet" href="css/login.css" />

    <!--link icons-->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
  </head>
  <body>
    <!--NavBar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" id="navbar-brand" href="index.html">Edu<em>Online</em> </a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <img class="menu" src="images/menu.png" alt="" srcset="" />
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="22"
                height="22"
                fill="currentColor"
                id="icon_navbar"
                class="bi bi-house-door-fill"
                viewBox="0 0 16 16"
              >
                <path
                  d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"
                />
              </svg>
              Home</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">
              <svg
                id="icon_navbar"
                xmlns="http://www.w3.org/2000/svg"
                width="22"
                height="22"
                fill="currentColor"
                class="bi bi-journal-code"
                viewBox="0 0 16 16"
              >
                <path
                  fill-rule="evenodd"
                  d="M8.646 5.646a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L10.293 8 8.646 6.354a.5.5 0 0 1 0-.708zm-1.292 0a.5.5 0 0 0-.708 0l-2 2a.5.5 0 0 0 0 .708l2 2a.5.5 0 0 0 .708-.708L5.707 8l1.647-1.646a.5.5 0 0 0 0-.708z"
                />
                <path
                  d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"
                />
                <path
                  d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"
                />
              </svg>
              About us</a
            >
          </li>
 
          <li class="nav-item">
            <a class="nav-link" href="Contact.html">
              <svg
                id="icon_navbar"
                xmlns="http://www.w3.org/2000/svg"
                width="22"
                height="22"
                fill="currentColor"
                class="bi bi-person-fill"
                viewBox="0 0 16 16"
              >
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
              </svg>
              Contact</a
            >
          </li>
        </ul>
      </div>
    </nav>
    <!--------------------login__Section------------------------>
    <section class="Login__Section">
      <form class="Login__Form" action="log.php" method="post">
        <h1 id="edu">Edu<em>Online</em></h1>
        <br />
        <h2>Welcome Again</h2>
        <br />

        <?php 
        if(isset($_GET['error'])) { ?>
        <p class="error"> <?php echo  $_GET['error']; ?> </p>
        <?php



        }
        ?>
        <label>Login :</label><br />
        <input name="email" class="email" id="logini" type="email" placeholder="example@email.com" />
        <div class="errorE"></div>
        <br /><br />
        <label>Password :</label>
        <br />
        <input name="password" class="passwoord" id="pasis" type="password" placeholder="password..." />

        <div class="errorP"></div>

        <br /><br />
        <div class="errorAll"></div>
        <input type="checkbox" />
        <label>Remember Me</label><br /><br />
        <input class="loginbtn" type="submit" name="submit">
        <br /><br />
        <button class="passwordbtn">Forget Password?</button>
        <div class="modalLogin hidden">
          <button class="close-modal">&times;</button>
          <h2>login successful  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
          </svg></h2>
          <p style="color: green;">welcome in your account </p>
        </div>
        <div class="modalForget hidden">
          <button class="close-modal">&times;</button>
          <h2>Login account unsuccessful ?</h2><br>
          <p style="color: crimson; font-size: 25px;">Please enter Your Phone number</p>
          <input type="number" placeholder="Phone Number"><br><br>
          <p style="font-size: 22px; text-decoration: underline black 1px;" >we will send a code !</p>
        </div>
      </form>
    </section>
    <!------------------footer_____Section------------------->
    <footer>
      <div class="footer_container">
        <div class="footer_colone">
          <h3 id="navbar-brand">Edu<em>Online</em></h3>
          <ul class="footer_list">
            <li class="List_Item">
              <a href="">About</a>
            </li>
            <li class="List_Item">
              <a href="">What We Offer</a>
            </li>
            <li class="List_Item">
              <a href="">Leadership</a>
            </li>
            <li class="List_Item">
              <a href="">Careers</a>
            </li>
            <li class="List_Item">
              <a href="">Catalog</a>
            </li>
            <li class="List_Item">
              <a href="">Courses Plus</a>
            </li>
            <li class="List_Item">
              <a href="">Professional Certificates</a>
            </li>
            <li class="List_Item">
              <a href="">Become a Partner</a>
            </li>
          </ul>
        </div>

        <div class="footer_colone">
          <h3>Community</h3>
          <ul class="footer_list">
            <li class="List_Item">
              <a href="#">Learners</a>
            </li>
            <li class="List_Item">
              <a href="#">Partners</a>
            </li>
            <li class="List_Item">
              <a href="#">Developers</a>
            </li>
            <li class="List_Item">
              <a href="#">Beta Testers</a>
            </li>
            <li class="List_Item">
              <a href="#">Translators</a>
            </li>
            <li class="List_Item">
              <a href="#">Tech Blog</a>
            </li>
            <li class="List_Item">
              <a href="#">Teahing Center</a>
            </li>
          </ul>
        </div>

        <div class="footer_colone">
          <h3>Privacy</h3>
          <ul class="footer_list">
            <li class="List_Item">
              <a href="#">Privacy Policy</a>
            </li>
            <li class="List_Item">
              <a href="#">Terms and Conditions</a>
            </li>
            <li class="List_Item">
              <a href="#">Refund Policy</a>
            </li>
            <li class="List_Item">
              <a href="#">Data Security</a>
            </li>
          </ul>
        </div>

        <div class="footer_colone col__Last">
          <h3>Download App</h3>
          <a href="#"><img src="images/app.png" width="170px" height="50px" /></a>
          <a href="#"><img src="images/play.png" width="170px" height="50px" /></a>
          <a href="#"><img src="images/Certified_Badge.png" width="150px" height="130px" /></a>
        </div>
      </div>
      <div class="copywright_container">
        <div class="Line"></div>
        <div class="copywright">
          <p>© 2023 EduOnline . All rights reserved</p>
          <a id="flech" href="#edu"><span class="material-symbols-outlined"> arrow_upward </span></a>
        </div>
      </div>
    </footer>
    <div class="overlaay hidden"></div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>

    <link rel="stylesheet" href="https://unpkg.com/nprogress@0.2.0/nprogress.css" />
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
   
<!--
    <script src="script/script.js"></script>

    <script src="script/login.js"></script>-->
  </body>
</html>
