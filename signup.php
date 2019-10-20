<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <!-- css. -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
  <title>Sign Up</title>
  <link rel="stylesheet" href="stylesheets/styles.css">

  <style>
    body {
      background-image: url("img/signup.jpg");
      background-color: grey;
      background-repeat: no-repeat;
      background-size: cover;
    }
  </style>

  <script>
    function checkPassword(form) {
      password = form.password.value;
      password2 = form.password2.value;

      if (password == '')
        alert ("Please enter Password");

      if (password2 == '')
        alert ("Please confirm Password");

      else if (password != password2) {
        alert ("\n Password did not match. Try again");
        return false;
      }

      else{
        alert("Account Created");
        return true;
      }
    }
  </script>
</head>

<body>

  <?php
    include("header.html")
   ?>

  <!-- Sign up form -->
  <div class="container" id="SignUpContainer">
  <form onSubmit= "return checkPassword(this)">
    <div class="row">
      <div class="col-md"></div>
      <div class="col-md-4 align-self-center text-center">
        <form action="includes/signup.inc.php" method="POST">
          <div class="form-group">
            <input type="text" class="form-control" name="fname" placeholder="First name" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="lname" placeholder="Last name" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="uid" placeholder="Username" required>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" required>
            <small id="emailHelp" class="form-text text-muted">We <strong>'promise'</strong> to never share your email with anyone else ;)</small>
          </div>
          <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password">
          </div>
          <div class="form-group">
            <input type="password" name="password2" class="form-control" laceholder="Confirm password">
          </div>
          <input type="submit" value = "Submit" class="btn btn-primary self-align-center">
          <small id="emailHelp" class="form-text text-muted">Already have an account? <a href="login.html">Login here</small></a>
        </form>
      </div>
      <div class="col-md"></div>
    </div>
  </div>
  <!-- js. -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
