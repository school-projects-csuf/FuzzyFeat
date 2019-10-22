<?php
	session_start();
  $fname = $_SESSION['fname'];
	$lname = $_SESSION['lname'];
	$uid = $_SESSION['uid'];

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
  <title>Profile</title>
</head>

<<<<<<< HEAD
<body style="background-image:url('backgroundindex.jpg');">
=======
<style>
	body{
		background-image: url("img/backgroundIndex.jpg");
		background-size: cover;
		background-repeat: no-repeat;
	}
	.user-quizzes-container, .row{
	  background-color: rgba(255,255,255,.8);
	}
</style>

<body class = "profileBody">
>>>>>>> f50be1377b0a2581d8e2217190fdaa8f8f76624c
  <!-- main header -->
  <?php
    include("header_main.php")
  ?>
	<?php
		include("footer.html")
	?>
  <!-- Begin body -->
  <div class="container" style="padding-top:100px;">
    <div class="user-info-container   border rounded">
      <img src="img/user.jpg" class="profile-img " alt="avatar" style="margin-left:42%;">
      <p class="username row d-flex justify-content-center rounded" style="padding-bottom:20px;"><span class="at">@</span  id="username"><b>Xx360NoScopexX</b><p>
      <p class="row d-flex justify-content-center rounded">On the weekends I like to play Call of Duty with a cup of ice cold chocolate milk served by mommy.</p>
    </div>
		<div class="row d-flex justify-content-center rounded">
			<div class="user-quizzes-container" style="background-color: rgba(255,255,255,0);">
	      <h1>Quizzes</h1>
	        <hr>
		</div>

      <!-- Remove div below. just here for testing. -->
      <div class="quizzes-container">
				<?php
				$sql = "SELECT * FROM `quiz` WHERE `uid` = '$uid'";
				$result = mysqli_query($conn, $sql) or die(mysql_error());
				if(mysqli_num_rows($result) > 0) {
					$counter = 0;
					while ($row = mysqli_fetch_assoc($result)) {

						//Sets the category img of the quiz card
						if ($row['category']=='Movies') {
							$catImg = 'img/Movies.jpg';
						}elseif ($row['category']=='Comic Books') {
							$catImg = 'img/comicbook.jpg';
						}elseif ($row['category']=='TV') {
							$catImg = 'img/tv.jpg';
						}elseif ($row['category']=='Cartoon') {
							$catImg = 'img/cartoons.jpg';
						}
						//converts datetime to readable date and time format
						$date = date_create($row['dayCreated']);
						echo '<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">';
						echo '<div class="col p-4 d-flex flex-column position-static">';
						echo '<strong class="d-inline-block mb-2 text-primary">'.$row["category"].'</strong>';
						echo '<h3 class="mb-0">'.$row["quizName"].'</h3>';
						echo '<div class="mb-1 text-muted">'.date_format($date, DATE_COOKIE).'</div>';
						echo '<p class="card-text mb-auto">'.$row["quizDesc"].'</p>';
						//links to the next page with variable passed to the url
						echo '<a href="quiz.php?quizID='.$row["quizID"].'" class="stretched-link">Take quiz</a>';
						echo '</div>';
						echo '<div class="col-auto float-right">';
						echo '<img src="'.$catImg.'" width="250" height="250">';
						echo '</div>';
						echo '</div>';
						$counter++;
					}
				}else{
					echo '<div class="container md-auto">
    						<h3>You haven\'t made any quizzes yet. What are you waiting for?</h3>
    						</div>';
				}
				?>

      </div>

    </div>

  </div>

  <!-- js. -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
