<?php
session_start();
if(isset($_SESSION['uesrname']))
{
	?>
	
 <html>
<link rel="stylesheet" type="text/css" href="css.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <body>

 <div class="king">

 <div class="icon-bar">
  <a class="active" href="#"><i class="fa fa-home"></i></a> 
  <a href="https://www.google.com/webhp?hl=ar&sa=X&ved=0ahUKEwiWo6evr9vmAhVDalAKHVdKDSwQPAgH"><i class="fa fa-search"></i></a> 
  <a href="https://accounts.google.com/ServiceLogin?service=mail&passive=true&rm=false&continue=https://mail.google.com/mail/&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1#">
  <i class="fa fa-envelope"></i></a> 
  <a href="#"><i class="fa fa-globe"></i></a>
  
  <a href="logout.php" ><i class="fa fa-logout">  Loguot</i> </a>

</div> 
</div> 
  
 <br/>
 <br/>
 <h3 class="hello"> Hello <?php echo $_GET["u"];
 ?>
 
</h3>
 
 <center>
 <h2>
 <p> Selling animals </p>
 </h2>
 </center>
 <div class="grid-container">
 <div class="grid-item">
	<img src="necer.jpg" />
	<h4> Falcon </h4> <span>$60..</span>
 </div>
 
  <div class="grid-item">
	<img src="download.jpg" > 
	
	<h4>goat </h4><span>$100</span> 
	
  </div>

  <div class="grid-item">
	<img src="bird.jpg"/> 
  
    <h4>bird  </h4><span>$70</span> 
 </div>
 
  <div class="grid-item">
	<img src="laion.jpg"/>
	
	<a  href="img.html"><h4> laion</h4></a>
  <span>$300</span> 
  </div>
  
 
  <div class="grid-item">
  <img src="dog.jpg"/>
  <h4>German Dog </h4> <span>$98</span>
  </div>
  <div class="grid-item">
  <img src="haske.jpg"/>
  <h4>hasky Dog</h4> <span>$200</span>
  </div>
   <div class="grid-item">
		<img src="cat.jpeg" />
		<h4>shrazy Cat </h4> <span>$50</span>
  </div>
  
  
  <div class="grid-item">
  <img src="catshan.jpg"/>
  <h4>Shanshela Cat</h4> <span>$180</span>
  </div>
  <div class="grid-item">
  <img src="rapet.jpg"/>
  <h4>Raper</h4> <span>$180</span>
 </div> </body>
 </html>
   <?php
 }
 else{header("location:login.html");
			exit();}
 ?>