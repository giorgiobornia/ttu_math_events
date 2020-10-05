 <?php
 
 
 ///@todo do all of this in a LIBRARY FUNCTIONNNNNNNNNNNNNNNNNNNNN
 ///@todo make this a LIBRARY FUNCTION

 //library

$relative_path_to_library = "../../../../events_lib/";

 include($relative_path_to_library . "./src/php/functions.php");

//application
$relative_path_to_app = '../../../';

 include($relative_path_to_app . './src/php/ttu_math_events.php');
 
 $icon_in_toolbar = $relative_path_to_app . ttu_math_events::$icon_in_toolbar;
 
 $title = 'Events';
 
  
  
 $array_coords = Events::get_discipline_year_semester(__FILE__);
    
 $semester = $array_coords[0];
 $year = $array_coords[1];
 $discipline = $array_coords[2];

 
 $is_seminar_colloquium_all = 2;
  
  Events::set_html_head($relative_path_to_library, $title, $icon_in_toolbar);

  echo '<body>';
  
  Events::navigation_bar($relative_path_to_library,
                           ttu_math_events::$math_server_url_base,
                           $relative_path_to_app,
                           ttu_math_events::$are_input_files_local, 
                           $discipline, 
                           $is_seminar_colloquium_all, 
                           ttu_math_events::$department);

  Events::main_banner($title, ttu_math_events::$department, ttu_math_events::$institution);  
  
  

  
   echo '<br/>';
   echo '&nbsp Colloquia and seminars will resume next semester. Have a great break!';
   echo '<br/>';
    
//     echo '<h3> &nbsp <a href="../spring/">  <strong> Spring 2019  </strong> </a> </h3>';
    
    
    
  echo '</body>';

 ?>
 
