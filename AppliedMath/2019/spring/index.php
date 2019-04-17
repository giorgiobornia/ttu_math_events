 <?php
 
 $model_path = "../../../../seminars_model/"; //folder where the model class is
 
 include($model_path . "./src/php/functions.php");
 
 $institution = 'Texas Tech University';
 $department = 'Department of Mathematics and Statistics';
 $icon_in_toolbar = '../../../src/img/favicon.ico';
 
 $topic = 'AppliedMath';
 $year = '2019';
 $semester = 'spring';
  

 Seminars::generate_seminar_page_by_topic($model_path, $institution, $department,  $topic, $year, $semester, $icon_in_toolbar); 
 
 ?>
