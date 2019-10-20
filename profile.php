<?php
	session_start();
  $fname = $_SESSION['fname'];
	$lname = $_SESSION['lname'];
	include_once 'includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <!-- css. -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="stylesheets/styles.css">
  <link rel="stylesheet" href="stylesheets/profile.css">
  <title>Home</title>
</head>

<body>
  <!-- main header -->
  <?php
    include("header_main.php")
  ?>
  <!-- Begin body -->
  <div class="container" style="padding-top:100px;">
    <div class="user-info-container  border rounded">
      <img src="img/user.jpg" class="profile-img" alt="avatar">
      <p class="username"><span class="at">@</span  id="username">Xx360NoScopexX<p>
      <p>On the weekends I like to play Call of Duty with a cup of ice cold chocolate milk served by mommy.</p>
    </div>
    <div class="user-quizzes-container">
      <h1>Quizzes</h1>
        <hr>
      <!-- Remove div below. just here for testing. -->
      <div class="quizzes-container">
        <!-- quiz 1 -->
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">Disney</strong>
            <h3 class="mb-0">Which Disney princess are you?</h3>
            <div class="mb-1 text-muted">Oct 12</div>
            <p class="card-text mb-auto">Do you like sleeping, eating apples, taking care of dwarves, or swimmming with fish? Find out who you would be in an alternate Disney unverse.</p>
            <a href="#" class="stretched-link">Take quiz</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img src="img/disney.jpg" width="250" height="250">
          </div>
        </div>
        <!-- quiz 2 -->
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">Action</strong>
            <h3 class="mb-0">James Bond, John Wick, Rambo or Batman?</h3>
            <div class="mb-1 text-muted">Oct 10</div>
            <p class="card-text mb-auto">Determine which badass action character your morning routine best resembles.</p>
            <a href="#" class="stretched-link">Take quiz</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img src="img/wick.jpg" width="250" height="250">
          </div>
        </div>
        <!-- quiz 3 -->
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">Fantasy</strong>
            <h3 class="mb-0">Are you Sauron or Samwise Gamgee?</h3>
            <div class="mb-1 text-muted">Oct 1</div>
            <p class="card-text mb-auto">Dive into the world of Tolkien and determine whether you are a nice guy who finishes last or an evil necromancer.</p>
            <a href="#" class="stretched-link">Take quiz</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img src="img/samwise.jpg" width="250" height="250">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- js. -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
