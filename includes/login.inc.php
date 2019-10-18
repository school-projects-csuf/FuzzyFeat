<?php

session_start();
include 'dbh.inc.php';

$uid = mysqli_real_escape_string($conn, $_POST[uid]);
$pwd = mysqli_real_escape_string($conn, $_POST[password]);

$sql = "SELECT * FROM user WHERE `UID`='$uid' OR `email`='$uid';";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck < 1) {
  header("Location: ../index.php?login=invalid_name_or_email");
	exit();
} else {
  if ($row = mysqli_fetch_assoc($result)) {
			//De-hashing the password
			$hashedPwdCheck = password_verify($pwd, $row['password']);
			if ($hashedPwdCheck == false) {
				header("Location: ../index.php?login=invalid_password");
				exit();
			} elseif ($hashedPwdCheck == true) {
				//Log in the user here
				$_SESSION['user_id'] = $row['UID'];
				$_SESSION['user_first'] = $row['fname'];
				$_SESSION['user_last'] = $row['lname'];
				$_SESSION['user_email'] = $row['email'];

				header("Location: ../profile.html?login=success");
				exit();
			}
    }
  }
?>
SELECT * FROM `user` WHERE `UID` = 'flipzoid82'
