<?php


$heading_variable='Upload Your File.';


include 'heading1.php';
include 'heading2.php';


$heading=$heading1.$heading_variable.$heading2;








$content='


<div class="form_wrapper">
<div align="center" class="login_container">
<form action="upload_file.php" method="post" enctype="multipart/form-data">
<h1>
Select files: <input type="file" name="my_file" id="my_file" ></br></br>


<select name="category">
<option value="Nature">Nature</option>
<option value="Potrait">Potrait</option>
<option value="Art">Art</option>
<option value="Unknown">Unknown</option>

</select>

<input type="text" name="my_file_name" placeholder="Enter custom file name">
<input type="submit" class="submit_text" value="submit">

</h1>
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