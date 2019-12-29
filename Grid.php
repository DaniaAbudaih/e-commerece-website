<?php
session_start();
if(isset($_SESSION['uesrname']))
{
	?>
 <html>
 <style type="text/css">
 body{

   background-color:#6050AA;
 color:#FB8604;
 margin-top:5em;}
 .grid-container {
  display: grid;
  grid-template-columns: auto auto auto;

  padding: 4%;
 

}
.grid-item {
  background-color:#C2F019;
  border: 1px solid  #F0F7D4;
  padding: 20px;
  font-size: 30px;
  text-align: center;
 opacity:0.8;
  
}
img{
 width:250px;
}
.pceket:{width:10em;
height:8em;
margin-right:90%;
 opacity:0.9%;}

 </style> 
 <body>

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
	<h4> laion</h4> <span>$300</span>
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
 </div> 
 <a href="logout.php">LogOut</a>
 <script>
 var img= document.getElementById("img");
   modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
 </script>
 </body>
 </html>
 
  <?php
 }
 else{header("location:login.html");
			exit();}
 ?>
