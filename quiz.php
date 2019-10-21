<!DOCTYPE html>
<html lang="en" dir="ltr">

<?php
  session_start();
  include 'includes/dbh.inc.php';
  if (isset($_GET['quizID'])) {
    $quizID = $_GET['quizID'];
  }

  //Pull the quiz
  $sql = "SELECT * FROM `quiz` WHERE `quizID` = '$quizID'";
  $result = mysqli_query($conn, $sql) or die(mysql_error());
  if ($row = mysqli_fetch_assoc($result)) {
    $quizName = $row['quizName'];
    $quizDesc = $row['quizDesc'];
  }

  $sql = "SELECT * FROM `question` WHERE `quizID` = '$quizID'";
  $result = mysqli_query($conn, $sql) or die(mysql_error());
  if(mysqli_num_rows($result) > 0) {
    $i = 0;
    $questionDesc = array();
    while ($row = mysqli_fetch_assoc($result)) {
      $questionDesc[$i] = $row['qDesc'];
      $questionID[$i] = $row['qID'];
      $i++;
    }
  }

  //Answers for question 1
  $sql = "SELECT * FROM `answer` WHERE `questionID` = '$questionID[0]' ORDER BY `questionID` ASC";
  $result = mysqli_query($conn, $sql) or die(mysql_error());
  if(mysqli_num_rows($result) > 0) {
    $i = 0;
    $Q1ansDesc = array();
    while ($row = mysqli_fetch_assoc($result)) {
      $Q1ansDesc[$i] = $row['ansDesc'];
      $i++;
    }
  }

  //Answers for question 2
  $sql = "SELECT * FROM `answer` WHERE `questionID` = '$questionID[1]' ORDER BY `questionID` ASC";
  $result = mysqli_query($conn, $sql) or die(mysql_error());
  if(mysqli_num_rows($result) > 0) {
    $i = 0;
    $Q2ansDesc = array();
    while ($row = mysqli_fetch_assoc($result)) {
      $Q2ansDesc[$i] = $row['ansDesc'];
      $i++;
    }
  }

  //Answers for question 3
  $sql = "SELECT * FROM `answer` WHERE `questionID` = '$questionID[2]' ORDER BY `questionID` ASC";
  $result = mysqli_query($conn, $sql) or die(mysql_error());
  if(mysqli_num_rows($result) > 0) {
    $i = 0;
    $Q3ansDesc = array();
    while ($row = mysqli_fetch_assoc($result)) {
      $Q3ansDesc[$i] = $row['ansDesc'];
      $i++;
    }
  }

  //Answers for question 4
  $sql = "SELECT * FROM `answer` WHERE `questionID` = '$questionID[3]' ORDER BY `questionID` ASC";
  $result = mysqli_query($conn, $sql) or die(mysql_error());
  if(mysqli_num_rows($result) > 0) {
    $i = 0;
    $Q4ansDesc = array();
    while ($row = mysqli_fetch_assoc($result)) {
      $Q4ansDesc[$i] = $row['ansDesc'];
      $i++;
    }
  }

  //Answers for question 5
  $sql = "SELECT * FROM `answer` WHERE `questionID` = '$questionID[4]' ORDER BY `questionID` ASC";
  $result = mysqli_query($conn, $sql) or die(mysql_error());
  if(mysqli_num_rows($result) > 0) {
    $i = 0;
    $Q5ansDesc = array();
    while ($row = mysqli_fetch_assoc($result)) {
      $Q5ansDesc[$i] = $row['ansDesc'];
      $i++;
    }
  }
?>
  <head>
    <meta charset="utf-8">
    <!-- css. -->
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylesheets/takequiz.css">
    <link rel="stylesheet" href="stylesheets/styles.css">
    <audio src="sounds/jeopardy.mp3" autoplay hidden="true" loop="true" ></audio>
    <title>Take a Quiz</title>
  </head>
  <body>
    <!-- header file -->
    <?php
      include("header.html")
    ?>

    <!-- Begin Take a Quiz Section -->
    <div class="take-quiz-container">
      <h1 class="quiz-name" name="quizName"><?php echo $quizName; ?></h1>
      <p class="quiz-description" name="quizDesc"><?php echo $quizDesc; ?></p>
      <div class="form-group">
        <hr>
        <!-- Question 1 -->
        <form action="results.php" method="post">
          <div class="quiz-question">
            <label name><?php echo $questionDesc[0]; ?></label>
            <select class="form-control" id="ans1" name"ans1">
              <option name="q1a1"><?php echo $Q1ansDesc[0]; ?></option>
              <option name="q1a2"><?php echo $Q1ansDesc[1]; ?></option>
              <option name="q1a3"><?php echo $Q1ansDesc[2]; ?></option>
              <option name="q1a4"><?php echo $Q1ansDesc[3]; ?></option>
              <option name="q1a5"><?php echo $Q1ansDesc[4]; ?></option>
            </select>
          </div>
          <!-- Question 2 -->
          <div class="quiz-question">
            <label name><?php echo $questionDesc[1]; ?></label>
            <select class="form-control" id="ans1" name"ans1">
              <option name="q2a1"><?php echo $Q2ansDesc[0]; ?></option>
              <option name="q2a2"><?php echo $Q2ansDesc[1]; ?></option>
              <option name="q2a3"><?php echo $Q2ansDesc[2]; ?></option>
              <option name="q2a4"><?php echo $Q2ansDesc[3]; ?></option>
              <option name="q2a5"><?php echo $Q2ansDesc[4]; ?></option>
            </select>
          </div>
          <!-- Question 3 -->
          <div class="quiz-question">
            <label name><?php echo $questionDesc[2]; ?></label>
            <select class="form-control" id="ans1" name"ans1">
              <option name="q3a1"><?php echo $Q3ansDesc[0]; ?></option>
              <option name="q3a2"><?php echo $Q3ansDesc[1]; ?></option>
              <option name="q3a3"><?php echo $Q3ansDesc[2]; ?></option>
              <option name="q3a4"><?php echo $Q3ansDesc[3]; ?></option>
              <option name="q3a5"><?php echo $Q3ansDesc[4]; ?></option>
            </select>
          </div>
          <!-- Question 4 -->
          <div class="quiz-question">
            <label name><?php echo $questionDesc[3]; ?></label>
            <select class="form-control" id="ans1" name"ans1">
              <option name="q4a1"><?php echo $Q4ansDesc[0]; ?></option>
              <option name="q4a2"><?php echo $Q4ansDesc[1]; ?></option>
              <option name="q4a3"><?php echo $Q4ansDesc[2]; ?></option>
              <option name="q4a4"><?php echo $Q4ansDesc[3]; ?></option>
              <option name="q4a5"><?php echo $Q4ansDesc[4]; ?></option>
            </select>
          </div>
          <!-- Question 5 -->
          <div class="quiz-question">
            <label name><?php echo $questionDesc[4]; ?></label>
            <select class="form-control" id="ans1" name"ans1">
              <option name="q5a1"><?php echo $Q5ansDesc[0]; ?></option>
              <option name="q5a2"><?php echo $Q5ansDesc[1]; ?></option>
              <option name="q5a3"><?php echo $Q5ansDesc[2]; ?></option>
              <option name="q5a4"><?php echo $Q5ansDesc[3]; ?></option>
              <option name="q5a5"><?php echo $Q5ansDesc[4]; ?></option>
            </select>
          </div>
          <!-- submit button -->
          <button type="submit" class="btn btn-success submit-btn">Who am I</button>
        </form>
      </div>
    </div>
  </body>
</html>
