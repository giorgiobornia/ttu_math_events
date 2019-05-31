 <?php
 
 //library
 $relative_path_to_app = '../../../../';
 $relative_path_to_library = "../../../../../colloquia_and_seminars_lib/";
 
 include($relative_path_to_library . "./src/php/functions.php");
 
 //application-specific
 include($relative_path_to_app . './src/php/ttu_math_seminars.php');
 
 $icon_in_toolbar = $relative_path_to_app . ttu_math_seminars::$icon_in_toolbar;
 
 $array = Seminars::get_discipline_year_semester(__FILE__);
 
//  $folder_transl = array(
//  $array[0] => ttu_math_seminars::$discipline_array[$array[0]]
//  );
 
 Seminars::generate_seminar_page_by_topic_year_semester($relative_path_to_library,
                                                        ttu_math_seminars::$math_server_url_base,
                                                        $relative_path_to_app,
                                                        ttu_math_seminars::$are_input_files_local,
                                                        ttu_math_seminars::$institution,
                                                        ttu_math_seminars::$department,
                                                        $array,
                                                        $icon_in_toolbar,
                                                        ttu_math_seminars::$discipline_array
                                                        ); 
 
 ?>
