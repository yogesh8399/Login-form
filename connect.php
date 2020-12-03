<?php
  $servername='localhost';
  $username='root';
  $password='';
  $dbname='data';



  $conn=new mysqli($servername,$username,$password,$dbname);

  if($conn->connect_error){
      die ("connection failed: ".$conn->connect_error);
  }
  $name=$_POST['name'];
  $phone=$_POST['phone'];
  $country=$_POST['country'];
  $address=$_POST['address'];
  $email=$_POST['email'];
  $pin=$_POST['pin'];

  $sql="INSERT INTO company (name, email, phone, country, address, pin) VALUES ( '$name', '$email', '$phone','$country', '$address', '$pin')";

  $result=$conn->query($sql);

  $sql="SELECT * FROM company ORDER BY ID DESC;";

  $result=$conn->query($sql);
  ?>
  
  
  
<html>
<head>
 <title>database</title>
 <meta charset="utf-8">
    <link rel="stylesheet" href="php_style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 </head>
 <body>

 
<div class="background">
  <div class="transbox">
  <table width=100%      cellpadding="1" cellspacing="1">
 <tr>
 <th>Name</th>
 <th>Email</th>
 <th>Phone</th>
 <th>Country</th>
 <th>Address</th>
 <th>PIN</th>
 </tr>
 <?php
 if ($result->num_rows > 0) { 
 while($try = $result->fetch_assoc()) {
 echo "<tr>";
 echo "<td>".$try['name']."</td>";
 echo "<td>".$try['email']."</td>";
 echo "<td>".$try['phone']."</td>";
 echo "<td>".$try['country']."</td>";
 echo "<td>".$try['address']."</td>";
 echo "<td>".$try['pin']."</td>";
 echo "</tr>";

 }}
 ?>
 </table>
  </div>
</div>
 </body>
