<!DOCTYPE html>
<html>

<head>
    <title>Subex</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--<link href="css/animations.css" rel="stylesheet" type="text/css"/>-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link type="text/css" rel="stylesheet" href="css/style.css?ver=1.6" />
    <link href="css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css" />
    <link href="css/owl.theme.default.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header class="white" id="header_fixed">
        <nav class="navbar navbar-inverse fixed-header " id="top1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span> 
                                  <span class="icon-bar"></span> 
                              </button>
                            <a href="index2.html"><img src="images/logo2.png" alt=""></a>
                        </div>
                        <div class="collapse navbar-collapse pull-right" id="myNavbar">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="index.html">Home</a></li>
                                <li class=""><a href="index.html#about">About Us</a></li>
                                <li class=""><a href="testimonials.html">Testimonials</a></li>
                                <li class=""><a href="gallery.html">Gallery</a></li>
                                <li class=""><a href="contact.php">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div>&nbsp;</div>
    <div>&nbsp;</div>
    <div>&nbsp;</div>
    <div class="containere">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Bangalore</div>
          <div class="text-two">Karnataka</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+91 98935647</div>
          <div class="text-two">+91 934345678</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">abc@gmail.com</div>
          <div class="text-two">xyz@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>If any queries, please do let us know.</p>
      <form method="post" role="form">
        <div class="input-box">
          <input type="text" name="name" placeholder="Enter your name">
        </div>
        <div class="input-box">
          <input type="text" name="email" placeholder="Enter your email">
        </div>
        <div class="input-box">
          <input type="text" name="phone" placeholder="Enter your contact no.">
        </div>
        <div class="input-box message-box">
        <textarea name="message" placeholder="Enter your message"></textarea>
        </div>
        <div class="button">
          <input type="submit" name="ok" value="Send Now" >
        </div>
      </form>
      <?php
      if(isset($_POST['ok'])){
        include_once 'function.php';
        $obj=new Contact();
        $res=$obj->contact_us($_POST);
        if($res==true){
          echo "<script>alert('Query Succesfully Submitted.Thank you')</script>";
        }
        else{
          echo "<script>alert('Something went wrong!!')</script>";
        }
      }
      ?>
    </div>
    </div>
  </div>
  <div>&nbsp;</div>
  <div>&nbsp;</div>
  <div>&nbsp;</div>
  <section>
        <footer>
            <div class="content">
                <div class="top">
                    <div class="logo-details">
                        <img src="images/logo2.png" alt="">
                        <span class="logo_name">Quient Trainings</span>
                    </div>
                    <div class="media-icons">
                        <a href="https://www.facebook.com/"><i class="fa fa-facebook-f"></i></a>
                        <a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                        <a href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </footer>
    </section>

  </body>
</html>
