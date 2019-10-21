<?php
	session_start();
	$uid = $_SESSION['uid'];
  $fname = $_SESSION['fname'];
	$lname = $_SESSION['lname'];
	include_once 'includes/dbh.inc.php';
?>
<style>
  #dropdown {
    height: 50px;
    width: 110px;
    font-size: 20pt;
    line-height: 20px;
    justify-content: center;
  }
  .navbar-brand {
    padding: 0 15px;
    height: 50px;
    line-height: 45px;
    font-size: 30pt;
  }
  .navbar-nav {
    height: 50px;
    justify-content: center;
  }
  .nextBTN {
    height: 20px;
  }

</style>
<header>
	<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<a class="navbar-brand" href="welcomePage.php">Fuzzy Feat</a>
		<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
			<!-- Example single danger button -->
			<div class="btn-group">
				<button type="button" id="dropdown" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Quiz
				</button>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="categoryList.php">Take A Quiz</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="create.php">Create A Quiz</a>
				</div>
			</div>

			<div class="navbar-nav flex-row" style="padding-left:200px; color:white;">
				<p>Welcome! <?php echo $fname.' '.$lname.'! Relax your feet.'; ?></p>
			</div>
			<ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
				<form class="form-inline my-2 my-lg-0" action="includes/logout.inc.php" method="post">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="font-size:15pt;">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="font-size:15pt;">Search</button>
					<!-- Log out button -->
					<button type="submit" class="btn btn-dark btn-lg">Log out</button>
				</form>
			</ul>
		</div>
	</nav>
</header>
