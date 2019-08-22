 <?php
 
 //library
$relative_path_to_app = '../../../';

$relative_path_to_library = "../../../../colloquia_and_seminars_lib/";

 include($relative_path_to_library . "./src/php/functions.php");

//application
 include($relative_path_to_app . './src/php/ttu_math_seminars.php');
 
 $icon_in_toolbar = $relative_path_to_app . ttu_math_seminars::$icon_in_toolbar;
 
 $title = 'Colloquia and Seminars';
 

  $first_monday_month = 1;
  $first_monday_day = 21;
  $last_monday_month = 4;
  $last_monday_day = 29;
  
  
 $array_coords = Seminars::get_discipline_year_semester(__FILE__);
    
 $semester = $array_coords[0];
 $year = $array_coords[1];
 $discipline = $array_coords[2];
    
    
 $week_month_day_auto = Seminars::generate_initial_week_days($year, $first_monday_month, $first_monday_day, $last_monday_month, $last_monday_day);

//to generate all semester files 
//    Seminars::generate_initial_week_files($year, $first_monday_month, $first_monday_day, $last_monday_month, $last_monday_day,'../../../src/sh/week_file.php','./week/');

    $only_seminars_num = count(ttu_math_seminars::$discipline_array) - 1;
    $array_in = ttu_math_seminars::$discipline_array;
    $only_seminars = array_splice($array_in, 0, $only_seminars_num);  ///@todo does this act on the input array? I want to pass a copy, not a reference
    
    $newArray = array_keys(ttu_math_seminars::$discipline_array);
    
    $colloquia = $newArray[$only_seminars_num]; //the last component is 'colloquia'
    
   
 Seminars::generate_page_with_all_weeks_list($relative_path_to_library, 
                                                   $title,
                                                   $icon_in_toolbar,
                                                   ttu_math_seminars::$math_server_url_base,
                                                   $relative_path_to_app,
                                                   ttu_math_seminars::$are_input_files_local,
                                                   $discipline,
                                                   ttu_math_seminars::$discipline_array,
                                                   ttu_math_seminars::$colloquium_array,
                                                   ttu_math_seminars::$department,
                                                   ttu_math_seminars::$institution,
                                                   $year,
                                                   $semester,
                                                   $week_month_day_auto,
                                                   $only_seminars,
                                                   $colloquia); 
 ?>
 
