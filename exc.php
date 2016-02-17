<?php include ("config/setup.php");?>




<!DOCTYPE html>
<html lang="en">
<head>


<?php include ("config/css.php");?>



  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title><?php echo $page_title.' | '. $site_title ; ?></title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">


  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="../images/g3013.png">

<link rel="stylesheet" href="http://js.arcgis.com/3.14/esri/css/esri.css">
<script src="http://js.arcgis.com/3.14/"></script>


</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <div class = "navbar-spacer"></div>
    <nav class = "navbar">
      <div class = "container">
        <a class = "navbar-brand" href="#">
          <img style="max-width:60px; margin-top: 5px;" src="../images/g3013.png">
        </a>
        <ul class = "navbar-list">
          <li class = "navbar-item">
            <a class = "navbar-link" href=""> HOME</a>
            <a class = "navbar-link" href=""> ABOUT</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
  <div class="container">
    <div class="row">
      <div class="six columns" style="margin-top: 25%">
        <h4>Welcome to Open Archaeological Database</h4>
        <p>Please choose your excavation below</p>


        <?php do { ?>
        <p><a href="contextsearch.php?id=<?php echo $excavation['id']; ?>"><?php echo $excavation['nummer']. ' - '. $excavation['fundort'] ; ?></a></p>
        <?php } while ($excavation = mysqli_fetch_assoc($r)) ?> 



      </div>
        <div class="six columns">
          <img style="max-width:800px; margin-left: 0px; margin-top: 50px;" src="../images/excavation.png">

        </div>
    </div>
  </div>




<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>




</html>
