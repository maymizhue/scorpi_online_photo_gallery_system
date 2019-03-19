<?php


//including the database connection file

include_once("config.php");




echo"
<table "border:1px";>
<tr>
<td>User_name</td>
<td>Email</td>
<td>Recovery_email</td>
</tr>";

$query="select * from user";

$displaying_result = mysqli_query($mysqli,$query);
   
while($row=mysqli_fetch_array($displaying_result))
  { 
  echo"<tr>";
  echo"<td>".$row['user_name']."</td>";
  echo"<td>".$row['user_email']."</td>";
  echo"<td>".$row['user_recovery_email']."</td>";
 
echo"</tr>";
  }

echo "</table>";




?>