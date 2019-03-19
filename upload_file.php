<?php

session_start();


include('config.php');



if(isset($_SESSION['user_name']))
{
$sender_name=$_SESSION['user_name'];
}
else
{
$sender_name='ANONYMOUS';
}


if(!empty($_POST['category']))
{

$category=$_POST['category'];

}



$target_dir = "pictures/to_publish/";

//$file_name_path= $_FILES['my_file']['name'];

$extension = pathinfo($_FILES['my_file']['name'], PATHINFO_EXTENSION);

if ($_POST['my_file_name'])
{
$target_file= $target_dir.basename($_POST['my_file_name']).'.'.$extension;
}
else
{
$target_file= $target_dir.basename($_FILES["my_file"]["name"]);
}
$uploadOk=1;
$imageFileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["submit"]))

{

$check=getimagesize($_FILES["my_file"]["tmp_name"]);

if($check != false)

{
echo "File is an image-".$check["mime"].".";
$uploadOk=1;

}
else{
echo "File is not an image.";
$uploadOk=0;

}

}

/*

if (file_exists($target_file))
{
echo "Sorry, file already exists.";
$uploadOk=0;

}

*/

if ($uploadOk==0)
{
echo "sorry, your file was not uploaded.";

}
else
{
if (move_uploaded_file($_FILES["my_file"]["tmp_name"],$target_file))
{
echo "The file upload request for ".basename( $_FILES["my_file"]["name"])." has been made.";

}
else
{
echo "Sorry there was an error uploading your file.";
}

}




/////////////////////////////////Making entry in Database
/////////////////////////////////



//insert data to database
$query="INSERT INTO to_publish (to_publish_name,to_publish_sender,category) VALUES('$target_file','$sender_name','$category');";
$result = mysqli_query($mysqli,$query);


if ($result==1)
{
echo ("<a>updated successfully.</a><a><a href='upload.php'>Click</a> to go back<a>");

}
else{
	echo ("Update Failed. Did something went wrong?");
}







?>
