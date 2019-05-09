 <?php
 
 //library
$relative_path_to_app = './';

$relative_path_to_library = "../colloquia_and_seminars_lib/";

 include($relative_path_to_library . "./src/php/functions.php");

//application
 include($relative_path_to_app . './src/php/ttu_math_seminars.php');
 
 $icon_in_toolbar = $relative_path_to_app . ttu_math_seminars::$icon_in_toolbar;
 
 $title = 'Colloquia and Seminars';

  Seminars::set_html_head($relative_path_to_library, $title, $icon_in_toolbar);

  echo '<body>';
  
  
  Seminars::main_banner($title, ttu_math_seminars::$department, ttu_math_seminars::$institution);  
  
    echo '<br/>';
    
    echo '<h3> <strong> Weekly colloquia and seminars </strong> </h3>';
    
    echo '<br/>';
    
    
    echo '<a href="./by_week/">Colloquia and seminars of this week</a>';
    
    echo '<br/>';
      
    echo '<br/>';
    
    echo '<h3> <strong> Colloquia </strong> </h3>';
    
    echo '<br/>';
    
    echo '<a href="./colloquia/"> Colloquia of the current semester</a>';
    
    echo '<br/>';
    
  Seminars::generate_seminar_page_list(ttu_math_seminars::$discipline_array);
  
  echo '</body>';

 ?>
 
