 <?php
 
 $sem_mydepth = "../../../";
 
 include($sem_mydepth .  "../seminars_model/src/php/functions.php");

 Seminars::generate_seminar_page_by_topic($sem_mydepth); 
 
 ?>
