<?php
  session_start();
  $uid = $_SESSION['uid'];
  $dbServername = "localhost";
  $dbUsername = "admin";
  $dbPassword = "admin";
  $dbName = "FuzzyFeatQuizzes";
  $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

  //include_once 'dbh.inc.php';

  $quizName = $_POST['quizName'];
  $quizDesc = $_POST['quizDesc'];
  $category = $_POST['category'];
  //$uid = $_POST[uid];

  //charID
  $char1 = $_POST['char1'];
  $char2 = $_POST['char2'];
  $char3 = $_POST['char3'];
  $char4 = $_POST['char4'];
  $char5 = $_POST['char5'];

  //qDesc
  $question1 = $_POST['question1'];
  $question2 = $_POST['question2'];
  $question3 = $_POST['question3'];
  $question4 = $_POST['question4'];
  $question5 = $_POST['question5'];

  //answers
  //for character1
  $ans1char1 = $_POST['ans1char1'];
  $ans2char1 = $_POST['ans2char1'];
  $ans3char1 = $_POST['ans3char1'];
  $ans4char1 = $_POST['ans4char1'];
  $ans5char1 = $_POST['ans5char1'];

  //for character2
  $ans1char2 = $_POST['ans1char2'];
  $ans2char2 = $_POST['ans2char2'];
  $ans3char2 = $_POST['ans3char2'];
  $ans4char2 = $_POST['ans4char2'];
  $ans5char2 = $_POST['ans5char2'];

  //for character3
  $ans1char3 = $_POST['ans1char3'];
  $ans2char3 = $_POST['ans2char3'];
  $ans3char3 = $_POST['ans3char3'];
  $ans4char3 = $_POST['ans4char3'];
  $ans5char3 = $_POST['ans5char3'];

  //for character4
  $ans1char4 = $_POST['ans1char4'];
  $ans2char4 = $_POST['ans2char4'];
  $ans3char4 = $_POST['ans3char4'];
  $ans4char4 = $_POST['ans4char4'];
  $ans5char4 = $_POST['ans5char4'];

  //for character5
  $ans1char5 = $_POST['ans1char5'];
  $ans2char5 = $_POST['ans2char5'];
  $ans3char5 = $_POST['ans3char5'];
  $ans4char5 = $_POST['ans4char5'];
  $ans5char5 = $_POST['ans5char5'];

  //inserting the quiz into the quiz table
  $sql = "INSERT INTO `quiz` (`quizID`, `quizName`, `quizDesc`, `category`, `uid`) VALUES (NULL, '$quizName', '$quizDesc', '$category', '$uid')";
	if (!mysqli_query($conn, $sql)) {
    //here it is
    //die('Error: ' . mysql_error());
  }else{
    //Fetching the quizID that was just created above
    $sql = "SELECT * FROM `quiz` WHERE `quizDesc` = '$quizDesc' AND `uid` = '$uid'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck < 1) {
      echo "No quizzes found for ".$uid;
    }else {
      if ($row = mysqli_fetch_assoc($result)) {
        $quizID = $row['quizID'];
      }
    }
  }

  //insert the questions into the questions table
  //insert question1
  $sql = "INSERT INTO `question` (`qID`, `qDesc`, `quizID`) VALUES (NULL, '$question1', '$quizID')";
  if (!mysqli_query($conn, $sql)) {
    die('Error: ' . mysql_error());
  }else{
    //Fetching the questionID that was just created above
    $sql = "SELECT * FROM `question` WHERE `qDesc` = '$question1'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck < 1) {
      echo "No questions found for ".$uid;
    }else {
      if ($row = mysqli_fetch_assoc($result)) {
        $qID1 = $row['qID'];
      }
    }
  }
  //insert question2
  $sql = "INSERT INTO `question` (`qID`, `qDesc`, `quizID`) VALUES (NULL, '$question2', '$quizID')";
  if (!mysqli_query($conn, $sql)) {
    die('Error: ' . mysql_error());
  }else{
    //Fetching the questionID that was just created above
    $sql = "SELECT * FROM `question` WHERE `qDesc` = '$question2'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck < 1) {
      echo "No questions found for ".$uid;
    }else {
      if ($row = mysqli_fetch_assoc($result)) {
        $qID2 = $row['qID'];
      }
    }
  }
  //insert question3
  $sql = "INSERT INTO `question` (`qID`, `qDesc`, `quizID`) VALUES (NULL, '$question3', '$quizID')";
  if (!mysqli_query($conn, $sql)) {
    die('Error: ' . mysql_error());
  }else{
    //Fetching the questionID that was just created above
    $sql = "SELECT * FROM `question` WHERE `qDesc` = '$question3'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck < 1) {
      echo "No questions found for ".$uid;
    }else {
      if ($row = mysqli_fetch_assoc($result)) {
        $qID3 = $row['qID'];
      }
    }
  }
  //insert question4
  $sql = "INSERT INTO `question` (`qID`, `qDesc`, `quizID`) VALUES (NULL, '$question4', '$quizID')";
  if (!mysqli_query($conn, $sql)) {
    die('Error: ' . mysql_error());
  }else{
    //Fetching the questionID that was just created above
    $sql = "SELECT * FROM `question` WHERE `qDesc` = '$question4'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck < 1) {
      echo "No questions found for ".$uid;
    }else {
      if ($row = mysqli_fetch_assoc($result)) {
        $qID4 = $row['qID'];
      }
    }
  }
  //insert question5
  $sql = "INSERT INTO `question` (`qID`, `qDesc`, `quizID`) VALUES (NULL, '$question5', '$quizID')";
  if (!mysqli_query($conn, $sql)) {
    die('Error: ' . mysql_error());
  }else{
    //Fetching the questionID that was just created above
    $sql = "SELECT * FROM `question` WHERE `qDesc` = '$question5'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck < 1) {
      echo "No questions found for ".$uid;
    }else {
      if ($row = mysqli_fetch_assoc($result)) {
        $qID5 = $row['qID'];
      }
    }
  }

  //insert answers into answers table
  //insert answers for character1
  $sql = "INSERT INTO `answer` (`ansID`, `ansDesc`, `questionID`, `cID`) VALUES (NULL, '$ans1char1', '$qID1', '$char1')";
  if (!mysqli_query($conn, $sql)) {
    die('Error: ' . mysql_error());
  }
  $sql = "INSERT INTO `answer` (`ansID`, `ansDesc`, `questionID`, `cID`) VALUES (NULL, '$ans2char1', '$qID2', '$char1')";
  if (!mysqli_query($conn, $sql)) {
    die('Error: ' . mysql_error());
  }
  $sql = "INSERT INTO `answer` (`ansID`, `ansDesc`, `questionID`, `cID`) VALUES (NULL, '$ans3char1', '$qID3', '$char1')";
  if (!mysqli_query($conn, $sql)) {
    die('Error: ' . mysql_error());
  }
  $sql = "INSERT INTO `answer` (`ansID`, `ansDesc`, `questionID`, `cID`) VALUES (NULL, '$ans4char1', '$qID4', '$char1')";
  if (!mysqli_query($conn, $sql)) {
    die('Error: ' . mysql_error());
  }
  $sql = "INSERT INTO `answer` (`ansID`, `ansDesc`, `questionID`, `cID`) VALUES (NULL, '$ans5char1', '$qID5', '$char1')";
  if (!mysqli_query($conn, $sql)) {
    die('Error: ' . mysql_error());
  }

  //insert answers for character2
  $sql = "INSERT INTO `answer` (`ansID`, `ansDesc`, `questionID`, `cID`) VALUES (NULL, '$ans1char2', '$qID1', '$char2')";
  if (!mysqli_query($conn, $sql)) {
    die('Error: ' . mysql_error());
  }
  $sql = "INSERT INTO `answer` (`ansID`, `ansDesc`, `questionID`, `cID`) VALUES (NULL, '$ans2char2', '$qID2', '$char2')";
  if (!mysqli_query($conn, $sql)) {
    die('Error: ' . mysql_error());
  }
  $sql = "INSERT INTO `answer` (`ansID`, `ansDesc`, `questionID`, `cID`) VALUES (NULL, '$ans3char2', '$qID3', '$char2')";
  if (!mysqli_query($conn, $sql)) {
    die('Error: ' . mysql_error());
  }
  $sql = "INSERT INTO `answer` (`ansID`, `ansDesc`, `questionID`, `cID`) VALUES (NULL, '$ans4char2', '$qID4', '$char2')";
  if (!mysqli_query($conn, $sql)) {
    die('Error: ' . mysql_error());
  }
  $sql = "INSERT INTO `answer` (`ansID`, `ansDesc`, `questionID`, `cID`) VALUES (NULL, '$ans5char2', '$qID5', '$char2')";
  if (!mysqli_query($conn, $sql)) {
    die('Error: ' . mysql_error());
  }

  //insert answers for character3
  $sql = "INSERT INTO `answer` (`ansID`, `ansDesc`, `questionID`, `cID`) VALUES (NULL, '$ans1char3', '$qID1', '$char3')";
  if (!mysqli_query($conn, $sql)) {
    die('Error: ' . mysql_error());
  }
  $sql = "INSERT INTO `answer` (`ansID`, `ansDesc`, `questionID`, `cID`) VALUES (NULL, '$ans2char3', '$qID2', '$char3')";
  if (!mysqli_query($conn, $sql)) {
    die('Error: ' . mysql_error());
  }
  $sql = "INSERT INTO `answer` (`ansID`, `ansDesc`, `questionID`, `cID`) VALUES (NULL, '$ans3char3', '$qID3', '$char3')";
  if (!mysqli_query($conn, $sql)) {
    die('Error: ' . mysql_error());
  }
  $sql = "INSERT INTO `answer` (`ansID`, `ansDesc`, `questionID`, `cID`) VALUES (NULL, '$ans4char3', '$qID4', '$char3')";
  if (!mysqli_query($conn, $sql)) {
    die('Error: ' . mysql_error());
  }
  $sql = "INSERT INTO `answer` (`ansID`, `ansDesc`, `questionID`, `cID`) VALUES (NULL, '$ans4char3', '$qID5', '$char3')";
  if (!mysqli_query($conn, $sql)) {
    die('Error: ' . mysql_error());
  }

  //insert answers for character4
  $sql = "INSERT INTO `answer` (`ansID`, `ansDesc`, `questionID`, `cID`) VALUES (NULL, '$ans1char4', '$qID1', '$char4')";
  if (!mysqli_query($conn, $sql)) {
    die('Error: ' . mysql_error());
  }
  $sql = "INSERT INTO `answer` (`ansID`, `ansDesc`, `questionID`, `cID`) VALUES (NULL, '$ans2char4', '$qID2', '$char4')";
  if (!mysqli_query($conn, $sql)) {
    die('Error: ' . mysql_error());
  }
  $sql = "INSERT INTO `answer` (`ansID`, `ansDesc`, `questionID`, `cID`) VALUES (NULL, '$ans3char4', '$qID3', '$char4')";
  if (!mysqli_query($conn, $sql)) {
    die('Error: ' . mysql_error());
  }
  $sql = "INSERT INTO `answer` (`ansID`, `ansDesc`, `questionID`, `cID`) VALUES (NULL, '$ans4char4', '$qID4', '$char4')";
  if (!mysqli_query($conn, $sql)) {
    die('Error: ' . mysql_error());
  }
  $sql = "INSERT INTO `answer` (`ansID`, `ansDesc`, `questionID`, `cID`) VALUES (NULL, '$ans5char4', '$qID5', '$char4')";
  if (!mysqli_query($conn, $sql)) {
    die('Error: ' . mysql_error());
  }

  //insert answers for character5
  $sql = "INSERT INTO `answer` (`ansID`, `ansDesc`, `questionID`, `cID`) VALUES (NULL, '$ans1char5', '$qID1', '$char5')";
  if (!mysqli_query($conn, $sql)) {
    die('Error: ' . mysql_error());
  }
  $sql = "INSERT INTO `answer` (`ansID`, `ansDesc`, `questionID`, `cID`) VALUES (NULL, '$ans2char5', '$qID2', '$char5')";
  if (!mysqli_query($conn, $sql)) {
    die('Error: ' . mysql_error());
  }
  $sql = "INSERT INTO `answer` (`ansID`, `ansDesc`, `questionID`, `cID`) VALUES (NULL, '$ans3char5', '$qID3', '$char5')";
  if (!mysqli_query($conn, $sql)) {
    die('Error: ' . mysql_error());
  }
  $sql = "INSERT INTO `answer` (`ansID`, `ansDesc`, `questionID`, `cID`) VALUES (NULL, '$ans4char5', '$qID4', '$char5')";
  if (!mysqli_query($conn, $sql)) {
    die('Error: ' . mysql_error());
  }
  $sql = "INSERT INTO `answer` (`ansID`, `ansDesc`, `questionID`, `cID`) VALUES (NULL, '$ans5char5', '$qID5', '$char5')";
  if (!mysqli_query($conn, $sql)) {
    die('Error: ' . mysql_error());
  }
  header("Location: ../index.php?quizCreated=success");
  exit();
?>
