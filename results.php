<!DOCTYPE html>
<?php
  $dbServername = "localhost";
  $dbUsername = "admin";
  $dbPassword = "admin";
  $dbName = "FuzzyFeatQuizzes";
  $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
  //include_once 'dbh.inc.php';

  $sql = "SELECT * FROM `characters` WHERE `charID` = 'Black Widow'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $cName = $row['charID'];
  $cDesc = $row['charDesc'];
  $cImg = $row['img'];
?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>You are <?php echo $cName; ?>!</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylesheets/styles.css">
  </head>

  <body>

    <div class="container-fluid ">

      <div class="row justify-content-md-center" style="padding-top: 100px;">
        <div class="col-lg-auto">
          <div class="jumbotron jumbotron-fluid" style="text-align:center;">
            <img src="img/splashLogo5.png" alt="" style="position: absolute; bottom: 500px; left:-400px;transform: rotate(-15deg);">
            <div class="container ">
              <img src="<?php echo $cImg; ?>" alt="" style="max-width:1110px; max-height:1000px;"> <!--placeholder-->
              <p class="lead" style="font-size:27pt;"><?php echo $cDesc; ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="stylesheets\fontStyles.css" charset="utf-8"></script>
  </body>
</html>
