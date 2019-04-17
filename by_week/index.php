 <?php
 
 //library
 $model_path = "../../seminars_model/"; //folder where the model class is

 include($model_path . "./src/php/functions.php");

//application
 $title_in_toolbar = 'Seminars by week';
  $icon_in_toolbar = '../src/img/favicon.ico';
            include('../src/php/ttu_math_seminars.php');

 $institution = 'Texas Tech University';
 $department = 'Department of Mathematics and Statistics';
 
 $year = 2019;
 $semester = "spring"; //lowercase for the folder names
 $month_begin = 4;
 $day_begin = 2;
 $month_end = 4;
 $day_end = 7;

 Seminars::generate_seminar_page_by_week($model_path, 
                                         $institution,
                                         $department,
                                         $title_in_toolbar, 
                                         $icon_in_toolbar, 
                                         $year,
                                         $semester, 
                                         $month_begin, 
                                         $day_begin, 
                                         $month_end,
                                         $day_end,
                                         ttu_math_seminars::$discipline_array);

 ?>
