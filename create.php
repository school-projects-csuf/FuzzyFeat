<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <!-- css. -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="stylesheets/create.css">
  <title>Create</title>
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
    <form action="includes/createQuiz.inc.php" method="post">
      <div class="form-group">
        <label for="formGroupExampleInput">Quiz Name</label>
        <input type="text" class="form-control" id="formGroupExampleInput">
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Quiz bio</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Select your Category</label>
        <select class="form-control" id="exampleFormControlSelect1">
          <option>Movies</option>
          <option>Comic Books</option>
          <option>TV</option>
          <option>Cartoon</option>
        </select>
      </div>
      <!-- Character selection -->
      <label>Character 1</label>
      <select class="form-control" id="ch1">
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
      <select class="form-control" id="ch2">
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
      <select class="form-control" id="ch3">
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
      <select class="form-control" id="ch4">
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
        <label for="formGroupExampleInput">Question 1</label>
        <input type="text" class="form-control" id="question1">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Answer for Character 1</label>
        <input type="text" class="form-control" id="">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Answer for Character 2</label>
        <input type="text" class="form-control" id="">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Answer for Character 3</label>
        <input type="text" class="form-control" id="">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Answer for Character 4</label>
        <input type="text" class="form-control" id="">
      </div>
      <!-- 2 -->
      <hr>
      <div class="form-group">
        <label for="formGroupExampleInput">Question 2</label>
        <input type="text" class="form-control" id="question1">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Answer for Character 1</label>
        <input type="text" class="form-control" id="">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Answer for Character 2</label>
        <input type="text" class="form-control" id="">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Answer for Character 3</label>
        <input type="text" class="form-control" id="">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Answer for Character 4</label>
        <input type="text" class="form-control" id="">
      </div>
      <!-- 3 -->
      <hr>
      <div class="form-group">
        <label for="formGroupExampleInput">Question 3</label>
        <input type="text" class="form-control" id="question1">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Answer for Character 1</label>
        <input type="text" class="form-control" id="">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Answer for Character 2</label>
        <input type="text" class="form-control" id="">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Answer for Character 3</label>
        <input type="text" class="form-control" id="">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Answer for Character 4</label>
        <input type="text" class="form-control" id="">
      </div>
      <!-- 4 -->
      <hr>
      <div class="form-group">
        <label for="formGroupExampleInput">Question 4</label>
        <input type="text" class="form-control" id="question1">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Answer for Character 1</label>
        <input type="text" class="form-control" id="">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Answer for Character 2</label>
        <input type="text" class="form-control" id="">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Answer for Character 3</label>
        <input type="text" class="form-control" id="">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Answer for Character 4</label>
        <input type="text" class="form-control" id="">
      </div>
      <!-- 5 -->
      <hr>
      <div class="form-group">
        <label for="formGroupExampleInput">Question 5</label>
        <input type="text" class="form-control" id="question1">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Answer for Character 1</label>
        <input type="text" class="form-control" id="">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Answer for Character 2</label>
        <input type="text" class="form-control" id="">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Answer for Character 3</label>
        <input type="text" class="form-control" id="">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Answer for Character 4</label>
        <input type="text" class="form-control" id="">
      </div>
      <button type="submit" class="btn btn-success create-btn">Create quiz</button>
    </form>

  </div>


  <!-- js. -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
