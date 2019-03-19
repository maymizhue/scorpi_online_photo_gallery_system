<?php


session_start();


$heading_variable='Login';

include 'heading1.php';
include 'heading2.php';


$heading=$heading1.$heading_variable.$heading2;







$content='<div class="form_wrapper">

<div class="logo_top">
<img src="pictures/scorpi_logo.png"/ class="scorpi_logo">

</div>


<div class="login_container">




<form action="login_check.php" method="post">


<p>Login</p>


<label for="user_name">
Username
</label></br>
<input type="text" placeholder="Enter username" name="user_name" required>

</br>
<label for="user_password">
Password
</label></br>
<input type="password" placeholder="Enter Password" name="user_password" required>


</br>
<a href="forgot_password.html">Forgot Password?</a>

</br>
</br>
<button type="submit" class="button-1">Login</button>
<label>
<input type="checkbox" checked="checked" name="remember">
Remember me
</label>
</br>
<a href="registration.php">Not registered?</a>
</form>


</div>
</div>

';




include 'bottom1.php';


$bottom=$bottom1;




echo ($heading);
echo ($content);
echo ($bottom);

if($_SESSION['wrong_credentials']==1)
{
echo ("<script>alert('Wrong Credentials')</script>");

$_SESSION['wrong_credentials']=0;
}


?>