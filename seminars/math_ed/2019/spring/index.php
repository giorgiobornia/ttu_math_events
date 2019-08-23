 <?php
 
 //library
 $relative_path_to_lib = "../../../../../colloquia_and_seminars_lib/";

 include_once($relative_path_to_lib . "./src/php/functions.php");  //this is the include that works

 //application-specific
 $relative_path_to_app = '../../../../';

 include_once($relative_path_to_app . './src/php/ttu_math_seminars.php');
 
 $filename = __FILE__;
  
 ttu_math_seminars::seminar_webpage($filename, $relative_path_to_app, $relative_path_to_lib, ttu_math_seminars::$seminar_container, ttu_math_seminars::$seminar_container, ttu_math_seminars::$colloquium_container);
 
 
 ?>
