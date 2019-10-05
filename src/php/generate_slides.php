  <?php
  
//- run this script automatically every Friday afternoon

  require './ttu_math_seminars.php'; 

  $relative_path_to_apps = '../../'; 
  


$month_begin = 10;
$day_begin = 7;
$month_end = 10;
$day_end = 14;

Seminars::generate_pdf_slides_by_time_range(ttu_math_seminars::$math_server_url_base,
                                            $relative_path_to_apps,
                                            ttu_math_seminars::$are_input_files_local,
                                            ttu_math_seminars::$institution,
                                            ttu_math_seminars::$department,
                                            ttu_math_seminars::$current_year, ttu_math_seminars::$current_semester, $month_begin, $day_begin, $month_end, $day_end, 
                                            ttu_math_seminars::$discipline_array,
                                            ttu_math_seminars::$colloquium_array,
                                            ttu_math_seminars::$seminar_container,
                                            ttu_math_seminars::$colloquium_container);
  
  
  ?>
