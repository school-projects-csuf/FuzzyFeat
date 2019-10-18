<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta name="viewport" content="width = device-width, initial-scale = 1">
  <meta charset="utf-8">
  <title>Create A Quiz</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="stylesheets/styles.css">

  <!-- <audio src="sounds/underTale.mp3" autoplay hidden="true" loop="true" ></audio> -->
  <style>
    body {
      background-image: url("img/backgroundIndex.jpg");
      background-color: red;
      background-repeat: no-repeat;
      background-size: cover;
    }
    #dropdown {
      height: 50px;
      width: 110px;
      font-size: 20pt;
      justify-content: center;
    }
    .navbar-brand {
      padding: 0 15px;
      height: 80px;
      line-height: 80px;
      font-size: 50pt;
    }
    .navbar-nav {
      height: 50px;
      justify-content: center;
    }
    .nextBTN {
      height: 20px;
    }

  </style>

</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="index.html">Fuzzy Feat</a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <!-- Example single danger button -->
        <div class="btn-group">
          <button type="button" id="dropdown" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Quiz
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Take A Quiz</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Create A Quiz</a>
          </div>
        </div>
        <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="font-size:20pt;">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="font-size:20pt;">Search</button>
          </form>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-dark btn-lg" data-toggle="modal" data-target="#exampleModal">
            Log in
          </button>
          <li class="nav-item">
            <a class="nav-link" href="signup.html" style="font-size:20pt;">Sign Up</a>
          </li>
        </ul>
      </div>
    </nav>

    <img src="img/indexStamp.png" style="margin-left: 500px;margin-top: 150px;width:60%;height:60%;">

    <nav class="navbar fixed-bottom navbar-light bg-light">
      <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
        <li><a href="welcomePage.html" id="nextPageBTN"class="nextBTN"><img src="img/indexNextBtn.png" style="width:400px;height:150px;padding-bottom:40px;"></a></li>
      </ul>
    </nav>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Please log in</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- log in form -->
            <form action="includes/login.inc.php" method="POST">
              <div class="form-group">
                <label for="uid">Username or Email address</label>
                <input type="text" name="uid" class="form-control" placeholder="Enter username or email" required>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember me</label>
              </div>
              <button type="submit" class="btn btn-primary">Log in</button>
              <small class="form-text text-muted">Don't have an account yet? <a href="signup.html">Sign up here.</small></a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </header>





  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="stylesheets\fontStyles.css" charset="utf-8"></script>
</body>


</html>
