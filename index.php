 <?php
 
 //library
$relative_path_to_app = './';

$relative_path_to_library = "../seminars_lib/";

 include($relative_path_to_library . "./src/php/functions.php");

//application
 include($relative_path_to_app . './src/php/ttu_math_seminars.php');
 
 $icon_in_toolbar = $relative_path_to_app . ttu_math_seminars::$icon_in_toolbar;

 
 $year = 2019;
 $semester = "spring"; //lowercase for the folder names
 $month_begin = 4;
 $day_begin = 2;
 $month_end = 4;
 $day_end = 7;
                                         
  Seminars::generate_seminar_page_list(ttu_math_seminars::$discipline_array);

 ?>
 
