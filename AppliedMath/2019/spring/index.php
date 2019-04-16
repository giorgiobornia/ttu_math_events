 <?php
 
 $institution = 'Texas Tech University';
 $department = 'Department of Mathematics and Statistics';

 $model_path = "../../../../seminars_model/"; //folder where the model class is
 
 include($model_path . "src/php/functions.php");

 Seminars::generate_seminar_page_by_topic($model_path, $institution, $department); 
 
 ?>
