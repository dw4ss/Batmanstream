<!DOCTYPE html>
<html lang="en">

<head>

<?php 
      $base = "/live-stream-sports";
      $match = $_GET['t'];
      include '..inc/conf.php';
      include '..inc/head.php'; 
      
?>
 
</head>
 
 
<body>
<img src="../images/fifa18.jpg" class="full zoom" alt="" />
 
    <nav class="navbar navbar-inverse top__header" role="navigation">
        <div class="container">
 
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img src="../images/LIVESTREAMHD_300.png" alt="<?php echo $site_name; ?>" title="<?php echo $site_name; ?> Homepage"></a>
            </div>
 
 
 
        </div>

             <div class="collapse navbar-collapse top__menu submenu" id="aff">
               
			   <?php include '..inc/sports_m.php'; ?>
			   
            </div>
 
    </nav>
    <div class="page-header page-header bdcmb-bg2 page-head parallax overlay animated zoomIn">
    <h1 class=""><?php echo $match; ?></h1>
      
              
      <h2 class="">Watch <?php echo $match; ?> Live Stream HD</h2> 

                <a class="stream-now light" href="https://streamthunder.to">STREAM NOW</a>
    </div>
 
    <div class="page container">

        <div class="row">

        
            <div class="col-md-12" style="padding:0">
 
				<div class="main animated fadeIn">
			 
 
 
                 
 
			</div>
 

        </div>
 
    </div>
    </div>
 


</body>

</html>
