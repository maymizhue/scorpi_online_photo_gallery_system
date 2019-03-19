<?php


//including the database connection file



//Get timestamp for generating id




include_once("config.php");


//$publish_all_variable=$_POST['publish_all'];


//if($publish_all_variable=='publish_all')


//{

//insert data to database
$query="INSERT INTO published select * from to_publish;";


$result = mysqli_query($mysqli,$query);


/*
$query="delete from to_publish;";

mysqli_query($mysqli,$query);
*/

if ($result==1)
{
echo ('updated successfully.');
}
else
{
	echo ('Publish Failed. Did something went wrong?');	
}






//}




//}





?>