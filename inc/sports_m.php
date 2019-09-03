
 
 <div class="container">
 
	<ul class="nav navbar-nav sports_menu">

	<li><a href="<?php echo $base; ?>" class="logo"><img src="<?php echo $base; ?>/images/batmanstream.tv.png" alt="Batmanstream"></a></li>
	  
<?php  

for ($a=0;$a<count($sports); $a++) { 
  ?>


  <li><a <?php if($page==$sports[$a]['name']) { echo "class='active'"; } ?> href="<?php echo $sports[$a]['tag']; ?>" title="<?php echo $sports[$a]['name']; ?>"><?php echo $sports[$a]['icon']; ?> <span class="name"><?php echo $sports[$a]['name']; ?></span></a></li>

<?php

}
 
 
?>

<li>
 <a class="btn btn-danger" style="padding:5px 10px;background:none !important; border:1px solid #e9c804; color:#e9c804" href="https://github.com/dw4ss/Batmanstream" target="_blank">Clone Website</a>
 </li>

 
                                                                                    
          
      
      </ul> 
	  </div>
 