<!DOCTYPE html>
<html lang="en">

<head>

<?php 
      
      include 'inc/conf.php';
      include 'inc/head.php';
      
?>

   

</head>
 
 
<body>

 
   <?php include 'layouts/header.php'; ?>

 
    <div class="page container">

        <div class="row">

        
            <div class="col-md-12" style="padding:0">
 <div class="p well">
 <div class="page-header page-header bdcmb-bg2 page-head parallax overlay">
    <h1 class="animated zoomIn"><?php echo $page; ?> Batmanstream</h1>
      
              
                <h2 class="animated zoomIn"><?php echo $page; ?> on <?php echo $site; ?></h2> <br>

                <a class="stream-now light btn btn-default btn-stream" href="<?php echo $base; ?>/stream-now" target="_blank"> Watch Now</a>
    </div>
<?php echo $texts; ?>

</div>
				<div class="main animated fadeIn">
			 
 
                <iframe src="<?php echo $widget_uri; ?>" width="100%" height="5000" scrolling="no" align="top" frameborder="0">Your browser does not support frames, so you will not be able to view this page.</iframe>
             

                 
 
			</div>
 

        </div>
 
    </div>
    </div>

    <a id="btt" title="Back to top" href="#" class="animated fadeInUp"><span class="glyphicon glyphicon-chevron-up"></span></a>
    

   <?php include 'layouts/footer.php'; ?>


</body>

</html>
