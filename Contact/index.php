


<!DOCTYPE html>
<html lang="en">

<head>

  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="viewport" content="width=device-width, initial-scale=1"/>

  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CONTACT</title>
  <link rel="stylesheet" href="../Contact/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/Style.css">

</head>

<body>


  <header>
    <img src="images/LogoWhite.png" height="" width="" alt="Tom Greenwood Web Dev" class="logoOne">
    <nav>
      <ul>
        <li><a href="../Home">Home </a></li>
        <li class="navBreaker"><strong>|</strong></li>
        <li><a href="#">About </a></li>
        <li class="navBreaker"><strong>|</strong></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
  </header>
  <section class="home-hero parallax--bg)">
    <div class="row">
      <div class="home-hero-content">
        <h1 class="statement"><bold>LET'S GET IN TOUCH</bold></h1>
        <h2 class="tagline">and make the web more fun</h2>
        <!-- <a class="button mainButton" href="#">Some of my Work</a> -->
      </div>
    </div>

  </section>


  <div class="col-12 getConnectedBanner">
    <h3 class="formBelow">
      Use the from below to get connected!
    </h3>
  </div>

  <section class="contactsection">
    <!-- <div class="container contactForm"> -->


  <div class="row contactForm">
    <div class="col-0 col-sm-2"></div>
    <div class="col-12 col-md-8 formBox">
      <div class="form-box">
        <?php
        if($msg != ''):
         ?>
         <div class="alert <?php echo $msgclass; ?>"><?php echo $msg; ?></div>
         <?php
       endif;
          ?>

        <form role="form" action="" method="POST" class="form">
            <!-- <h3>CONTACT</h3>
            <p class="margin-bottom">Let's Get Connected!</p> -->
            <div class="form-group col-md-12">
              <span class="error"><?= $name_error ?></span>
              <input name="name" type="text" class="form-control tooltip-mod" value="<?php echo isset($_POST['name']) ? $name : ''; ?>" placeholder="Enter Your Name" data-toggle="tooltip" data-placement="right" title="Enter Name" />
            </div>
            <div class="form-group col-md-12">
              <span class="error"><?= $email_error ?></span>
                <input name="email" type="text" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>" placeholder="Enter Your Email" />
            </div>
            <div class="form-group col-md-12">
              <span class="error"><?= $subject_error ?></span>
                <input name="subject" type="text" class="form-control tooltip-mod" value="<?php echo isset($_POST['subject']) ? $subject : ''; ?>" placeholder="Enter A Subject" data-toggle="tooltip" data-placement="right" title="Enter Name" />
            </div>
            <div class="form-group col-md-12">
              <span class="error"><?= $message_error ?></span>
                <textarea name="message" rows="9" class="form-control message"  placeholder="Enter Your Message"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
            </div>
            <div class="form-group col-md-12">
                <button name="submit" class="buttonSend btn-default btn-form col-xs-12 col-sm-12 col-md-6">Send Message</button>
            </div>
        </form>
    </div>

    </div>
    <div class="col-0 col-sm-2"></div>
  <!-- </div> -->
</div>
</section>
<section class="loaction">
  <div class="row Maps">
    <div class="col-12 col-lg-8 mapText">
      <h1><strong>Located in Eugene Oregon</strong></h1>
      <img src="images/LogoWhite.png" height="" width="" alt="Tom Greenwood Web Dev" class="logo logobottom">
      <p>
        building your website has never been easier.
      </p>
    </div>
    <div class="col-12 col-lg-4 map-responsive">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2327990.686825219!2d-122.56587473945696!3d44.015032539777614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54c119b0ac501919%3A0x57ec61894a43894d!2sEugene%2C+OR!5e0!3m2!1sen!2sus!4v1512275131386" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <!-- <div class="col-0 col-lg-1 mapText">
    </div> -->

</section>


  <footer>
    <div class="bottom">
      <div class="row footerContent">
        <div class="col-lg-6 col-12 footerBlurb">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
          in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>

        <div class="col-lg-2 col-md-6 col-12 footerLinksOne">
          <ul>
            <li class="header"><strong>Services</strong></li>
            <a href="https://www.linkedin.com/in/tom-greenwood-650277ba/">
            <li class="links">Web Development</li>
          </a>
            <a href="https://www.linkedin.com/in/tom-greenwood-650277ba/">
            <li class="links">SEO</li>
          </a>
            <a href="https://www.linkedin.com/in/tom-greenwood-650277ba/">
            <li class="links">Design</li>
          </a>
            <a href="https://www.linkedin.com/in/tom-greenwood-650277ba/">
            <li class="links">Media</li>
          </a>
          </ul>
        </div>

        <div class="col-lg-2 col-md-6 col-12 footerLinksTwo">
          <ul>
              <li class="header"><strong>Info</strong></li>
            <a href="https://www.linkedin.com/in/tom-greenwood-650277ba/">
              <li class="links">About</li>
            </a>
            <a href="https://www.linkedin.com/in/tom-greenwood-650277ba/">
              <li class="links">Blog</li>
            </a>
            <a href="https://www.linkedin.com/in/tom-greenwood-650277ba/">
            </a>
            <a href="https://www.linkedin.com/in/tom-greenwood-650277ba/">
            </a>
          </ul>
        </div>
        <div class="col-lg-2 col-12 footerLinksThree">
          <ul>
            <li class="header"><strong>Connect</strong></li>
            <li class="Morelinks">
              <a href="https://www.linkedin.com/in/tom-greenwood-650277ba/">
                <i class="fa fa-linkedin fa-2x" aria-hidden="true"></i>
             </a>
            </li>
            <li class="Morelinks">
              <a href="https://twitter.com/TomGreenwood14">
                <i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
              </a>
            </li>
            <li class="Morelinks">
              <a href="https://github.com/tgreenwood93">
                <i class="fa fa-github fa-2x" aria-hidden="true"></i>
               </a>
            </li>
            <li class="Morelinks">
              <a href="https://codepen.io/tgreenwood93/">
                <i class="fa fa-codepen fa-2x" aria-hidden="true"></i>
                 </a>
            </li>
            <a href="https://medium.com/@tomgreenwood93">
              <li class="Morelinks">
                <i class="fa fa-medium fa-2x"></i>
            </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-12 Copyright">
      <p>
        Copyright © 2017 Tom Greenwood
      </p>
    </div>
  </footer>
  <div id="root"></div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.3/ScrollMagic.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>
  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  <script src="../Contact/js/particles.js" type="text/javascript"></script>
  <script src="../Contact/js/particles-small.js" type="text/javascript"></script>
  <script src="../Contact/js/main.js" type="text/javascript"></script>
</body>

</html>
