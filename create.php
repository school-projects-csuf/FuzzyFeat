<!DOCTYPE html>
<?php
  session_start();
  $uid = $_SESSION['uid'];
?>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <!-- css. -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="stylesheets/create.css">

  <script>
    function checkChar(form) {
      char1 = form.char1.value;
      char2 = form.char2.value;
      char3 = form.char3.value;
      char4 = form.char4.value;
      char5 = form.char5.value;

      if ((char1 == char2) || (char1 == char3) || (char1 == char4) || (char1 == char5)){
        alert ("Please choose different characters");
        return false;
      }
      if ((char2 == char1) || (char2 == char3) || (char2 == char4) || (char2 == char5)){
        alert ("Please choose different characters");
        return false;
      }
      if ((char3 == char1) || (char3 == char2) || (char3 == char4) || (char3 == char5)){
        alert ("Please choose different characters");
        return false;
      }
      if ((char4 == char1) || (char4 == char2) || (char4 == char3) || (char4 == char5)){
        alert ("Please choose different characters");
        return false;
      }
      if ((char5 == char1) || (char5 == char2) || (char5 == char3) || (char5 == char4)){
        alert ("Please choose different characters");
        return false;
      }
      else{
        alert("Quiz Created");
        return true;
      }
    }
  </script>


  <title>Create a Quiz</title>
</head>

<body>
  <!-- main header -->
  <?php
    include("header_main.php")
  ?>
  <!-- Begin body -->

  <div class="create-quiz-container">
    <h1>Create a Quiz</h1>
    <!-- create quiz form -->
    <form action="includes/createQuiz.inc.php" method="POST" onSubmit= "return checkChar(this)">
      <div class="form-group">
        <label for="quizName">Quiz Name</label>
        <input type="text" class="form-control" name="quizName">
      </div>
      <div class="form-group">
        <label for="quizDesc">Quiz Description</label>
        <textarea class="form-control" name="quizDesc" rows="3"></textarea>
      </div>
      <div class="form-group">
        <label for="category">Select your Category</label>
        <select class="form-control" name="category">
          <option>Movies</option>
          <option>Comic Books</option>
          <option>TV</option>
          <option>Cartoon</option>
        </select>
      </div>
      <!-- Character selection -->
      <label>Character 1</label>
      <select class="form-control" name="char1">
        <option>Choose a character...</option>
        <option>Ant-Man</option>
        <option>Batman</option>
        <option>Black Widow</option>
        <option>Captain America</option>
        <option>Crimson Chin</option>
        <option>Darth Vader</option>
        <option>Daryl Dixon</option>
        <option>Dwight Schrute</option>
        <option>Hannibal</option>
        <option>Harry Potter</option>
        <option>He-Man</option>
        <option>Hulk</option>
        <option>Iron Man</option>
        <option>Jim Halpert</option>
        <option>Joker</option>
        <option>Luke Skywalker</option>
        <option>Mr. Krabbs</option>
        <option>Rick Grimes</option>
        <option>Ron Swanson</option>
        <option>Sauron</option>
        <option>Scarlet Witch</option>
        <option>Spider-Man</option>
        <option>Spongebob Squarepants</option>
        <option>Star-Lord</option>
        <option>Thanos</option>
        <option>Thor</option>
        <option>Woody</option>
      </select>
      <label>Character 2</label>
      <select class="form-control" name="char2">
        <option>Choose a character...</option>
        <option>Ant-Man</option>
        <option>Batman</option>
        <option>Black Widow</option>
        <option>Captain America</option>
        <option>Crimson Chin</option>
        <option>Darth Vader</option>
        <option>Daryl Dixon</option>
        <option>Dwight Schrute</option>
        <option>Hannibal</option>
        <option>Harry Potter</option>
        <option>He-Man</option>
        <option>Hulk</option>
        <option>Iron Man</option>
        <option>Jim Halpert</option>
        <option>Joker</option>
        <option>Luke Skywalker</option>
        <option>Mr. Krabbs</option>
        <option>Rick Grimes</option>
        <option>Ron Swanson</option>
        <option>Sauron</option>
        <option>Scarlet Witch</option>
        <option>Spider-Man</option>
        <option>Spongebob Squarepants</option>
        <option>Star-Lord</option>
        <option>Thanos</option>
        <option>Thor</option>
        <option>Woody</option>
      </select>
      <label>Character 3</label>
      <select class="form-control" name="char3">
        <option>Choose a character...</option>
        <option>Ant-Man</option>
        <option>Batman</option>
        <option>Black Widow</option>
        <option>Captain America</option>
        <option>Crimson Chin</option>
        <option>Darth Vader</option>
        <option>Daryl Dixon</option>
        <option>Dwight Schrute</option>
        <option>Hannibal</option>
        <option>Harry Potter</option>
        <option>He-Man</option>
        <option>Hulk</option>
        <option>Iron Man</option>
        <option>Jim Halpert</option>
        <option>Joker</option>
        <option>Luke Skywalker</option>
        <option>Mr. Krabbs</option>
        <option>Rick Grimes</option>
        <option>Ron Swanson</option>
        <option>Sauron</option>
        <option>Scarlet Witch</option>
        <option>Spider-Man</option>
        <option>Spongebob Squarepants</option>
        <option>Star-Lord</option>
        <option>Thanos</option>
        <option>Thor</option>
        <option>Woody</option>
      </select>
      <label>Character 4</label>
      <select class="form-control" name="char4">
        <option>Choose a character...</option>
        <option>Ant-Man</option>
        <option>Batman</option>
        <option>Black Widow</option>
        <option>Captain America</option>
        <option>Crimson Chin</option>
        <option>Darth Vader</option>
        <option>Daryl Dixon</option>
        <option>Dwight Schrute</option>
        <option>Hannibal</option>
        <option>Harry Potter</option>
        <option>He-Man</option>
        <option>Hulk</option>
        <option>Iron Man</option>
        <option>Jim Halpert</option>
        <option>Joker</option>
        <option>Luke Skywalker</option>
        <option>Mr. Krabbs</option>
        <option>Rick Grimes</option>
        <option>Ron Swanson</option>
        <option>Sauron</option>
        <option>Scarlet Witch</option>
        <option>Spider-Man</option>
        <option>Spongebob Squarepants</option>
        <option>Star-Lord</option>
        <option>Thanos</option>
        <option>Thor</option>
        <option>Woody</option>
      </select>
      <label>Character 5</label>
      <select class="form-control" name="char5" >
        <option>Choose a character...</option>
        <option>Ant-Man</option>
        <option>Batman</option>
        <option>Black Widow</option>
        <option>Captain America</option>
        <option>Crimson Chin</option>
        <option>Darth Vader</option>
        <option>Daryl Dixon</option>
        <option>Dwight Schrute</option>
        <option>Hannibal</option>
        <option>Harry Potter</option>
        <option>He-Man</option>
        <option>Hulk</option>
        <option>Iron Man</option>
        <option>Jim Halpert</option>
        <option>Joker</option>
        <option>Luke Skywalker</option>
        <option>Mr. Krabbs</option>
        <option>Rick Grimes</option>
        <option>Ron Swanson</option>
        <option>Sauron</option>
        <option>Scarlet Witch</option>
        <option>Spider-Man</option>
        <option>Spongebob Squarepants</option>
        <option>Star-Lord</option>
        <option>Thanos</option>
        <option>Thor</option>
        <option>Woody</option>
      </select>
      <!-- Questions-->
      <!-- 1 -->
      <hr>
      <div class="form-group">
        <label for="question1">Question 1</label>
        <input type="text" class="form-control" name="question1">
      </div>
      <div class="form-group">
        <label for="ans1char1">Answer for Character 1</label>
        <input type="text" class="form-control" name="ans1char1">
      </div>
      <div class="form-group">
        <label for="ans1char2">Answer for Character 2</label>
        <input type="text" class="form-control" name="ans1char2">
      </div>
      <div class="form-group">
        <label for="ans1char3">Answer for Character 3</label>
        <input type="text" class="form-control" name="ans1char3">
      </div>
      <div class="form-group">
        <label for="ans1char4">Answer for Character 4</label>
        <input type="text" class="form-control" name="ans1char4">
      </div>
      <div class="form-group">
        <label for="ans1char4">Answer for Character 5</label>
        <input type="text" class="form-control" name="ans1char5">
      </div>
      <!-- 2 -->
      <hr>
      <div class="form-group">
        <label for="question2">Question 2</label>
        <input type="text" class="form-control" name="question2">
      </div>
      <div class="form-group">
        <label for="ans2char1">Answer for Character 1</label>
        <input type="text" class="form-control" name="ans2char1">
      </div>
      <div class="form-group">
        <label for="ans2char2">Answer for Character 2</label>
        <input type="text" class="form-control" name="ans2char2">
      </div>
      <div class="form-group">
        <label for="ans2char3">Answer for Character 3</label>
        <input type="text" class="form-control" name="ans2char3">
      </div>
      <div class="form-group">
        <label for="ans2char4">Answer for Character 4</label>
        <input type="text" class="form-control" name="ans2char4">
      </div>
      <div class="form-group">
        <label for="ans2char5">Answer for Character 5</label>
        <input type="text" class="form-control" name="ans2char5">
      </div>
      <!-- 3 -->
      <hr>
      <div class="form-group">
        <label for="question3">Question 3</label>
        <input type="text" class="form-control" name="question3">
      </div>
      <div class="form-group">
        <label for="ans3char1">Answer for Character 1</label>
        <input type="text" class="form-control" name="ans3char1">
      </div>
      <div class="form-group">
        <label for="ans3char2">Answer for Character 2</label>
        <input type="text" class="form-control" name="ans3char2">
      </div>
      <div class="form-group">
        <label for="ans3char3">Answer for Character 3</label>
        <input type="text" class="form-control" name="ans3char3">
      </div>
      <div class="form-group">
        <label for="ans3char4">Answer for Character 4</label>
        <input type="text" class="form-control" name="ans3char4">
      </div>
      <div class="form-group">
        <label for="ans3char5">Answer for Character 5</label>
        <input type="text" class="form-control" name="ans3char5">
      </div>
      <!-- 4 -->
      <hr>
      <div class="form-group">
        <label for="question4">Question 4</label>
        <input type="text" class="form-control" name="question4">
      </div>
      <div class="form-group">
        <label for="ans4char1">Answer for Character 1</label>
        <input type="text" class="form-control" name="ans4char1">
      </div>
      <div class="form-group">
        <label for="ans4char2">Answer for Character 2</label>
        <input type="text" class="form-control" name="ans4char2">
      </div>
      <div class="form-group">
        <label for="ans4char3">Answer for Character 3</label>
        <input type="text" class="form-control" name="ans4char3">
      </div>
      <div class="form-group">
        <label for="ans4char4">Answer for Character 4</label>
        <input type="text" class="form-control" name="ans4char4">
      </div>
      <div class="form-group">
        <label for="ans4char5">Answer for Character 5</label>
        <input type="text" class="form-control" name="ans4char5">
      </div>
      <!-- 5 -->
      <hr>
      <div class="form-group">
        <label for="question5">Question 5</label>
        <input type="text" class="form-control" name="question5">
      </div>
      <div class="form-group">
        <label for="ans5char1">Answer for Character 1</label>
        <input type="text" class="form-control" name="ans5char1">
      </div>
      <div class="form-group">
        <label for="ans5char2">Answer for Character 2</label>
        <input type="text" class="form-control" name="ans5char2">
      </div>
      <div class="form-group">
        <label for="ans5char3">Answer for Character 3</label>
        <input type="text" class="form-control" name="ans5char3">
      </div>
      <div class="form-group">
        <label for="ans5char4">Answer for Character 4</label>
        <input type="text" class="form-control" name="ans5char4">
      </div>
      <div class="form-group">
        <label for="ans5char5">Answer for Character 5</label>
        <input type="text" class="form-control" name="ans5char5">
      </div>
      <button type="submit" class="btn btn-success create-btn">Create quiz</button>
    </form>

  </div>
  <?php
    include("footer.html")
  ?>


  <!-- js. -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
