 <?php
 
 //library
 $library_path = "../seminars_lib/";

 include($library_path . "./src/php/functions.php");

//application
$relative_path_to_app = './';

            include($relative_path_to_app . './src/php/ttu_math_seminars.php');
  $icon_in_toolbar = $relative_path_to_app . ttu_math_seminars::$icon_in_toolbar;

 
 $year = 2019;
 $semester = "spring"; //lowercase for the folder names
 $month_begin = 4;
 $day_begin = 2;
 $month_end = 4;
 $day_end = 7;

///@todo how come it doesn't work from here? 
//  Seminars::generate_all_seminars_page_by_time_range($library_path, 
//                                          ttu_math_seminars::$institution,
//                                          ttu_math_seminars::$department,
//                                          $icon_in_toolbar, 
//                                          $year,
//                                          $semester, 
//                                          $month_begin, 
//                                          $day_begin, 
//                                          $month_end,
//                                          $day_end,
//                                          ttu_math_seminars::$discipline_array);
                                         
                                         
  Seminars::generate_seminar_page_list(ttu_math_seminars::$discipline_array);

 ?>
 
