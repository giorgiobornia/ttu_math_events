 <?php
 
 //library
$relative_path_to_app = '../../../';

$relative_path_to_library = "../../../../events_lib/";

 include($relative_path_to_library . "./src/php/functions.php");

//application
 include($relative_path_to_app . './src/php/ttu_math_events.php');
 
 $icon_in_toolbar = $relative_path_to_app . ttu_math_events::$icon_in_toolbar;

 $filename = __FILE__;
 
 $all_schemes = array();
 ttu_math_events::push_all_schemes($all_schemes);
  
 Events::generate_page_with_all_weeks_list_wrapper($filename,
                                                     $relative_path_to_library,
                                                     $icon_in_toolbar,
                                                     ttu_math_events::$math_server_url_base, $relative_path_to_app, ttu_math_events::$are_input_files_local,
                                                     ttu_math_events::$department,
                                                     ttu_math_events::$institution,
                                                     $all_schemes);
 
?>
