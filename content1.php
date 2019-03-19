


<?php


$content1='
<div class="form_wrapper">
<div class=\'login_container\'>

<script language="JavaScript" type="text/javascript">
<!--
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
//-->
</script>

     <button onClick="toggleDiv(\'display_div\');">Display</button>

<div id="display_div" style = "display:none">
     
<a href="display_module.php" target="_blank">Retrive data:<a>


</div>


 <button onClick="toggleDiv(\'add_div\');">Add</button>

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

<td><input type="submit" name="Submit" value="Add"></td>

</tr>

</table>

</form>


     </div>




</div>
</div>


';


?>