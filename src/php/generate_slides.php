  <?php
  
//- run this script automatically every Friday afternoon
// syntax: php generate_slides.php


  require './ttu_math_events.php'; 

  $relative_path_to_apps = '../../'; 
  
  $all_schemes = array();
  ttu_math_events::push_all_schemes($all_schemes);
 
///@todo do a function to obtain the current week automatically
// $year = ttu_math_events::$current_year;
// $semester = ttu_math_events::$current_semester;
$year = 2019;
$semester = 'fall';
$month_begin = 12;
$day_begin = 2;
$month_end = 12;
$day_end = 8;

Events::generate_pdf_slides_by_time_range(ttu_math_events::$math_server_url_base,
                                            $relative_path_to_apps,
                                            ttu_math_events::$are_input_files_local,
                                            ttu_math_events::$institution,
                                            ttu_math_events::$department,
                                            $year, $semester, $month_begin, $day_begin, $month_end, $day_end, 
                                            $all_schemes);
  
  
  ?>
