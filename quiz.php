<!DOCTYPE html>
<html lang="en" dir="ltr">
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
      <h1 class="quiz-name" name="quizName">PLACEHOLDER FOR QUIZ NAME</h1>
      <p class="quiz-description" name="quizDesc">placeholder: quiz desc</p>
      <div class="form-group">
        <hr>
        <!-- Question 1 -->
        <form action="includes/createQuiz.inc.php" method="post">
          <div class="quiz-question">
            <label name>placeholder: question 1</label>
            <select class="form-control" id="ans1" name"ans1">
              <option name="q1a1">1</option>
              <option name="q1a2">2</option>
              <option name="q1a3">3</option>
              <option name="q1a4">4</option>
              <option name="q1a5">5</option>
            </select>
          </div>
          <!-- Question 2 -->
          <div class="quiz-question">
            <label name>placeholder: question 2</label>
            <select class="form-control" id="ans1" name"ans1">
              <option name="q2a1">1</option>
              <option name="q2a2">2</option>
              <option name="q2a3">3</option>
              <option name="q2a4">4</option>
              <option name="q2a5">5</option>
            </select>
          </div>
          <!-- Question 3 -->
          <div class="quiz-question">
            <label name>placeholder: question 3</label>
            <select class="form-control" id="ans1" name"ans1">
              <option name="q3a1">1</option>
              <option name="q3a2">2</option>
              <option name="q3a3">3</option>
              <option name="q3a4">4</option>
              <option name="q3a5">5</option>
            </select>
          </div>
          <!-- Question 4 -->
          <div class="quiz-question">
            <label name>placeholder: question 4</label>
            <select class="form-control" id="ans1" name"ans1">
              <option name="q4a1">1</option>
              <option name="q4a2">2</option>
              <option name="q4a3">3</option>
              <option name="q4a4">4</option>
              <option name="q4a5">5</option>
            </select>
          </div>
          <!-- Question 5 -->
          <div class="quiz-question">
            <label name>placeholder: question 5</label>
            <select class="form-control" id="ans1" name"ans1">
              <option name="q5a1">1</option>
              <option name="q5a2">2</option>
              <option name="q5a3">3</option>
              <option name="q5a4">4</option>
              <option name="q5a5">5</option>
            </select>
          </div>
          <!-- submit button -->
          <button type="submit" class="btn btn-success submit-btn">Who am I</button>
        </form>
      </div>
    </div>
  </body>
</html>
