<?php

$heading_variable='Registration';


include 'heading1.php';
include 'heading2.php';


$heading=$heading1.$heading_variable.$heading2;









$content='
<div class="form_wrapper">



<div class="logo_top">
<img src="pictures/scorpi_logo.png"/ class="scorpi_logo">

</div>

<div class="login_container">


<form action="registration_add.php" method="post">


<p class="container_heading">Registration Form</p>

</br>

<label for="user_name">
Username
</label></br>
<input type="text" placeholder="Enter username" name="user_name" required>

</br>
<label for="user_email">
User Email
</label></br>
<input type="email" placeholder="Enter Email" name="user_email" required>



</br>
<label for="user_password">
Password
</label></br>
<input type="password" placeholder="Enter Password" name="user_password" required>

</br>
<label for="user_confirm_password">
Confirm Password
</label></br>
<input type="password" placeholder="Confirm Password" name="user_confirm_password" required>

</br>

<label for="user_recovery_email">
Recovery Email
</label></br>
<input type="email" placeholder="Recovery Email" name="user_recovery_email" required>


</br>


<p>By Creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>


</br>
<button type="submit" class="button-1">Register</button>
<label>


<div class="signin">

<p>
Already have an account?<a href="login.html">Sign in</a>.
</p>


</div>


</form>



</div>



</div>



<script>
function validate_email(inputText)


</script>

';




include 'bottom1.php';


$bottom=$bottom1;



echo ($heading);
echo ($content);
echo ($bottom);


?>