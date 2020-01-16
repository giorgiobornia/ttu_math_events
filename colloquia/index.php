 <?php

 //library
 $library_path = "../../events_lib/";
 include($library_path . "./src/php/functions.php");
 
 //application
 $relative_path_to_app = '../';
 include($relative_path_to_app . './src/php/ttu_math_events.php');


$year     = ttu_math_events::$current_year;
$semester = ttu_math_events::$current_semester;

$redir_path = './'  . $year .'/' . $semester . '/';

  Events::redirect_page_with_path($redir_path);
  
 ?>
