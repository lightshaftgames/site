<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9 no-js" lang="en"><![endif]-->
<!--[if gt IE 9 | !IE]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<?php
if(isset($_POST['mail'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $messages = $_POST['message'];

    // multiple recipients
    $to  = 'contact@lightshaft.xyz'; // note the comma

    // subject
    $subject = 'Website Contact';

    // To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    // Additional headers
    $headers .= 'To: Kelvin <contact@lightshaft.xyz>' . "\r\n";
    $headers .= 'From: '.$name.' <'.$email.'>' . "\r\n";

    $message = $messages ." enviado por ".$name.": ". $email;

    // Mail it
    if(mail($to, $subject, $message, $headers)){
      echo "<script>alert('EMAIL SENDED!');</script>";
    }else{
      echo "<script>alert('ERROR TO SEND EMAIL!');</script>";
    }

}
?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Light Shaft | Games</title>
  <meta property="og:locale" content="en_US">

  <meta property="og:url" content="http://lightshaft.xyz/">

  <meta property="og:title" content="Light Shaft Games">
  <meta property="og:site_name" content="Light Shaft Games">

  <meta property="og:description" content="We love create games.">

  <meta property="og:image" content="http://lightshaft.xyz/forface.jpg">
  <meta property="og:image:type" content="image/jpg">
  <meta property="og:image:width" content="800">
  <meta property="og:image:height" content="600">

  <meta property="og:type" content="website">

  <meta name="description" content="We create games, we create a better life">
  <meta name="keywords" content="game development, indie freelancer, indie studio, indie games, freelancer games, freelancer youtube, youtube unity player, unity play youtube video">
  <meta name="author" content="Kelvin Rosa">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
  <link rel="icon" href="assets/img/favicon.ico">
  <link rel='stylesheet' href='assets/css/bootstrap.min.css'>
  <link rel='stylesheet' href='assets/css/vendor.css'>
  <link rel='stylesheet' href='assets/css/style.css'>
  <link rel='stylesheet' href='assets/css/demo.css'>
  <link rel='stylesheet' href='assets/css/custom.css'>
  <!--[if lte IE 9]><!-->
  <script src='assets/js/vendor/html5shiv.min.js'></script>
  <!--<![endif]-->
</head>
<body>

  <div class="site">
    <div class="site-loader">
      <div class="site-loader-spinner"></div>
    </div> <!-- .site-loader -->

    <div id="demo" class="ccard">
      <div class="ccard__block">
        <ul class="ccard__ul _light" data-type="toggle">
          <li>
            <h4>MAP</h4>
            <a class="_on" data-on="is-map" data-off="is-map-disable"></a>
          </li>
        </ul>
      </div>
      <!--<a class="ccard__toggle" href="#">
        <img src="assets/img/ccard_toggle.png" alt="">
      </a>-->
    </div> <!-- /demo -->

    <div class="site-canvas">
      <header class="site-header">
        <nav class="navbar navbar-theme">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <div class="navbar-brand-wrap">
                <a class="navbar-brand" href="#">
                  <img src="assets/img/site-header-logo.png" alt="">
                </a>
              </div>
            </div> <!-- .navbar-header -->

            <div class="collapse navbar-collapse" id="navbar-collapse">
              <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#home">Home</a></li>
                <li><a href="#about">What we are</a></li>
                <li><a href="#brief_1">About</a></li>
                <li><a href="#download">Unity</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="audio-toggle"><a href="#"><i class="fa fa-volume-up"></i></a></li>
              </ul>
            </div> <!-- .navbar-collapse -->
          </div>
        </nav>
      </header> <!-- .site-header -->
      <main class="site-main">
        <div id="home" class="section block-primary position-r align-c-xs-max">
          <div id="particles-js" class="site-bg">
            <div class="site-bg-img"></div>
            <div class="site-bg-video"></div>
            <div class="site-bg-overlay"></div>
            <div class="site-bg-effect layer" data-depth=".30"></div>
            <canvas class="site-bg-canvas layer" data-depth=".30"></canvas>
          </div> <!-- .site-bg -->

          <div class="container">
            <div class="row row-table">
              <div class="col-sm-6">
                <div class="col-inner" data-sr="left">
                  <div class="section-heading">
                    <h5>Indie Development</h5>
                    <h1>We love create, we love inovate.</h1>
                    <p>Our fun is create awesome games.</p>
                  </div> <!-- .section-heading -->
                  <div class="section-content">
                    <a class="btn btn-pink m-y-5" href="#about">Learn More</a>
                    <a class="btn btn-warning m-y-5" href="#contact">Contact us</a>
                  </div> <!-- .section-content -->
                </div>
              </div>
              <div class="col-sm-6 col-md-p-l-1 m-t-60-xs-max">
                <div class="col-inner clearfix">
                  <img class="img-responsive float-r-sm-min m-x-auto-xs-max" src="assets/img/item/home.png" alt="" data-sr="right">
                </div>
              </div>
            </div>
          </div>
        </div> <!-- #home -->

        <div id="about" class="section p-a-0 align-c">
          <div class="container-fluid p-x-0">
            <div class="row row-table">
              <div class="col-sm-4 block-invert p-x-30-sm-max p-x-60-md-min p-t-20-sm-min align-t-sm-min">
                <div class="col-inner p-y-50-sm-min p-y-30-xs-max max-width m-x-auto-xs-max">
                  <div class="icon-box _center">
                    <div class="icon-box-media">
                      <img src="assets/img/icon/rocket.png" alt="" data-sr="bottom">
                    </div>
                    <div class="icon-box-heading">
                      <h3>Indie Development</h3>
                    </div>
                    <div class="icon-box-content">
                      <p>We are a indie studio, all your games are created with much love and determination, also we have the best experience in games development. Developers with 5 years experience in development software, 3D artists, amazing Game Designers.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 block-pink p-x-30-sm-max p-x-60-md-min p-t-20-sm-min align-t-sm-min">
                <div class="col-inner p-y-50-sm-min p-y-30-xs-max max-width m-x-auto-xs-max">
                  <div class="icon-box _center">
                    <div class="icon-box-media">
                      <img src="assets/img/icon/chat.png" alt="" data-sr="bottom">
                    </div>
                    <div class="icon-box-heading">
                      <h3>Freelance</h3>
                    </div>
                    <div class="icon-box-content">
                      <p>We work as freelance development, we have a lot of projects with our unique touch, our developer helped a lot of games come true.
                      If you have a game/app/project and need people to finish or make it better, you can contact us, freelance work as Developer, Mechanics Developer, Ai Developer, 2D Game Art, 3D props, Narrative Creator.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 block-light p-x-30-sm-max p-x-60-md-min p-t-20-sm-min align-t-sm-min">
                <div class="col-inner p-y-50-sm-min p-y-30-xs-max max-width m-x-auto-xs-max">
                  <div class="icon-box _center">
                    <div class="icon-box-media">
                      <img src="assets/img/icon/mobile.png" alt="" data-sr="bottom">
                    </div>
                    <div class="icon-box-heading">
                      <h3>Apps</h3>
                    </div>
                    <div class="icon-box-content">
                      <p>We create mobile apps, we have done a lot of jobs in this area(some desktop apps too), with phonegap, native android and unity.
                      We worked in some anatomy apps, Augmented Reality apps, Educational apps and games, etc..</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- #about -->

        <div id="brief_1" class="section block-default align-c-xs-max">
          <div class="container">
            <div class="row row-table">
              <div class="col-sm-6">
                <div class="col-inner">
                  <div class="section-heading">
                    <h5>What help us to exist</h5>
                    <h2>We do freelance jobs</h2>
                    <p>The most fun in the freelance world is how they can produce your own games with no money!? Yes, we need money then we decided to help other studios, developers, games, creating content for your games, and helping in development, if you are looking for someone to do a freelance job for your project, you can contact us.</p>
                  </div> <!-- .section-heading -->
                  <div class="section-content">
                    <ul class="icon-list align-l m-t-30">
                      <li><img src="assets/img/icon/chat.png" alt=""> Flexible time.</li>
                      <li><img src="assets/img/icon/pencil.png" alt=""> All work documented.</li>
                      <li><img src="assets/img/icon/skull.png" alt=""> We work far from the deadlines.</li>
                    </ul>
                    <a class="btn btn-primary m-y-5" href="#contact">Contract us!</a>
                  </div> <!-- .section-content -->
                </div>
              </div>
              <div class="col-sm-6 m-t-60-xs-max p-l-60-md-min">
                <div class="col-inner clearfix">
                  <img class="img-responsive float-r-sm-min m-x-auto-xs-max" src="assets/img/item/brief-1.png" alt="" data-sr="right">
                </div>
              </div>
            </div>
          </div>
        </div> <!-- #brief_1 -->

        <div id="brief_2" class="section block-warning align-c-xs-max">
          <div class="container">
            <div class="row row-table">
              <div class="col-sm-6 m-b-60-xs-max p-r-60-md-min">
                <div class="col-inner clearfix">
                  <img class="img-responsive float-l-sm-min m-x-auto-xs-max" src="assets/img/item/brief-2.png" alt="" data-sr="left">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="col-inner">
                  <div class="section-heading">
                    <h5>We have experience</h5>
                    <h2>Multiplayer and Educational</h2>
                  </div> <!-- .section-heading -->
                  <div class="section-content">
                    <p>We have experience in multiplayer and online games, worked with some multiplayer Libs and SDK's(Photon, TNet, Ulink, uNet). Server side 3D rendering apps, Turn Based Games, FPS Online Games, Strategy Online Games, Trading card Games.</p>
                    <p>We have done some jobs for education, like anatomy apps, math games, Augmented Reality Anatomy, full body anatomy, and much more.</p>
                    <a class="btn btn-success m-y-5" href="#brief_3">More About Us</a>
                    <a class="btn btn-pink m-y-5" href="https://itunes.apple.com/br/app/anatomy-4d/id555741707?mt=8">See a Demo</a>
                  </div> <!-- .section-content -->
                </div>
              </div>
            </div>
          </div>
        </div> <!-- #brief_2 -->

        <div id="brief_3" class="section block-success align-c-xs-max">
          <div class="container">
            <div class="row row-table">
              <div class="col-sm-6">
                <div class="col-inner">
                  <div class="section-heading">
                    <h5>VR Ready</h5>
                    <h2>We are Ready for VR</h2>
                    <p>We have all the needed to make a job or realease a game or experience using VR, we are equiped with a DK2 kit, Razer Hydra controllers and much more.</p>
                  </div> <!-- .section-heading -->
                  <div class="section-content">
                    <ul class="icon-list align-l m-t-30">
                      <li><img src="assets/img/icon/paint.png" alt=""> Develop gaming experience.</li>
                      <li><img src="assets/img/icon/rocket.png" alt=""> Realistic mechanics and feelings.</li>
                      <li><img src="assets/img/icon/mobile.png" alt=""> Card Board apps and games.</li>
                    </ul>
                    <a class="btn btn-primary m-y-5" href="https://www.youtube.com/watch?v=eHy90mzN3XI">What is VR</a>
                    <a class="btn btn-invert m-y-5" href="https://www.youtube.com/watch?v=-mxBLOWLEI0&nohtml5=False">VR Demos</a>
                  </div> <!-- .section-content -->
                </div>
              </div>
              <div class="col-sm-6 m-t-60-xs-max p-l-60-md-min">
                <div class="col-inner clearfix">
                  <img class="img-responsive float-r-sm-min m-x-auto-xs-max" src="assets/img/item/brief-3.png" alt="" data-sr="right">
                </div>
              </div>
            </div>
          </div>
        </div> <!-- #brief_3 -->

        <!--<div id="pricing" class="section block-light align-c">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <div class="col-inner">
                  <div class="section-heading">
                    <h5>Pricing Table Section</h5>
                    <h2>Free And Business Plan</h2>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                  </div>
                  <div class="section-content m-t-60-sm-min">
                    <div class="row">
                      <div class="col-xs-12 col-sm-4">
                        <div class="pricing-table m-t-0-xs-max">
                          <div class="pricing-table-header block-invert">
                            <h5 class="pricing-table-caption">Checkmark pricing table</h5>
                            <h2 class="pricing-table-title">FREE</h2>
                          </div>
                          <div class="pricing-table-content block-light">
                            <ul class="pricing-table-list">
                              <li><i class="fa fa-check"></i> Up to 25 users</li>
                              <li><i class="fa fa-check"></i>500 messages</li>
                              <li><i class="fa fa-check"></i>Normal options</li>
                              <li><i class="fa fa-check"></i>Phone support</li>
                            </ul>
                          </div>
                          <div class="pricing-table-footer block-light">
                            <a class="btn btn-primary" href="#download">Download</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-4">
                        <div class="pricing-table">
                          <div class="pricing-table-header block-primary">
                            <span class="pricing-table-badge">
                              <i class="fa fa-star"></i>
                            </span>
                            <h5 class="pricing-table-caption">With badge</h5>
                            <h2 class="pricing-table-title"><span>$</span>45<span>/ mo.</span></h2>
                          </div>
                          <div class="pricing-table-content block-light">
                            <ul class="pricing-table-list">
                              <li><i class="fa fa-check"></i> Up to 150 users</li>
                              <li><i class="fa fa-check"></i> 2000 messages</li>
                              <li><i class="fa fa-check"></i> Advanced options</li>
                              <li><i class="fa fa-check"></i> Phone support</li>
                            </ul>
                          </div>
                          <div class="pricing-table-footer block-light">
                            <a class="btn btn-primary" href="#download">Download</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-4">
                        <div class="pricing-table">
                          <div class="pricing-table-header block-pink">
                            <h5 class="pricing-table-caption">Icon pricing table</h5>
                            <h2 class="pricing-table-title"><span>$</span>75<span>/ mo.</span></h2>
                          </div>
                          <div class="pricing-table-content block-light">
                            <ul class="pricing-table-list">
                              <li><i class="fa fa-user-plus"></i> Up to 500 users</li>
                              <li><i class="fa fa-envelope"></i> <span class="color-pink">Unlimited</span> messages</li>
                              <li><i class="fa fa-cog"></i> Advanced options</li>
                              <li><i class="fa fa-support"></i> Phone support</li>
                            </ul>
                          </div>
                          <div class="pricing-table-footer block-light">
                            <a class="btn btn-primary" href="#download">Download</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->

        <div id="download" class="section block-primary align-c">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <div class="col-inner">
                  <div class="section-heading">
                    <h5>We also help developers!</h5>
                    <h2>Check It Right Now!</h2>
                    <p>We created a solution to play youtube videos inside mobile unity3D projects, you can check some demos or buy in Asset Store.</p>
                  </div>
                  <div class="section-content">
                    <a class="btn btn-pink m-y-5"><i class="fa fa-android"></i>Google Play</a>
                    <a class="btn btn-warning m-y" href="https://www.assetstore.unity3d.com/en/#!/search/page=1/sortby=popularity/query=publisher:7849"><i class="fa fa-download"></i>Asset Store</a>
                  </div> <!-- .section-content -->
                </div>
              </div>
            </div>
          </div>
        </div> <!-- #download -->

        <div id="contact" class="section block-default">
          <div class="container">
            <div class="section-heading text-center">
              <h5>Contact us</h5>
              <h2>Get in touch with us</h2>
              <p>If you want some support about the youtube plugin, contract us for a freelance job or just say hi, you can use the form below.</p>
            </div>
            <div class="row section-content m-t-60-sm-min">
              <div class="col-sm-6 col-md-5">
                <div class="col-inner">
                  <div class="icon-box _left">
                    <div class="icon-box-media">
                      <img src="assets/img/icon/mobile.png" alt="" data-sr="bottom">
                    </div>
                    <div class="icon-box-heading">
                      <h4>Phone Number (Brazil)</h4>
                    </div>
                    <div class="icon-box-content font-sub font-italic">
                      <span> +55 (35) 99894-0030 (tel-1)</span>
                      <br>
                      <span>+55 (35) 99111-5461 (tel-2)</span>
                    </div>
                  </div>

                  <div class="icon-box _left">
                    <div class="icon-box-media">
                      <img src="assets/img/icon/mail.png" alt="" data-sr="bottom">
                    </div>
                    <div class="icon-box-heading">
                      <h4>Email Address</h4>
                    </div>
                    <div class="icon-box-content font-sub font-italic">
                      <span>kelvinparkour@gmail.com</span>
                      <br>
                      <span>frodorzr@gmail.com</span>
                    </div>
                  </div>

                  <div class="icon-box _left">
                    <div class="icon-box-media">
                      <img src="assets/img/icon/pin.png" alt="" data-sr="bottom">
                    </div>
                    <div class="icon-box-heading">
                      <h4>Business address</h4>
                    </div>
                    <div class="icon-box-content font-sub font-italic">
                      <span>R Juvenal de Brito Lambert, 271</span>
                      <br>
                      <span>Cambuí - MG, Brazil</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-offset-1 m-t-60-xs-max">
                <div class="col-inner">
                  <form class="" action="http://lightshaft.xyz/index.php" method="post" id="formcont" novalidate="novalidate">
                    <div class="form-group required">
                      <label class="form-label" for="contactName">Your name</label>
                      <input class="form-control" id="contactName" type="text" name="name">
                    </div>
                    <div class="form-group required">
                      <label class="form-label" for="contactEmail">Email address</label>
                      <input class="form-control" id="contactEmail" type="text" name="email">
                    </div>
                    <div class="form-group required">
                      <label class="form-label" for="contactMessage">Message</label>
                      <textarea class="form-control" id="contactMessage" rows="4" name="message"></textarea>
                    </div>
                    <input type="hidden" name="mail" value="0">
                    <div class="btn-wrap">
                      <button type="submit" class="btn btn-primary btn-block">Send Message</button>
                    </div>
                  </form> <!-- #contactForm -->
                </div>
              </div>
            </div>
          </div>
        </div> <!-- #contact -->

      </main> <!-- .site-main -->
      <footer class="site-footer block-invert">
        <div class="container">
          <img class="site-footer-logo img-responsive" src="assets/img/site-footer-logo.png" data-sr="bottom">
          <ul class="site-footer-social-list">
            <li><a href="https://www.facebook.com/lightshaft2/" target="_blank">Facebook</a></li>
            <li><a href="https://www.linkedin.com/in/kelvin-rosa-0012a041" target="_blank">LinkedIn</a></li>
          </ul>
          <p class="site-footer-copyright">2016  <a href="#" target="_blank">Light Shaft Games</a> | all rights reserved.</p>
        </div>
      </footer> <!-- .site-footer -->
    </div>
  </div>

  <script src="assets/js/vendor/jquery-1.11.3.min.js"></script>
  <script src='assets/js/vendor/bootstrap.min.js'></script>
  <script src='assets/js/vendor/plugin.js'></script>
  <script src='assets/js/variable.js'></script>
  <script src='assets/js/map.js'></script>
  <script src='assets/js/main.js'></script>
  <script src='assets/js/demo.js'></script>
  <audio id="audioPlayer" loop=""><source src="assets/audio/audio.mp3" type="audio/mpeg"></audio>
</body>
</html>
