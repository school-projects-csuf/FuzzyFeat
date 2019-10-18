<?php
$dbServername = "localhost:8889";
$dbUsername = "admin";
$dbPassword = "admin";
$dbName = "FuzzyFeatQuizzes";
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

	// include_once 'dbh.inc.php';

	$first = $_POST[fname];
	$last = $_POST[lname];
  $uid = $_POST[uid];
	$email = $_POST[email];
	$pwd = $_POST[password];

  //Hashing the password
	$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
	// Insert the user into the database
	$sql = "INSERT INTO `user` (`UID`, `fname`, `lname`, `email`, `password`) VALUES ('$_POST[uid]', '$_POST[fname]', '$_POST[lname]', '$_POST[email]', '$hashedPwd')";
	if (!mysqli_query($conn, $sql)) {
    die('Error: ' . mysql_error());
  }else{
	header("Location: ../signup.html?signup=success");
	exit();
  }


// INSERT INTO `user` (`UID`, `fname`, `lname`, `email`, `password`) VALUES ('flipzoid', 'Joesh', 'Bautista', 'joeshbautista@csu.fullerton.edu', 'test')
// } else {
// 	header("Location: ../index.php");
// 	exit();
// }
//INSERT INTO `users` (`fname`, `lname`, `uid`, `email`, `password`) VALUES ('john', 'doe', 'jdoe', 'flflfl', 'test');
?>
