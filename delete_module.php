<?php



//including the database connection file



//Get timestamp for generating id

$registration_time=getdate();



include_once("config.php");

$user_name = mysqli_real_escape_string($mysqli, $_POST['user_name']);



$query="SELECT * FROM $dbName";




$created_result= mysqli_query($mysqli,$query);



if(!$created_result)
{
$query="CREATE TABLE user (user_id varchar(50),user_name varchar(100),user_email varchar(100),user_password varchar(100),user_recovery_email varchar(100))";




$created_result= mysqli_query($mysqli,$query);

if($created_result)
{

echo ("Table created successfully");
}



}



//Update data to database





$query="delete from user where user_name='$user_name';";
$result_name = mysqli_query($mysqli,$query);




if ($result_name)
{
echo ("updated successfully.");
header("location:workspace.php");
exit();
}
else{
	echo ("Update Failed. Did something went wrong?");
}







?>