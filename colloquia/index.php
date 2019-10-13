 <?php
 
 //library
 $library_path = "../../colloquia_and_seminars_lib/";

 include($library_path . "./src/php/functions.php");
 
 //application
 $relative_path_to_app = '../';

 include($relative_path_to_app . './src/php/ttu_math_events.php');

 
 Events::redirect_page(ttu_math_events::$current_year, ttu_math_events::$current_semester);
 

 ?>
