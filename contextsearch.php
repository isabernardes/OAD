<?php include ("config/setup.php");?>




<!DOCTYPE html>
<html lang="en">
<head>

<?php include ("config/css.php"); ?>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title></title>
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
  <link rel="icon" type="image/png" href="images/g.png">


</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <div class = "navbar-spacer"></div>
    <nav class = "navbar">
      <div class = "container">
        <a class = "navbar-brand" href="#">
          <img style="max-width:60px; margin-top: 5px;" src="g3013.png">
        </a>
        <ul class = "navbar-list">
          <li class = "navbar-item">
            <a class = "navbar-link" href=""> ba</a>
            <a class = "navbar-link" href=""> ba</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
  <div class="container">
    <div class="row">
      <div class="twelve columns" style="margin-top: 10%; text-align: center;">
       <h4>
         <?php do { ?>
       <?php echo $excavation1['id']; echo $_GET['id'] ; ?></h4>
       <?php } while ($excavation1 = mysqli_fetch_assoc($r)) ?> 
       



    </div>
  </div>
-->

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>




</html>
