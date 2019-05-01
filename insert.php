<?php

$conn=mysqli_connect("localhost","root","","rent");

if(isset($_POST['submit'])){$name=$_POST['name'];
$name=$_POST['name'];
$rent=$_POST['rent'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$c=count($_FILES['images']['name']);
$query="INSERT INTO detail (name,rent,address,contact,images) VALUES ('$name','$rent','$address','$contact','$temp_file')";
$fire=mysqli_query($conn,$query);
}?>
 


 <html>
 <head><style>
 	.submit{background-color: black;color:white; border:black;height:30px;12px;position: relative;left:230px;top:45px;border-radius:3px;display:block;}

 	input{display:block;height:40px;border-radius: 3px; }
 	label{color:#ffffff;font-family:Arial, Helvetica, sans-serif; display:inline;}
 	a{text-decoration: none;color: white;}		
li{display: inline;}
a:hover{background-color:black;}
 </style>
 </head>
 <body>
 	<div style="height:50px;background-color: #b30000;top:0px;">
<ul style="list-style-type: none;">
<li style="margin-left: 700px;margin-top:20px;position: absolute;padding-bottom:25px; "><a href="home.html"> HOME  </a></li>
<li style="margin-left: 800px;margin-top:20px;position: absolute;"><a href="insert.php"> TO RENT  </a></li>
<li style="margin-left: 900px;margin-top:20px;position: absolute;"><a href="index.php"> FOR RENT</a></li>
</ul>
</div>
<div>
	<div style="position:relative;"><img src="house.jpg" style="width: 100%;height: 800px; opacity:.5;filter: grayscale(100%);">
<div style="background-color: #b30000;width:350px;height:430px;border-radius:5px 5px 5px 5px;opacity:.75;position: absolute;right:100px;top:100px; ">

<form style="padding-left:50px;padding-top: 25px;" method='POST' action='insert.php' enctype="multipart/form-data">
  <label for="name"> name:</label>	<input type="text" name="name" placeholder="owners name">
  <label for="rent">rent:</label>	<input type="text" name="rent" placeholder="expected rent">
   <label for="address">address:</label>	<input  style="height:65px;overflow: auto;"type="text" name="address" 
   placeholder="address">
  <label for="contact"> contact:	</label><input type="text" name="contact" placeholder="contact details">
  <label for="images"> img:</label>	<input type="file" name="images">
<input  class="submit"  type="submit" value="submit" name="submit"></form>

 </form></div></div></div></body></html>