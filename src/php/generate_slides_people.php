 
<?php 

// include($_SERVER['DOCUMENT_ROOT']."includes/people.php");
include("../../../events_lib/src/php/functions.php");

$dsn      = "mysql:host=webwork.math.ttu.edu; dbname=deptweb";
$username = "readdeptweb";
$password = "byrt82fw";

  echo Events::render('Control', $dsn, $username, $password);
  
  $name_first = "Giorgio";
  $name_last  = "Bornia";
  $bio = "Hello world";
  $image_name = "blank_face.png";
  
  Events::single_latex_pdf_slide_person($dsn, $username, $password, $name_first, $name_last, $bio, $image_name);

?>
