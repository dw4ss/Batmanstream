<!DOCTYPE html>
<html lang="en">

<head>

<?php 
      $base = "https://batstream.tv";
      $match = $_GET['t'];
      include '../inc/conf.php';
      include '../inc/head.php'; 
      
?>
 <style>  
     h1,h2 {
        font-size: 60px !important;
    color: #fff !important;
    text-transform: uppercase;

     }
     a.stream-now {
    font-size: 80px;
    background: #ff5b3e;
    padding: 0 50px;
    margin: 50px auto !important;
    border-radius: 20px;
    color: #fff;
}.page-header.page-header.bdcmb-bg2.page-head.parallax.overlay.animated.zoomIn {
    height: 700px;
    display: flex;
    /* align-items: center; */
    flex-direction: column;
    background: #000000d9;
    width: 70%;
    justify-content: center;
    margin: 100px auto;
    border-radius: 10px;
}
     </style>
</head>
 
 
<body>

 

<img src="https://main.cdn-img.com/portal/landing_portal/cb/f079/img/bg-main.jpg" class="full zoom" alt="" />
 


    <div class="page-header page-header bdcmb-bg2 page-head parallax overlay animated zoomIn">
    <h1 class=""><?php echo $match; ?></h1>
      
              
   

                <a class="stream-now light" href="https://advsmedia.net/register/">STREAM NOW</a>
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
