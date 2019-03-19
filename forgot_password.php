<?php
$heading_variable='Forgot Credentials?';

include 'heading1.php';

include 'heading2.php';



$heading=$heading1.$heading_variable.$heading2;




$content='<div class="form_wrapper">

<div class="logo_top">
<img src="pictures/scorpi_logo.png"/ class="scorpi_logo">

</div>


<div class="login_container">

<form action="action_page.php" method="post">

<p>Reset Password</p>


</br>
<label for="forgot">
Username
</label></br>
<input type="text" placeholder="Enter username"u_or_email" required>


</br>
</br>
</br>
<button type="submit" class="button-1">Reset</button>
<label>

<p>Remembered Your Password?<a href="login.php">Try again.</a></p>

</form>


</div>
</div>



';

















include 'bottom1.php';


$bottom=$bottom1;



echo ($heading);
echo ($content);
echo ($bottom);

?>