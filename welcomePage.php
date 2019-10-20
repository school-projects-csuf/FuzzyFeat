<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta name="viewport" content="width = device-width, initial-scale = 1">
  <meta charset="utf-8">
  <title>Create A Quiz</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="stylesheets/styles.css">

  <style>
    body {
      background-image: url("img/backgroundIndex.jpg");
      background-color: red;
      background-repeat: no-repeat;
      background-size: cover;
    }
  </style>

</head>

<body>

  <?php
    include("header.html")
  ?>

  <div class="container" style="padding-top:200px;">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" >
        <!--550px-->

        <div class="carousel-item active">
          <img class="d-block w-100" src="img/characterImg/ironman.png" alt="First slide"style="height:550px;">
          <!--QuizCard-->
          <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" style="background:white;">
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-primary">Comic</strong>
              <h3 class="mb-0">Which Avenger Are You?</h3>
              <div class="mb-1 text-muted">Oct 12</div>
              <p class="card-text mb-auto">Description of Quiz here</p>
              <a href="#" class="stretched-link">Take quiz</a>
            </div>
            <div class="col-auto d-none d-lg-block">
              <img src="img/disney.jpg" width="250" height="250">
            </div>
          </div>
          <!--End of QuizCard-->
        </div>

        <div class="carousel-item">
          <img class="d-block w-100" src="img/characterImg/batman.jpg" alt="Second slide" style="height:550px;">
          <!--QuizCard-->
          <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" style="background:white;">
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-primary">Comic</strong>
              <h3 class="mb-0">What's In Your Utility Belt?</h3>
              <div class="mb-1 text-muted">Oct 12</div>
              <p class="card-text mb-auto">Description of Quiz here</p>
              <a href="#" class="stretched-link">Take quiz</a>
            </div>
            <div class="col-auto d-none d-lg-block">
              <img src="img/disney.jpg" width="250" height="250">
            </div>
          </div>
          <!--End of QuizCard-->
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/characterImg/joker.jpg" alt="Third slide" style="height:550px;">
          <!--QuizCard-->
          <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" style="background:white;">
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-primary">Comic</strong>
              <h3 class="mb-0">Which Joker Are You?</h3>
              <div class="mb-1 text-muted">Oct 12</div>
              <p class="card-text mb-auto">Description of Quiz here</p>
              <a href="#" class="stretched-link">Take quiz</a>
            </div>
            <div class="col-auto d-none d-lg-block">
              <img src="img/disney.jpg" width="250" height="250">
            </div>
          </div>
          <!--End of QuizCard-->
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <footer>
    <nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-dark" style="height:5%">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
          <li class="nav-item">
            <a class="nav-link" href="login.html">About Us</a>
          </li>
        </ul>
      </div>
      <a class="nav-link" href="index.php"><img src="img/splashLogo5.png" alt="" style="width:170px; height:170px;"></a>
    </nav>

  </footer>






  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="stylesheets\fontStyles.css" charset="utf-8"></script>
</body>


</html>
