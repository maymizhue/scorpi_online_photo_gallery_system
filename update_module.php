<?php



//including the database connection file



//Get timestamp for generating id

$registration_time=getdate();



include_once("config.php");


$user_name = mysqli_real_escape_string($mysqli, $_POST['user_name']);

$user_email = mysqli_real_escape_string($mysqli, $_POST['user_email']);

$user_password = mysqli_real_escape_string($mysqli, $_POST['user_password']);

$user_recovery_email = mysqli_real_escape_string($mysqli, $_POST['user_recovery_email']);


$user_id = mysqli_real_escape_string($mysqli, $_POST['user_id']);


if(!$user_id)
{

$registration_date=date("d");
$registration_month=date("m");
$registration_year=date("Y");
$registration_hour=date("H");
$registration_minute=date("i");
$registration_second=date("s");
$registration_initial=$user_name[0];




$user_id= $registration_date.$registration_month.$registration_year.$registration_hour.$registration_minute.$registration_second.$registration_initial;

}



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





$query="update user set user_email ='$user_email' where user_name='$user_name';";
$result_email = mysqli_query($mysqli,$query);

$query="update user set user_recovery_email ='$user_recovery_email' where user_name='$user_name';";
$result_recovery_email = mysqli_query($mysqli,$query);


$query="update user set user_password ='$user_password' where user_name='$user_name';";
$result_password = mysqli_query($mysqli,$query);


$query="update user set user_id ='$user_id' where user_name='$user_name';";
$result_id = mysqli_query($mysqli,$query);



/*

$query="update user set user_id ='$user_id' where user_id='$user_id';";
$result_id = mysqli_query($mysqli,$query);

*/




if ($result_id&&$result_password&&result_email&&$result_recovery_email)
{
echo ("updated successfully.");
header("location:workspace.php");
exit();
}
else{
	echo ("Update Failed. Did something went wrong?");
}







?>