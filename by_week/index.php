 <?php
 
 $model_path = "../../seminars_model/"; //folder where the model class is

 include($model_path . "./src/php/functions.php");

 $title_in_toolbar = 'Seminars by week';
 
 
 Seminars::set_html_head($model_path, $title_in_toolbar);
 

 
 $year = 2019;
 $semester = "spring"; //lowercase for the folder names
 $month_begin = 4;
 $day_begin = 2;
 $month_end = 4;
 $day_end = 7;

 Seminars::generate_seminar_page_by_week($year, $semester, $month_begin, $day_begin, $month_end, $day_end);

 ?>
