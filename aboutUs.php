<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylesheets/aboutUs.css">
    <audio src="sounds/underTale.mp3" autoplay hidden="true" loop="true" ></audio>
  </head>
  <body style="padding-bottom: 90px; background-size:100% 100%;">
    <!-- header file -->
    <?php
      include("header.html")
    ?>
    <!-- splash logo -->
    <a href="welcomePage.php"><img class="splashLogo" src="img/splashLogo2.png" alt="Fuzzy Feat" style="left: 0px; top: 60px;width: 470px; height: 470px;"></a>

    <div class="container marketing " style="margin-top: 100px;">
    <!-- Three columns of text below the carousel -->
    <div class="row justify-content-md-center align-items-center" style="padding-left: 70px; padding-top:15px;">
      <div class="col-lg-4">
        <img class="img-mask" src="img/creatorImg/joesh.jpg" alt="">
        <h2>Joesh Bautista</h2>
        <p>I'm still cool</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="img-mask" src="img/creatorImg/ian.jpg" alt="">
        <h2>Ian Alvarez</h2>
        <p>I'm awesome</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="img-mask" src="img/creatorImg/ian.jpg" alt="">
        <h2>Eli Manzo-De Leon</h2>
        <p>I'm inevitable</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="img-mask" src="img/creatorImg/kaine.jpg" alt="">
        <h2>Kaine Rubalcava</h2>
        <p>Mo' witches, mo' problems</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="img-mask" src="img/creatorImg/hao2.jpg" alt="">
        <h2>Hao Nguyen</h2>
        <p>When's dinner?</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->
    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">The Company. <span class="catcher">It’ll blow your mind.</span></h2>
        <p class="lead">Our roots in search, diverse backgrounds and deep experience combine to give you all the skills it takes to create and rank quizzes under one roof.</p>
      </div>
      <div class="col-md-5">
        <img class ="placeholder" src="img/creatorImg/people1.jpg" alt="">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Careers. <span class="catcher">See for yourself.</span></h2>
        <p class="lead">Our small teams inspire creativity around the world by helping over 500 million people capture and share beautiful photos and videos. Our clients expect the very best, so that’s who we hire. If you want to do work that matters with a company who cares, Join us!</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img class ="placeholder" src="img/creatorImg/people2.jpg" alt="">
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->
    <?php
      include("footerAboutUs.html")
    ?>
  </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="stylesheets\fontStyles.css" charset="utf-8"></script>
  </body>
</html>
