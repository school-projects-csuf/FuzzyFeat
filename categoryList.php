<?php
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
  <title>Home</title>
</head>

<body>
  <!-- header file -->
  <?php
    include("header_main.php")
  ?>

  <div class="categoryTitle" id="categoryTitle">Categories</div>

  <section>
		<div class="left">
      <img src="img/smallAd1.png" width="85%" height="230">
      <br><br>
      <img src="img/smallAd2.png" width="85%" height="230">
    </div>

    <div class="mid">
      <div style="text-align: center;">
        <a href="categoryCartoon.php"><img src="img/cartoon.png" width="200px" height="200px" alt="Cartoon Category"> </a>
        <a href="categoryTV.php"> <img src="img/TV.png" width="200px" height="200px" alt="TV Category"> </a>
        <a href="categoryComic.php"><img src="img/comic.png" width="200px" height="200px" alt="Comic category"> </a>
        <a href="categoryMovie.php"><img src="img/Movie.png" width="200px" height="200px" alt="Movie category"> </a>
      </div>
      <h3 style="padding-top: 20px;"> Recommended </h3>
      <!-- Quiz list. -->
      <div class="quizzes-container">
				<?php
				$sql = "SELECT * FROM `quiz`";
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
					echo '<div class="alert alert-danger">
    						<h3 class="no-quizzes">There have been no quizzes created :(</h3>
    						</div>';
				}
				?>

		</div>
		</div>

    <div class="right">
      <img id="sideAd3" src="img/longAd1.png" href="#" width="85%" height="475">
    </div>

  </section>
</body>

</html>
