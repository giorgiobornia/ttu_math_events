 <?php
 
 //library
$relative_path_to_apps = '../../../../';

$relative_path_to_library = "../../../../../colloquia_and_seminars_lib/";

 include($relative_path_to_library . "./src/php/functions.php");

//application
 include($relative_path_to_apps . './src/php/ttu_math_events.php');
 
  $icon_in_toolbar = $relative_path_to_apps . ttu_math_events::$icon_in_toolbar;
  
  $filename = __FILE__;
  
  
  $all_schemes = array();
  ttu_math_events::push_all_schemes($all_schemes);

  
  Events::generate_page_with_all_seminars_by_time_range_wrapper($filename,
                                                                  $relative_path_to_library,
                                                                  ttu_math_events::$math_server_url_base,
                                                                  $relative_path_to_apps,
                                                                  ttu_math_events::$are_input_files_local,
                                                                  ttu_math_events::$institution,
                                                                  ttu_math_events::$department,
                                                                  $icon_in_toolbar,
                                                                  $all_schemes
                                                                  );

 ?>
