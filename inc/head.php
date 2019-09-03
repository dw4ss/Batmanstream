 
    
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="<?php echo $texts; ?>" />
    <title><?php echo $page; ?> | <?php echo $site; ?></title>
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="live stream hd, live sports, live <?php echo $page; ?>" />
    <meta property="og:title" content="<?php echo $page; ?> | <?php echo $site; ?>">
    <meta property="og:description" content="<?php echo $texts; ?>">
    <meta property="og:url" content="<?php echo $base; ?>/<?php echo $img; ?>">
    <meta property="og:site_name" content="<?php echo $site_name; ?>">
    <meta property="og:image" content="<?php echo $base; ?>/images/img.png"/>
    <meta property="og:locale" content="<?php echo $meta_locale; ?>">
    <meta property="og:type" content="<?php echo $meta_type; ?>">
    <meta property="fb:app_id" content="">
    <meta property="fb:admins" content="">
    <meta name="twitter:title" content="<?php echo $page; ?> | <?php echo $site; ?>">
    <meta name="twitter:description" content="<?php echo $texts; ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@">
    <meta name="twitter:creator" content="@">
    <meta name="twitter:image" content="<?php echo $img; ?>"/>
    <meta name="msapplication-TileColor" content="#e9c804">
    <meta name="google-site-verification" content=""/>
    <link rel="canonical" href="<?php echo $base; ?>/<?php echo $tag; ?>"/>
    <link href="<?php echo $base; ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $base; ?>/css/styles.css" rel="stylesheet">
    <link href="<?php echo $base; ?>/css/animated.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo $base; ?>/images/fav.png" type="image/x-icon" />
 

 
    <script type="text/javascript" src="<?php echo $base; ?>/js/jquery.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $base; ?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo $base; ?>/js/cs.js"></script>
 
   
 
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-101933180-5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-101933180-5');
</script>


<script>
$( document ).ready(function() {
    $('#aff').affix({
   offset: {
     top: 110,
     bottom: function () {
       return (this.bottom = $('.footer').outerHeight(true))
     }
   }
 });
 });
 
 $(window).scroll(function() {
     var height = $(window).scrollTop();
     if (height > 100) {
         $('#btt').fadeIn();
     } else {
         $('#btt').fadeOut();
     }
 });
 $(document).ready(function() {
     $("#back2Top").click(function(event) {
         event.preventDefault();
         $("html, body").animate({ scrollTop: 0 }, "slow");
         return false;
     });
 
 });
 </script>
 
 
