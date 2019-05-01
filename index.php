<html>
<?php

$conn=mysqli_connect("localhost","root","","rent");
$q='SELECT * FROM detail';
$row=mysqli_query($conn,$q);


?>



<head>
	<title>real estste</title>
  <style>
table,th,td{
    border: 1px solid black;
border-collapse: collapse;
}    
td{text-align: center;}
th{background-color:#b30000;color:white;}

  </style>
	</head>
<div>
	<table class="table" style="width: 100%;border-radius:3px 3px 0px 0px;">
  <thead>
    <tr>

      <th>name</th>
      <th>rent</th>
      <th>address</th>
      <th>contact</th>
      <th>image</th>
    </tr>
  </thead>
  <tbody>
  <?php while ($detail=mysqli_fetch_assoc($row)) { ?>

    <tr class="detail">
      <td><?php echo  $detail['name'];   ?></td>
      <td><?php echo  $detail['rent'];   ?></td>
      <td><?php echo  $detail['address'];   ?></td>
       <td><?php echo  $detail['contact'];   ?></td>
      <td><a href="uploads/<?php echo  $detail['images']; ?>"><img src="uploads/<?php echo  $detail['images']; ?>" style="height:100px;width:100px;"></a></td>
      
    </tr>

    <?php } ?>
  </tbody>
</table> 
	

</div>