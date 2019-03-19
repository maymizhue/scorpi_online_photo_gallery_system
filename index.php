<?php


include ('config.php');



$heading_variable='<a id="design_scorpi">Scorpi</a>-Photo Gallery System';

include 'heading1.php';

include 'heading2.php';



$heading=$heading1.$heading_variable.$heading2;









include 'bottom1.php';

$bottom=$bottom1;



echo ($heading);



echo '<div id="hero-image">
<div class="wrapper">

<div class="picture_upload_div">
<h2>
Picture Upload
</h2>


<a href="upload.php" class="button-1">Get Started
</a>

</div>
</div>
</div>

<div id="primary-content" class="gallery_container">

<a class="picture_heading">Nature</a>
<div class="picture_group">
';

function get_display($category_check_variable)
{

include ('config.php');


$query="select * from published where category='$category_check_variable'";

$result = mysqli_query($mysqli,$query);
   
while($row=mysqli_fetch_array($result))
  { 
	$published_path=$row['published_name'];

echo '<img src="'.$published_path.'"
alt="pic1" style="width:100px;height:100px;">';

  }

}

get_display('Nature');






echo '</div>


<a class="picture_heading">Potrait</a>

<div class="picture_group">
';


get_display('Potrait');


echo '
</div>


<a class="picture_heading">ART</a>

<div class="picture_group">


';

get_display('ART');


echo '
</div>



<a class="picture_heading">Other</a>

<div class="picture_group">

';

get_display('Other');



echo '
</div>



</div>


<div id="cta">
<div class="wrapper">
<a href="#">Get Started</a>
</div>
</div>

';



echo ($bottom);


?>