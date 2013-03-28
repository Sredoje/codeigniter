<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title>Hotel | Single room</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style.css" media="all" />
<link rel="stylesheet" media="all" href="<?php echo base_url();?>style/css/prettyPhoto.css" />
<link rel="stylesheet" media="all" href="<?php echo base_url();?>style/type/folks.css" />
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" />
<![endif]-->
<script type="text/javascript" src="<?php echo base_url();?>style/js/jquery-1.5.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>style/js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>style/js/quicksand.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>style/js/portfolio.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>style/js/scripts.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>style/js/jquery.prettyPhoto.js"></script>

</head>
<body>
<div id="container"> 
  <!-- Begin Header Wrapper -->
  <div id="page-top">
    <div id="header-wrapper"> 
      <!-- Begin Header -->
      <div id="header">
        <div id="logo"><a href="index.html"><img src="<?php echo base_url();?>style/images/logo2.png" alt="Delphic" /></a></div>
        <!-- Logo --> 
        <!-- Begin Menu -->
        <div id="menu-wrapper">
          <div id="smoothmenu1" class="ddsmoothmenu">
            <ul>
              <li><a href="<?php echo base_url();?>">Home</a>
               
              </li>
              <li><a href="<?php echo base_url();?>main/show_hotels/0">Hotels</a>
                
              </li>
              <li><a href="<?php echo base_url();?>main/show_rooms" class="selected">Rooms</a>
                
              </li>
               <li><a href="services.html">Services</a></li>

              <li><a href="<?php echo base_url();?>main/show_contact">Contact</a></li>
                <?php
              $base=base_url();
               if(isset($this->session->userdata['je_logovan'])&&$this->session->userdata['je_logovan']==1){
                

                echo ("<li><a href='".$base."main/logout'>Logout</a>");
              }
              else{
                echo ("<li><a href='".$base."main/show_login'>Log in</a>");
              } ?>
              
          
             
              
                
              
              <?php if(isset($this->session->userdata['je_logovan'])&&$this->session->userdata['uloga']==1){
                echo  "<li><a href='".$base."main/show_admin'>Admin</a>";

               } ?>
               <?php if(isset($this->session->userdata['je_logovan'])&&$this->session->userdata['uloga']==2){
                echo  "<li><a href='".$base."main/show_moderator'>Moderator</a>";

               } ?>
               
                
              </li>
            </ul>
          </div>
        </div>
        <!-- End Menu -->
      </div>
      <!-- End Header --> 
    </div>
  </div>
  <!-- End Header Wrapper --> 
  
  <!-- Begin Wrapper -->
  <div id="wrapper">
    <div id="portfolio"> 
      <!-- Begin Portfolio Navigation -->
      <ul class="gallerynav">
        <li class="selected-1"><a href="#" data-value="all">All rooms<span></span></a></li>
        <li><a href="#" data-value="illustration">Standard room<span></span></a></li>
        <li><a href="#" data-value="photography">Family room<span></span></a></li>
        <li><a href="#" data-value="video">Senior Suite<span></span></a></li>
        <li><a href="#" data-value="web">Presidential Suite<span></span></a></li>
        <li>Hotel:<select><option>Hotel1</option><option>Hotel2</option><span></span></select></li>
      </ul>
      <!-- End Portfolio Navigation --> 
      
      <!-- Begin Portfolio Elements -->
      <ul id="gallery" class="grid">
        
        <!-- Begin Image 1 -->
        <li data-id="id-1" class="photography"> <a href="<?php echo base_url();?>main/show_room" title=""> <img src="<?php echo base_url();?>style/images/art/portfolio1-th.jpg" alt="" /></a> </li>
        <!-- End Image 1 -->
        
        <li data-id="id-2" class="illustration"> <a href="<?php echo base_url();?>main/show_room" title=""> <img src="<?php echo base_url();?>style/images/art/portfolio2-th.jpg" alt="" /></a> </li>
        <li data-id="id-3" class="video"> <a href="<?php echo base_url();?>main/show_room" title=""> <img src="<?php echo base_url();?>style/images/art/portfolio3-th.jpg" alt="" /></a> </li>
        <li data-id="id-4" class="web"> <a href="<?php echo base_url();?>main/show_room" title=""> <img src="<?php echo base_url();?>style/images/art/portfolio4-th.jpg" alt="" /></a> </li>
        <li data-id="id-5" class="photography"> <a href="<?php echo base_url();?>main/show_room" title=""> <img src="<?php echo base_url();?>style/images/art/portfolio5-th.jpg" alt="" /></a> </li>
        <li data-id="id-6" class="illustration"> <a href="<?php echo base_url();?>main/show_room" title=""> <img src="<?php echo base_url();?>style/images/art/portfolio6-th.jpg" alt="" /></a> </li>
        <li data-id="id-7" class="video"> <a href="<?php echo base_url();?>main/show_room" title=""> <img src="<?php echo base_url();?>style/images/art/portfolio7-th.jpg" alt="" /></a> </li>
        <li data-id="id-8" class="web"> <a href="<?php echo base_url();?>main/show_room" title=""> <img src="<?php echo base_url();?>style/images/art/portfolio8-th.jpg" alt="" /></a> </li>
        <li data-id="id-9" class="illustration"> <a href="<?php echo base_url();?>main/show_room" title=""> <img src="<?php echo base_url();?>style/images/art/portfolio9-th.jpg" alt="" /></a> </li>
        <li data-id="id-10" class="photography"> <a href="<?php echo base_url();?>main/show_room" title=""> <img src="<?php echo base_url();?>style/images/art/portfolio10-th.jpg" alt="" /></a> </li>
        <li data-id="id-11" class="video"> <a href="<?php echo base_url();?>main/show_room" title=""> <img src="<?php echo base_url();?>style/images/art/portfolio11-th.jpg" alt="" /></a> </li>
        <li data-id="id-12" class="web"> <a href="<?php echo base_url();?>main/show_room" title=""> <img src="<?php echo base_url();?>style/images/art/portfolio12-th.jpg" alt="" /></a> </li>
        <li data-id="id-13" class="photography"> <a href="<?php echo base_url();?>main/show_room" title=""> <img src="<?php echo base_url();?>style/images/art/portfolio13-th.jpg" alt="" /></a> </li>
        <li data-id="id-14" class="illustration"> <a href="<?php echo base_url();?>main/show_room" title=""> <img src="<?php echo base_url();?>style/images/art/portfolio14-th.jpg" alt="" /></a> </li>
        <li data-id="id-15" class="photography"> <a href="<?php echo base_url();?>main/show_room" title=""> <img src="<?php echo base_url();?>style/images/art/portfolio15-th.jpg" alt="" /></a> </li>
        <li data-id="id-16" class="illustration"> <a href="<?php echo base_url();?>main/show_room" title=""> <img src="<?php echo base_url();?>style/images/art/portfolio16-th.jpg" alt="" /></a> </li>
      </ul>
      <!-- End Portfolio Elements --> 
      
    </div>
  </div>
  
  <!-- End Wrapper -->
  <div class="clearfix"></div>
  <div class="push"></div>
</div>

<!-- Begin Footer -->
<div id="footer-wrapper">
  <div id="footer">
    <div id="footer-content"> 
      
      <!-- Begin Copyright -->
      <div id="copyright">
        <p>© Copyright 2011 Delphic | Creative Portfolio Template</p>
      </div>
      <!-- End Copyright --> 
      
      <!-- Begin Social Icons -->
      <div id="socials">
        <ul>
          <li><a href="#"><img src="<?php echo base_url();?>style/images/icon-rss.png" alt="" /></a></li>
          <li><a href="#"><img src="<?php echo base_url();?>style/images/icon-twitter.png" alt="" /></a></li>
          <li><a href="#"><img src="<?php echo base_url();?>style/images/icon-dribble.png" alt="" /></a></li>
          <li><a href="#"><img src="<?php echo base_url();?>style/images/icon-tumblr.png" alt="" /></a></li>
          <li><a href="#"><img src="<?php echo base_url();?>style/images/icon-flickr.png" alt="" /></a></li>
          <li><a href="#"><img src="<?php echo base_url();?>style/images/icon-facebook.png" alt="" /></a></li>
        </ul>
      </div>
      <!-- End Social Icons --> 
      
    </div>
  </div>
</div>

<!-- End Footer --> 
<script type="text/javascript">
		$(document).ready(function(){
			
			$("ul.grid img").hide()
			$("ul.grid img").each(function(i) {
			  $(this).delay(i * 200).fadeIn();
			});
			
		});
</script>
</body>
</html>