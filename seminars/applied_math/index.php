 <?php
 
 $relative_path_to_app = '../../';
 $library_path = "../../../colloquia_and_seminars_lib/";

 //library
 include($library_path . "./src/php/functions.php");
 
 //application
 include($relative_path_to_app . './src/php/ttu_math_seminars.php');

 
 Seminars::redirect_page(ttu_math_seminars::$current_year, ttu_math_seminars::$current_semester);
 

 ?>
