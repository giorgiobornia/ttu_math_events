 <?php
 
 //library
$relative_path_to_app = '../../../';

$relative_path_to_library = "../../../../colloquia_and_seminars_lib/";

 include($relative_path_to_library . "./src/php/functions.php");

//application
 include($relative_path_to_app . './src/php/ttu_math_seminars.php');
 
 $icon_in_toolbar = $relative_path_to_app . ttu_math_seminars::$icon_in_toolbar;
 
 $title = 'Colloquia and Seminars';
 

  $first_monday_month = 8;
  $first_monday_day = 26;
  $last_monday_month = 8;
  $last_monday_day = 26;
  
  
 $array_coords = Seminars::get_discipline_year_semester(__FILE__);
    
 $semester = $array_coords[0];
 $year = $array_coords[1];
 $discipline = $array_coords[2];  //this will be 'all'
    
    
 $week_month_day_auto = Seminars::generate_initial_week_days($year, $first_monday_month, $first_monday_day, $last_monday_month, $last_monday_day);

//to generate all semester files 
//    Seminars::generate_initial_week_files($year, $first_monday_month, $first_monday_day, $last_monday_month, $last_monday_day,'../../../src/sh/week_file.php','./week/');

   $is_seminar_colloquium_all = 2;

    
 Seminars::generate_page_with_all_weeks_list($relative_path_to_library,
                                             $title,
                                             $icon_in_toolbar,
                                             ttu_math_seminars::$math_server_url_base,
                                             $relative_path_to_app,
                                             ttu_math_seminars::$are_input_files_local,
                                             $discipline,
                                             ttu_math_seminars::$discipline_array,
                                             ttu_math_seminars::$colloquium_array,
                                             ttu_math_seminars::$seminar_container,
                                             ttu_math_seminars::$colloquium_container,
                                             $is_seminar_colloquium_all,
                                             ttu_math_seminars::$department,
                                             ttu_math_seminars::$institution,
                                             $year,
                                             $semester,
                                             $week_month_day_auto);
                                             
 ?>
 
