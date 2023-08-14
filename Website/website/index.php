<!--//Author: Ayden Hardenberg
//Date: 10 June
//Page: Homepage-->
<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<html>
<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type = "text/css" href="style.css ">
	
    <title>Welcome</title>
	
</head>
<body>
	<br>
	<a href="logout.php">Logout</a>
	<h1>Hello, <?php echo $user_data['user_name']; ?></h1>

	<br>

	
	<header class="header" id="top">
        <div class="w3-top">
            <div class="w3-bar w3-black w3-card header">
              <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
              <a href="#top" class="w3-bar-item w3-button w3-padding-large " >Kevin's Transport Services</a>
              <span class="w3-right">

             
              <a href="#home" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Home</a>
              <a href="#gallery" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Gallery</a>
              <a href="#prices" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Prices</a>
              <a href="#testimony" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Testimony</a>
              <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Contact</a>
              
			  <a href="logout.php"class="w3-bar-item w3-button w3-padding-large w3-hide-small">Logout</a>
			  
            </span>
            </div>
          </div>
  
          <!-- Navbar on small screens -->
          <div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
            <a href="#home" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Home</a>
            <a href="#gallery" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Gallery</a>
            <a href="#testimony" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Testimony</a>
            <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Contact</a>
            <a href="logout.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small" onclick="myFunction"()>Logout</a>
          </div>
    </header>
<main>
    <div  class="hero-section w3-animate-left " id="home">
        <div class="hero-section-main">
           <div class="hero-section-into-text w3-margin-top">
               <h1 class="w3-text-white">Kevin's Transport Services</h1>
              <p class="w3-right w3-text-white w3-small w3-hide-small hero-qoute ">
               Specializes in providing first-in class taxi services for long distance travel in a comfortable and safe way. Our long distance taxi service aims to provide travelers a relaxing and convenient travel experience to the closer cities in an affordable way. 
	
              </p>
               
               <a href="reservation.php" class="" >
                <button class="w3-text-white w3-small w3-round w3-red w3-btn w3-margin-top"  >Make booking
                  
                </button>
				<a href="payment.php" class="" >
				 <button class="w3-text-white w3-small w3-round w3-red w3-btn w3-margin-top"  >Payment
                  
                </button>
               </a>
               
           </div>
        </div>    
        </div>
    
    </div>
  </main>
  <section>
    <div class="products" id="gallery">

  
      <div class="w3-container ">
        <h2 class="section-text-header">Gallery <br></h2>
      </div>
      <div class="w3-row product-list"  >
        <div class="w3-col m9 l6 product-left-side w3-animate-left">
          <p style="position: absolute;padding: 18px;"></p>
         <img src="img/van2.jpg"/>
        </div>
        <div class="w3-col m9 l5 product-right-side" >
          <div class="product-right-side-1">
            <p style="position: absolute;padding: 20px;"></p>
             <img src="img/van1.jpg" alt="ussama-azam"/>
          </div>
          <div class="product-right-side-2">
            <p style="position: absolute; padding: 20px;"></p>
              <img src="img/image.jpg" alt="kindred-hues"/>
          </div>
          <div>

          </div>
        </div>
      </div>
      <div>
        <div class="w3-container ">
          <h2 class="section-text-header">Find out the prices to make a booking</h2>
        </div>
        
        
      </div>
      </div>

      
  </section>
  
	
    <div class="new-arrived-products" id="prices">
      <div class="new-product ">
         <div class="new-arrived-image">
            <img src="img/map0.jpg" alt="milada-vigerova"/>
         </div>
         <div class="w3-margin-top" style="overflow: hidden; padding:0px 20px;">

         
         <h4 style="text-overflow:ellipsis ;overflow: hidden;;">Cape Town to Murraysburg</h4>
         
         <p class="w3-small" >One Way Trip</p>
         <p class="price" >R 550</p><br>
		 <p class="w3-small" >Return Trip<p>
         <p class="price" >R 1000</p>
       </div>
      </div>
     
     <div class="new-product">
       <div class="new-arrived-image">
         <img src="img/map2.jpg" alt="gez-xavier-mansfield"/>
     </div>
     <div class="w3-margin-top" style="overflow: hidden;  padding:0px 20px;">
       <h4>Cape Town to Victoria West</h4>
       
       <p class="w3-small">One Way Trip</p>
       <p class="price" >R600</p><br>
	   <p class="w3-small" >Return Trip<p>
        <p class="price" >R 1100</p>
   </div>
     </div>
     <div class="new-product">
       <div class="new-arrived-image">
         <img src="img/map1.jpg" alt="gez-xavier-mansfield"/>
     </div>
     <div class="w3-margin-top" style="overflow: hidden;  padding:0px 20px;">
       <h4>Cape Town to Beaufort West</h4>
	   
       <p class="w3-small">One Way Trip</p>
       <p class="price" >R500</p><br>
       <p class="w3-small">Return Trip</p>
       <p class="price" >R900</p>
     </div>
    </div>
  
<!-- Customer Feedback-->
<div class="w3-light-gray" style="margin-top: 40px; padding: 50px 0px;" id="testimony">


<div class="feedback">
  <div class="w3-container ">
    <h2 class="section-text-header" style="margin-top: 0px !important;">Customer FeedBack</h2>
  </div> 
  <div class="Customer-feedback" style="display: flex;justify-content: space-evenly;flex-wrap: wrap;">
   <div class="card">
    <div class="customer-feedback-header">
       <div class="customer-profile">
         <img src="https://source.unsplash.com/1B22UBPK1Pw"/>
       </div>
       <div>
         <p class="name">Sara Mak</p>
         
       </div>
    </div>
   <div>
     <p class="w3-small">"The trip from Cape Town was very well driven, I felt safe and actually fell asleep within a hour of leaving Cape Town"</p>
   </div>
  </div>
  <div class="card">
    <div class="customer-feedback-header">
       <div class="customer-profile">
         
       </div>
       <div>
         <p class="name">Christina Bredema</p>
         
       </div>
    </div>
   <div>
     <p class="w3-small">"It's a very good Transport to travel with."</p>
   </div>
  </div>
  <div class="card">
    <div class="customer-feedback-header">
       <div class="customer-profile">
         <img src="https://source.unsplash.com/cdksyTqEXzo" alt="Robert Godwin"/>
       </div>
       <div>
         <p class="name">John Daniel</p>
         
       </div>
    </div>
   <div>
     <p class="w3-small">"Great service and door to door pickups."</p>
   </div>
  </div>
  <div class="card">
    <div class="customer-feedback-header">
       <div class="customer-profile">
         <img src="https://source.unsplash.com/quPVqsLmhTg"/>
       </div>
       <div>
         <p class="name">Lydia Kante</p>
         
       </div>
    </div>
   <div>
     <p class="w3-small" >"It's the safest and reliable transportation"</p>
   </div>
  </div>


  </div> 
</div>

</div>

<br>
  <div class="w3-center contact" id="contact" >
    <div class=" w3-left-align w3-margin-top contact-info ">
       <h3 style="font-weight: 800;" class="contact-head">GET IN TOUCH</h3> 
       <h4 style="font-weight: 600;">Your transport at low cost 
       </h4>
       <p>We care about our customers<br>you can contact us for any feedback</p>
    </div>
    <div class="w3-left-align w3-margin-top contact-info" >
          <h3 style="font-weight: 600;">When To Book</h3>
             <p><b>Times</b></p>
             <p>"6am until 10pm"</p>
             <p><b>Leave Cape Town to Karoo</b><br>Monday return to Cape Town Tuesday
			 <br><b>Leave Cape Town to Karoo</b><br>Wednesday return to Thursday<br>
			 <b>Leave Cape Town to Karoo</b><br>Friday return Sunday<br></p>
             <br>
             <div class="w3-margin-to  w3-left-align" >
              <h4 style="font-weight: 600;">CONTACT INFO</h4>
              <p> <i class="fa fa-phone " style="margin-right: 8px;font-size: 20px;"></i> 083-746-0975</p>
              <p><i class="fa fa-phone" style="margin-right: 8px;font-size: 20px;"></i>kevinhardenberg2@gmail.com</p><br>
              
    
           </div>     
           
    </div>
    <div id="footer">
			Kevin's Transport Services ©2022. All Rights Reserved
		</div>
    
  </div>
 
</body>
</html>