<!DOCTYPE html>
<?php
  include_once 'includes/dbh.inc.php';

  $ans1 = $_POST['ans1'];
  $ans2 = $_POST['ans2'];
  $ans3 = $_POST['ans3'];
  $ans4 = $_POST['ans4'];
  $ans5 = $_POST['ans5'];

  $sql = "SELECT * FROM `answer` WHERE `ansDesc` = '$ans1'";
  $result = mysqli_query($conn, $sql) or die(mysql_error());
  $row = mysqli_fetch_assoc($result);
  $ans1CID = $row['cID'];

  $sql = "SELECT * FROM `answer` WHERE `ansDesc` = '$ans2'";
  $result = mysqli_query($conn, $sql) or die(mysql_error());
  $row = mysqli_fetch_assoc($result);
  $ans2CID = $row['cID'];

  $sql = "SELECT * FROM `answer` WHERE `ansDesc` = '$ans3'";
  $result = mysqli_query($conn, $sql) or die(mysql_error());
  $row = mysqli_fetch_assoc($result);
  $ans3CID = $row['cID'];

  $sql = "SELECT * FROM `answer` WHERE `ansDesc` = '$ans4'";
  $result = mysqli_query($conn, $sql) or die(mysql_error());
  $row = mysqli_fetch_assoc($result);
  $ans4CID = $row['cID'];

  $sql = "SELECT * FROM `answer` WHERE `ansDesc` = '$ans5'";
  $result = mysqli_query($conn, $sql) or die(mysql_error());
  $row = mysqli_fetch_assoc($result);
  $ans5CID = $row['cID'];

  $charResults = array($ans1CID, $ans2CID, $ans3CID, $ans4CID, $ans5CID);

  $result = array_count_values($charResults);
  asort($result);
  end($result);
  $charID = key($result);

  $sql = "SELECT * FROM `characters` WHERE `charID` = '$charID'";
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
    <link rel="stylesheet" href="stylesheets/results.css">
  </head>
<img src="img/splashLogo2.png" alt="" style="position: absolute; width:25%;height:50%; bottom:390px; left:0px;transform: rotate(-15deg); z-index:1;  ">
  <body>
    <!-- main header -->
    <?php
      include("header_main.php")
    ?>

    <!-- results body begins -->
    <div class="container ">
      <div class="row justify-content-md-center" style="padding-top: 100px;">
        <div class="col-lg-auto">

          <div class="jumbotron " style="text-align:center;">

            <div class="container ">
              <img src="<?php echo $cImg; ?>" alt="" style="width:800px; height:500px;"> <!--placeholder-->
              <p class="lead" style="font-size:27pt;"><?php echo $cDesc; ?></p>
            </div>
            <form class="" action="categoryList.php" method="post">
              <button type="submit" class="btn btn-success">Take Another Quiz</button>
            </form>

          </div>
        </div>
      </div>
    </div>

    <?php
      include("footer.html")
    ?>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="stylesheets\fontStyles.css" charset="utf-8"></script>
  </body>
</html>
