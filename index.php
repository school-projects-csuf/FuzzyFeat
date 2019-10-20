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
      background-image: url("img/background_index2.png");
      background-color: red;
      background-repeat: no-repeat;
      background-size: cover;
    }
    #dropdown {
      height: 50px;
      width: 110px;
      font-size: 20pt;
      line-height: 20px;
      justify-content: center;
    }
    .navbar-brand {
      padding: 0 15px;
      height: 50px;
      line-height: 45px;
      font-size: 30pt;
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
  <!-- header file -->
  <?php
    include("header.html")
  ?>

  <!-- main body -->
  <div class="container" style="padding-top:150px; color:white;">
    <div class="row">
      <div class="col-3" style="border: 1px solid white; border-radius: 10px; background-color: gray;">
        <form action="includes/login.inc.php" method="POST">
          <div class="form-group" style="padding-top:10px;">
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


  <footer>
    <nav class="navbar fixed-bottom navbar-light bg-light">
    <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
    <li><a href="welcomePage.php" id="nextPageBTN"class="nextBTN"><img src="img/indexNextBtn.png" style="width:400px;height:150px;padding-bottom:40px;"></a></li>
    </ul>
  </nav>
  </footer>



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="stylesheets\fontStyles.css" charset="utf-8"></script>
</body>


</html>
