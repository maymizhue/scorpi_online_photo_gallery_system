<?php

session_start();





if(isset($_SESSION['logged_in']))
{
if($_SESSION['logged_in']==1)

{








include('config.php');


$user_name=$_SESSION['user_name'];


$heading_variable="<a id='design_workspace_name'>$user_name</a><a>'</a><a>s</a> <a href='workspace.php'>workspace</a>";


include 'heading1.php';
include 'heading2.php';


$heading=$heading1.$heading_variable.$heading2;














include 'bottom1.php';


$bottom=$bottom1;












echo ($heading);









if($_SESSION['type']=='ADMINISTRATOR')
{


echo '
<div class="form_wrapper">





<div class=\'workspace_container\'>





<script language="JavaScript" type="text/javascript">

function toggleDiv(element){
     if(document.getElementById(element).style.display == \'none\')
     {
       document.getElementById(element).style.display = \'block\';
     }
     else if(document.getElementById(element).style.display == \'block\')
     {
       document.getElementById(element).style.display = \'none\';
     }
}

</script>










     <button onClick="toggleDiv(\'display_div\');" class="workspace_buton">Display</button>

<div id="display_div" style = "display:none">';
echo"
<table 'border:1px';>
<tr>

<td>User Id</td>
<td>User Name</td>
<td>Email</td>
<td>Recovery Email</td>

</tr>";

$query="select * from user";

$displaying_result = mysqli_query($mysqli,$query);
   
while($record=mysqli_fetch_array($displaying_result))
  { 
  echo"<tr>";
  echo"<td>".$record['user_id']."</td>";
  echo"<td>".$record['user_name']."</td>";
  echo"<td>".$record['user_email']."</td>";
  echo"<td>".$record['user_recovery_email']."</td>";
 
echo"</tr>";
  }

echo "</table>";

echo '
</div>













</br>
 <button onClick="toggleDiv(\'add_div\');" class="workspace_buton">Add</button>

     <div id="add_div" style = "display:none">
          


<form action="add_module.php" method="post" name="add_div"> 



<table>
<tr>

<td>user_name</td>

<td><input type="text" name="user_name"></td>

</tr>

<tr>
<tr>

<td>Password</td>

<td><input type="password" name="user_password"></td>

</tr>

<tr>

<td>Email</td>

<td><input type="text" name="user_email"></td>

</tr>

<tr>

<td>Recovery email</td>

<td><input type="text" name="user_recovery_email"></td>

</tr>

<tr>

<td></td>

<td><input type="submit" name="Submit" value="Add" class="workspace_buton"></td>

</tr>

</table>

</form>


     </div>
















</br>

 <button onClick="toggleDiv(\'update_div\');" class="workspace_buton">Update</button>

     <div id="update_div" style = "display:none">
          


<form action="update_module.php" method="post" name="update_div"> 


<tr>

<td>id :</td>

<td><input type="text" name="user_id"></td>

</tr>
</br>

<tr>

<td>Name</td>

<td><input type="text" name="user_name"></td>

</tr>
</br>


<tr>

<td>Password</td>

<td><input type="text" name="user_password"></td>

</tr>
</br>





<tr>

<td>Email</td>

<td><input type="text" name="user_email"></td>

</tr>

</br>

<tr>

<td>Recovery Email</td>

<td><input type="text" name="recovery_user_email"></td>

</tr>
</br>



<tr>

<td></td>

<td><input type="submit" name="Submit" value="Update"></td>

</tr>
</br>

</table>

</form>


     </div>














</br>

 <button onClick="toggleDiv(\'delete_div\');" class="workspace_buton">Delete</button>

<div id="delete_div" style = "display:none">
          


<form action="delete_module.php" method="post" name="update_div"> 

<table width="25%" border="0">

<tr>

<td>user_name</td>

<td><input type="text" name="user_name"></td>

</tr>

<tr>



<td></td>

<td><input type="submit" name="Submit" value="Delete" class="workspace_buton"></td>

</tr>

</table>



</form>



</div>











</div>














<div class="workspace_container">

<form action="publish_all_module.php" method="post">
<input type="submit" name="publish_all" value="publish_all" class="workspace_buton">

</form>










     <button onClick="toggleDiv(\'to_publish_display_div\');" class="workspace_buton">Display</button>


<div id="to_publish_display_div" style = "display:none">';
echo"
<table 'border:1px';>
<tr>

<td>Picture</td>
<td>to_publish_name</td>
<td>to_publish_sender</td>
<td>category</td>

</tr>";

$query="select * from to_publish";

$displaying_result = mysqli_query($mysqli,$query);
   
while($record=mysqli_fetch_array($displaying_result))
  { 
  echo"<tr>";


  echo'<td><img src="'.$record['to_publish_name'].'"
alt="pic1" style="width:100px;height:100px;"></td>';
  echo"<td>".$record['to_publish_name']."</td>";
  echo"<td>".$record['to_publish_sender']."</td>";
  echo"<td>".$record['category']."</td>";
 
echo"</tr>";
  }

echo "</table>";




echo '


</div>




</div>



















</div>







';




}
else
{
include 'content2.php';
$content=$content2;
}



echo ($bottom);

}
else
{
echo("Hi");

}
}
else
{
echo("Please Login First");
echo ("<script>window.location.replace('login.php');</script>");

}


?>