 <?php
 
 //library
$relative_path_to_app = '../../../';

$relative_path_to_library = "../../../../colloquia_and_seminars_lib/";

 include($relative_path_to_library . "./src/php/functions.php");

//application
 include($relative_path_to_app . './src/php/ttu_math_seminars.php');
 
 $icon_in_toolbar = $relative_path_to_app . ttu_math_seminars::$icon_in_toolbar;

 $filename = __FILE__;
 
 $all_schemes = array();
 ttu_math_seminars::push_all_schemes($all_schemes);
  
 Seminars::generate_page_with_all_weeks_list_wrapper($filename,
                                                     $relative_path_to_library,
                                                     $icon_in_toolbar,
                                                     ttu_math_seminars::$math_server_url_base, $relative_path_to_app, ttu_math_seminars::$are_input_files_local,
                                                     ttu_math_seminars::$department,
                                                     ttu_math_seminars::$institution,
                                                     $all_schemes);

?>
