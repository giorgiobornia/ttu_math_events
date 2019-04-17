 <?php

 //library
 $model_path = "../../../../seminars_model/"; //folder where the model class is
 
 include($model_path . "./src/php/functions.php");
 
//application
 include("../../../src/php/ttu_math_seminars.php");
 
 $topic = 'AppliedMath';
 $year = '2018';
 $semester = 'fall';

 
 Seminars::generate_seminar_page_by_topic($model_path, 
                                          ttu_math_seminars::$institution, 
                                          ttu_math_seminars::$department,  
                                          $topic, 
                                          $year, 
                                          $semester,
                                          ttu_math_seminars::$icon_in_toolbar,
                                          ttu_math_seminars::$discipline_array); 
 
 ?>
