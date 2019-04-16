 <?php
 
 $model_path = "../../../../seminars_model/"; //folder where the model class is
 
 include($model_path . "src/php/functions.php");
 
 $institution = 'Texas Tech University';
 $department = 'Department of Mathematics and Statistics';
 $toolbar_image = '../../../src/img/favicon.ico';
  

 Seminars::generate_seminar_page_by_topic($model_path, $institution, $department, $toolbar_image); 
 
 ?>
