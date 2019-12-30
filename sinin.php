<?php
if(isset($_POST['SinUp-submit'])) {
	$uesrname=$_POST ["FirstName"]; 	   
	$lastname=$_POST["LastName"];
	$Email=$_POST["Email"];
	$password=$_POST ["password"];   
	$RepatSpassword=$_POST["RepatSpassword"];
	   
	  if($RepatSpassword==$password){
		$dbhost="localhost";
		$dbuesr="root";
		$dbpas='';
		$db="e-commerce";
	    
		 $conn=new mysqli($dbhost,$dbuesr,$dbpas,$db);
	  
            if(!$conn){die("connection failad");
			} 
			$hash= Password_hash($password,  PASSWORD_DEFAULT);
		$sql = "INSERT INTO `users`(`FirstName`, `LastName`, `Email`, `password`) VALUES ('".$uesrname."','".$lastname."','".$Email."','".$hash."')";
        $result= mysqli_query($conn,$sql);
		  
		  if($result){
			  header("location:login.html");
		  }
		 else{
			header("location:a.html");
			exit();
		}
			  
	  }
	  else{
		  header("location:a.html");
		exit();
	  }
}


?>