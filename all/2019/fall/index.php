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
  $last_monday_month = 12;
  $last_monday_day = 2;
  
  
 $array_coords = Seminars::get_discipline_year_semester(__FILE__);
    
 $semester = $array_coords[0];
 $year = $array_coords[1];
 $discipline = $array_coords[2];

 
 $week_month_day_auto = Seminars::generate_initial_week_days($year, $first_monday_month, $first_monday_day, $last_monday_month, $last_monday_day);

//  print_r($week_month_day_auto);
/*

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
                                                   $week_month_day_auto,
                                                   $only_seminars,
                                                   $colloquia); */
  
  Seminars::set_html_head($relative_path_to_library, $title, $icon_in_toolbar);

  echo '<body>';
  
  Seminars::navigation_bar(ttu_math_seminars::$math_server_url_base, $relative_path_to_app, ttu_math_seminars::$are_input_files_local, $discipline, ttu_math_seminars::$discipline_array, ttu_math_seminars::$department);

  Seminars::main_banner($title, ttu_math_seminars::$department, ttu_math_seminars::$institution);  
  
  

  
   echo '<br/>';
   echo '&nbsp Colloquia and seminars will resume Fall 2019. Have a great summer!';
   echo '<br/>';
    
    echo '<h3> &nbsp <a href="../spring/">  <strong> Spring 2019  </strong> </a> </h3>';
    
    
    
//        echo '<div>';
// 
//     echo '<script>';
//     echo '  (function() {
//     var cx = \'014955510460471337591:k1n3evty6rc\';
//     var gcse = document.createElement(\'script\');
//     gcse.type = \'text/javascript\';
//     gcse.async = true;
//     gcse.src = \'https://cse.google.com/cse.js?cx=\' + cx;
//     var s = document.getElementsByTagName(\'script\')[0];
//     s.parentNode.insertBefore(gcse, s);
//   })();';
//   
//     echo '</script>';
//     echo '<gcse:search></gcse:search>';
//     
//     
//      echo '</div>';
     //I believe that the problem is that the content is taken from external files while he searches through only the linked pages
     
    
  echo '</body>';

 ?>
 
