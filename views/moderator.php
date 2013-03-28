<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title>Hotels | Moderator</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>contact/style.css" media="all" />
<link rel="stylesheet" media="all" href="<?php echo base_url();?>style/type/folks.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/button.css" media="all" />
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" />
<![endif]-->
<script type="text/javascript" src="<?php echo base_url();?>style/js/jquery-1.5.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>style/js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>style/js/scripts.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>style/js/jquery.infieldlabel.min.js"></script>
<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/button.css" media="all" /> -->



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
              <li><a href="<?php echo base_url();?>main/show_rooms" >Rooms</a>
                
              </li>
             <li><a href="services.html">Services</a></li>
              

               
              
              <li><a href="<?php echo base_url();?>main/show_contact" >Contact</a></li>
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
                echo  "<li><a href='".$base."main/show_moderator' class='selected'>Moderator</a>";

               } ?>

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
    
    <!-- Begin Content -->
    <div class="content">

      <h3>Moderator page</h3>
     
      <br />
      <!-- Begin Form -->
     <?php  echo validation_errors();?>
     <?php if(isset($hotel_stanje)){
      echo $hotel_stanje;

     } ?>
         <div class="toggle">
        <h2 class="trigger">+Add/Edit hotels</h2>
        <div class="togglebox">
          <div>
            
              <ul class="tabs">
          <li><a href="#tab1">Add hotel</a></li>
          
          
          <li><a href="#tab2">Edit hotel</a></li>
         
        </ul>
        <div class="tab_container">
          <div style="display: none;" id="tab1" class="tab_content">
            
               <form method="post" action="<?php echo base_url() ?>main/form_hotel_valid" enctype="multipart/form-data">

              
            Hotel name:<br>
              <input type="text" name="hotel_name" value="<?php echo set_value('hotel_name'); ?>">
              <br>
               About hotel:<br>
              <textarea name="hotel_text" value=""><?php echo set_value('hotel_text'); ?></textarea><br>

              Hotel picture:<br>

              <input type="file" name="prva_slika">
            
              
              <br>
              <input type="submit" class="btn btn-info" value="Add hotel"></input>
              </form>
    
          </div>
          
         
           <div style="display: none;" id="tab2" class="tab_content">
              Hotel:
              <select>
               <?php foreach ($svi_hoteli_od_usera as $hotel){
                $ime=$hotel['ime'];
                echo "<option>$ime</option>";
               } ?>
                 
              

              </select><br>
              Hotel name:<br>
              <input type="text">
              <br>
              About hotel:<br>
              <textarea>Nesto</textarea><br>
              Hotel picture:<br>
              <input type="file">
<br>

<br>
              List tags: (na kraju dodaj ako bude vremena)
              <select>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
              <br>
              <input type="submit" class="btn btn-info" value="Edit hotel"></input>
          </div>   
            
          </div>
        </div>
      </div>
      <br>
       <div class="toggle">
        <h2 class="trigger">+Add/Edit rooms</h2>
        <div class="togglebox">
          <div>
            <form>
               <ul class="tabs">
          <li><a href="#tab4">Add room</a></li>
          <li><a href="#tab5">Edit room</a></li>
         
        </ul>
        <div class="tab_container">
          <div style="display: none;" id="tab4" class="tab_content">
          Room name:<br>
              <input type="text"><br><br>
              Room hotel:<br>
              <select>
                  <option>Hotel1</option>
                  <option>Hotel2</option>
                  <option>Hotel3</option>
                  <option>Hotel4</option>
              </select><br><br>
              Room category:<br>
              <select>
                  <option>Standard room</option>
                  <option>Family room</option>
                  <option>Senior Suite</option>
                  <option>Presidential Suite</option>
              </select>
              <br><br>
              Main room picture:<br>
              <input type="file">
              <br><br>
              About room:<br>
              <textarea>Nesto</textarea>
              <br><br>
              Living space:
              <br>
              <input type="text"><br>
              Convenient for:
              <br><br>
              From <input type="text">  To <input type="text"><br><br>
              Room facilities:<br>
              <br><input type="checkbox">Free WiFi
              <br><input type="checkbox">Free access to Sauna and Jacuzzi
              <br><input type="checkbox">Bathroom with Bathtub
              <br><input type="checkbox">Bathrobe
              <br><input type="checkbox">Hairdyer
              <br><input type="checkbox">Air conditioning
              <br><input type="checkbox">Direct dial phone
              <br><input type="checkbox">Laundry service
              <br><input type="checkbox">Minibar
              <br><input type="checkbox">Pay TV
              <br><input type="checkbox">Safety box
              <br><input type="checkbox">Iron + board on request
              <br><input type="checkbox">Slippers on request
              <br><input type="checkbox">24 hours room service
              <br>
              <br>
              <input type="submit" class="btn btn-info" value="Add room"></input>
          </div>
          <div style="display: none;" id="tab5" class="tab_content">
            Room:
            <select>
              <option>room1</option>
              <option>room2</option>
              <option>room3</option>

            </select>
            <br>
             Room name:<br>
              <input type="text"><br><br>
              Room hotel:<br>
              <select>
                  <option>Hotel1</option>
                  <option>Hotel2</option>
                  <option>Hotel3</option>
                  <option>Hotel4</option>
              </select><br><br>
              Room category:<br>
              <select>
                  <option>Standard room</option>
                  <option>Family room</option>
                  <option>Senior Suite</option>
                  <option>Presidential Suite</option>
              </select>
              <br><br>
              Main room picture:<br>
              <input type="file">
              <br><br>
              About room:<br>
              <textarea>Nesto</textarea>
              <br><br>
              Living space:
              <br>
              <input type="text"><br>
              Convenient for:
              <br><br>
              From <input type="text">  To <input type="text"><br><br>
              Room facilities:<br>
              <br><input type="checkbox">Free WiFi
              <br><input type="checkbox">Free access to Sauna and Jacuzzi
              <br><input type="checkbox">Bathroom with Bathtub
              <br><input type="checkbox">Bathrobe
              <br><input type="checkbox">Hairdyer
              <br><input type="checkbox">Air conditioning
              <br><input type="checkbox">Direct dial phone
              <br><input type="checkbox">Laundry service
              <br><input type="checkbox">Minibar
              <br><input type="checkbox">Pay TV
              <br><input type="checkbox">Safety box
              <br><input type="checkbox">Iron + board on request
              <br><input type="checkbox">Slippers on request
              <br><input type="checkbox">24 hours room service
              <br>
              <br>
              <input type="submit" class="btn btn-info" value="Edit room"></input>
          </div>



            </form>

          </div>
        </div>

      </div>
      </div>
       <div class="toggle">
        <h2 class="trigger">+Add room pictures</h2>
        <div class="togglebox">
          <div><form>
            Room:<br>
            <select><option>room1</option><option>room1</option><option>room1</option></select><br>
            Pictures:<br>
            <input type="file"><br><br>
            <input type="submit" class="btn btn-info" value="Add picture"></input>
            <br>
          </form>
          </div>
        </div>
      </div>
      </div>

       
     
      

    <!-- End Content --> 
    
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
</body>
</html>