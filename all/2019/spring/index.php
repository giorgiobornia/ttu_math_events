 <?php
 
 //library
$relative_path_to_app = '../../../';

$relative_path_to_library = "../../../../colloquia_and_seminars_lib/";

 include($relative_path_to_library . "./src/php/functions.php");

//application
 include($relative_path_to_app . './src/php/ttu_math_seminars.php');
 
 $icon_in_toolbar = $relative_path_to_app . ttu_math_seminars::$icon_in_toolbar;
 
 $title = 'Colloquia and Seminars';
 $discipline = 'all';
 
 $year = '2019';
 $semester = 'spring';

 ///@todo create a function that generates all Mondays
 $week_month_day_begin = array(
    array(4, 29),
    array(4, 22),
    array(4, 15),
    array(4, 8),
    array(4, 1),
    array(3, 25),
    array(3, 18),
    array(3, 11),
    array(3, 4),
    array(2, 25),
    array(2, 18),
    array(2, 11),
    array(2, 4),
    array(1, 28),
    array(1, 21)
    );
    
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
                                                   ttu_math_seminars::$department,
                                                   ttu_math_seminars::$institution,
                                                   $year,
                                                   $semester,
                                                   $week_month_day_begin,
                                                   $only_seminars,
                                                   $colloquia);
 
 
 ?>
 
