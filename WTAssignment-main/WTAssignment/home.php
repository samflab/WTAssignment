<?php
session_start();
$name;
$_SESSION['username'];
if(isset($_SESSION['username']))
{$name=$_SESSION['username'];

  $nm=$name;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Notesflix</title>
    <link rel = "icon" href ="img/N-Logo%20(1).svg" type = "image/x-icon">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/signin.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/navbar.css">
</head>
<body>
   <script src="js/javascript.js"></script>


<!--NAVBAR-->

<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <div class="navbar-header">

      <a class="navbar-brand" href="home.php"><img src="img/logo.png" height="30" width="100"></a>
        <button type="button" class="navbar-toggle ml-auto" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="fa fa-bars fa-2x" aria-hidden="true"></i></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="nav navbar-nav navbar-right">
         <li class="nav-item active"><a class="nav-link" href="home.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="notes.php">Notes</a></li>
        <li class="nav-item"><a class="nav-link" href="live.php">Live</a></li>
        <li class="nav-item"><a class="nav-link" href="talk.php">Talk</a></li>
        <li class="nav-item"><a class="nav-link" href="aboutus.php">About Us</a></li>
        <li class="nav-item"><a class="nav-link" href="contactus.php">Contact Us</a></li>


              <?php
              if($nm!="")
                   {
                     echo'  <li class="nav-item"><a class="nav-link" style="color:#266AB4; font-weight: 700;">Hi, '.$nm.'</a></li>';
                     echo'   <a href="logout.php"><button type="button" id="signup">Logout</button></a>';
                   }
                      else {
                        echo'  <li class="nav-item"><a class="nav-link" data-toggle="modal" style="text-decoration: none;"data-target="#login">'.$nm.' Login</a></li>';
                        echo'          <a href="signup.html"><button type="button" id="signup">Sign Up</button></a>';
                      }

               ?>

      </ul>
    </div>
  </div>
</nav>

<!--NAVBAR END-->


<!---------------------------------------------------------------------- LOGIN MODAL--------------------------------------------------------------->
    <div class="modal fade" id="login" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-body">
          <form method="POST" name="login" onsubmit="return formValidationlogin();">
              <div class="form-group">
                    <label for="name">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                     <div class="form-group">
                         <label for="password">Password <a style="float:right;">Forgot Password?</a></label>
                            <input type="password" class="form-control" id="password" name="password" required>

                    </div>
                    <button type="submit" id="login_button">Login</button>
            </form>
            <script src="js/login_validation.js"></script>
        </div>
      </div>

    </div>
  </div>

<!----------------------------------------------------------------------LOGIN MODAL END---------------------------------------------------------->

<!--NOTES-->
    <div id="home_bg" style="background-image: url(img/home.svg);">
    <div id="desc_whole">
            <div class="col-lg-5 col-md-5 col-sm-5" id="desc">
                <p id="tagline">Shaping present, Solidifying future</p>
                <p id="intro">Access infinite pool of information or be a part of interactive sessions on a spectrum of technologies held by experts from various backgrounds.</p>

            </div>
            <div class="col-lg-6 col-md-6 col-sm-6" id="illustration_one">
                <img src="img/Group%20141.svg" class="img-responsive" height="300" width="600" style="float: right; padding-left: 5%;">
            </div>
    </div>
  </div>

     <div id="notes_bg" style="background-image: url(img/notes_bg.svg);">
    <div id="desc_whole">
        <div class="col-lg-6 col-md-6 col-sm-6" id="desc">
                <img src="img/Group%201042.svg" class="img-responsive" height="300" width="700">
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5" id="text" style="float: right;">
                <p id="notes">NOTES</p>
                <br>
                <p id="notes_desc">A medium to go through a plethora of notes over many institutions from India.</p>
                <br>
                <a href="notes.html"><button type="button" id="signup" style="float: right;">Know More</button></a>
            </div>
    </div>
  </div>
<!-- NOTES END-->

<!--LIVE CLASSES -->
    <div id="home_bg" style="background-image: url(img/live_bg.svg);">
    <div id="desc_whole">
            <div class="col-lg-5 col-md-5 col-sm-5" id="text">
                  <p id="live">LIVE</p>
                   <br>
                  <p id="live_desc">Online sessions on a series of emerging topics that will regenerate the pillars of the modern world.</p>
                <br>
                 <a href="live.html"> <button type="button" id="signup">Know More</button></a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6" id="desc" style="float: right; padding-left: 5%;">
                <img src="img/Group%201412.svg" class="img-responsive" height="300" width="700">
            </div>
    </div>
  </div>
<!--LIVE CLASSES END-->

<!-- TALK SHOW-->
    <div id="talk_bg" style="background-image: url(img/notes_bg.svg);">
    <div id="desc_whole">
        <div class="col-lg-6 col-md-6 col-sm-6" id="talk_img">
                <img src="img/Group%202088.svg" class="img-responsive" height="300" width="700">
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5" id="text" style="float: right;">
                <p id="talk">TALK</p>
                <br>
                <p id="notes_desc">An hour long interactive session that aims to bring in industry experts to provide insights into the corporate world.</p>
                <br>
                <a href="talk.html"><button type="button" id="signup" style="float: right;">Know More</button></a>
            </div>
    </div>
  </div>
<!--TALK SHOW END-->

<!--PUBLISH-->
    <div id="home_bg" style="background-image: url(img/live_bg.svg);">
    <div id="desc_whole">
            <div class="col-lg-5 col-md-5 col-sm-5" id="text">
                  <p id="live">PUBLISH</p>
                  <br>
                  <p id="live_desc">A portal that enables the authors to publish their books and track the insights. Create and self publish your book today!</p>
                  <br>
                  <button type="button" id="signup">Know More</button>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6" style="float: right;">
                <img src="img/Group%202459.svg" class="img-responsive" height="300" width="700">
            </div>
    </div>
  </div>
<!--PUBLISH-->

<!--TESTIMONIALS-->
    <div id="talk_bg" style="background-image: url(img/notes_bg.svg); margin-bottom: -5.05%;">
    <div id="desc_whole">
            <div class="col-lg-6 col-md-6 col-sm-6">
                  <img src="img/Group 2456.svg" class="img-responsive" height="300" width="700">
            </div>

                <div id="myCarousel" class="vertical-slider carousel vertical slide" data-ride="carousel" data-interval="10000">
                  <div class="col-lg-6 col-md-6 col-sm-6" id="desc">

                <p id="talk">WHAT PEOPLE SAY ABOUT US</p>
                <div class="carousel-inner">
                <div class="item active">
                <p id="name">Rose Tyler</p>
                <p id="student">Student</p>
                <p id="test">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nouny eirmond tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos at accusam et justo duo dolores</p>
                <br>
                </div>

                <div class="item">
                <p id="name">Donna Noble</p>
                <p id="student">Companion</p>
                <p id="test">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nouny eirmond tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos at accusam et justo duo dolores</p>
                <br>
                </div>

                <div class="item">
                <p id="name">Marth Jones</p>
                <p id="student">Student</p>
                <p id="test">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nouny eirmond tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos at accusam et justo duo dolores</p>
                <br>
                </div>

                <div class="item">
                <p id="name">Amelia Pond</p>
                <p id="student">Mother</p>
                <p id="test">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nouny eirmond tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos at accusam et justo duo dolores</p>
                <br>
                </div>

                </div>
                <div id="scroll_buttons">
                    <span data-slide="next" class=" btn-vertical-slider" >
                        <img src="img/Down%20arrow%20small.svg" id="space"height="25" width="25"></span>
                    <span data-slide="prev" class=" btn-vertical-slider">
                    <img src="img/Up%20arrow%20small.svg"  height="25" width="25">
                    </span>
                </div>
            </div>
                </div>
            </div>
        </div>
<!-- TESTIMONIALS END-->
<footer>
        <section class="ft-main">
            <div class="ft-main-item" id="first">
                <h2 class="ft-title">Company</h2>
                <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="ft-main-item">
                <h2 class="ft-title">Product</h2>
                <ul>
                <li><a href="notes.html">Notes</a></li>
                <li><a href="live.html">Live</a></li>
                <li><a href="talk.html">Talk</a></li>
                <li><a href="#">Publish</a></li>
                </ul>
            </div>
            <div class="ft-social">
                <h2 class="ft-title" style="font-size: 3.5rem;">Follow  us  on</h2>
                <ul class="ft-social-list" style="width:250px">
                 <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                 <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                 <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                </ul>
            </div>
        </section>
    </footer>



</body>
</html>
