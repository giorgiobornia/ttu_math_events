 <?php
 
 //library
 $library_path = "../../../../seminars_lib/";
 
 include($library_path . "./src/php/functions.php");
 
 //application-specific
 include("../../../src/php/ttu_math_seminars.php");
 
 $icon_in_toolbar = '../../../' . ttu_math_seminars::$icon_in_toolbar;
 
 $array = Seminars::get_discipline_year_semester(__FILE__);
 

 Seminars::generate_seminar_page_by_topic_year_semester($library_path,
                                          ttu_math_seminars::$institution,
                                          ttu_math_seminars::$department,
                                          $array,
                                          $icon_in_toolbar,
                                          ttu_math_seminars::$discipline_array); 
 
 ?>
