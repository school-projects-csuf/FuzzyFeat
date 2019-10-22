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
  <?php
    include("header_main.php");
  ?>

  <div class="headingTitle"> <a href="categoryList.php"> Category </a>: Cartoon</div>

  <section>
    <div class="left">
      <img src="img/smallAd4.png" width="85%" height="240">
      <br><br>
      <img src="img/smallAd5.png" width="85%" height="240">
    </div>

    <div class="mid">

      <!-- Quiz list. -->
        <!-- quiz 1 -->
				<?php
        $catImg = 'img/cartoons.jpg';
				$sql = "SELECT * FROM `quiz` WHERE `category` = 'Cartoon'";
				$result = mysqli_query($conn, $sql) or die(mysql_error());
				if(mysqli_num_rows($result) > 0) {
					$counter = 0;
					while ($row = mysqli_fetch_assoc($result)) {
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
    						<h3 class="no-quizzes">There are no quizzes for Cartoon Yet :( Please be my first... please.</h3>
    						</div>';
				}
				?>

      </div>

    </div>

    <div class="right">
      <img id="sideAd3" src="img/longAd2.png" href="#" width="85%" height="475">
    </div>


  </section>
	
	<!-- insert footer here -->
	<?php
		include("footer.html")
	?>
	
	<!-- js. -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>


</html>
