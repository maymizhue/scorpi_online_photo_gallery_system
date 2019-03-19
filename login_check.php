<?php


//including the database connection file

include_once("config.php");


//Start session
session_start();



$_SESSION['wrong_credentials']=0;
$_SESSION['logged_in']=0;



$user_name = mysqli_real_escape_string($mysqli, $_POST['user_name']);

$user_password = mysqli_real_escape_string($mysqli, $_POST['user_password']);





$created_result= 0;


$query="select * from user where BINARY user_name='$user_name' and user_password='$user_password'";




$created_result= mysqli_query($mysqli,$query);


$row=mysqli_fetch_array($created_result);

if (!$row['user_name'])
{
$_SESSION['wrong_credentials']=1;
header("Location: login.php");
exit();


}
else
{

$_SESSION['user_name']=$user_name;
$_SESSION['wrong_credentials']=0;

if($_SESSION['user_name']=='neo')
{

$_SESSION['type']='ADMINISTRATOR';
}
else
{
$_SESSION['type']='STANDARD';

}


$_SESSION['logged_in']=1;
header("Location: workspace.php");
exit();

}





?>