 <?php
 
 //library
$relative_path_to_app = '../../../';

$relative_path_to_library = "../../../../colloquia_and_seminars_lib/";

 include($relative_path_to_library . "./src/php/functions.php");

//application
 include($relative_path_to_app . './src/php/ttu_math_seminars.php');
 
 $icon_in_toolbar = $relative_path_to_app . ttu_math_seminars::$icon_in_toolbar;
 
 $title = 'Colloquia and Seminars';

  Seminars::set_html_head($relative_path_to_library, $title, $icon_in_toolbar);

  echo '<body>';
  
  
  Seminars::main_banner($title, ttu_math_seminars::$department, ttu_math_seminars::$institution);  
  
   echo '<br/>';
   echo '&nbsp Colloquia and seminars will resume Fall 2019. Have a great summer!';
   echo '<br/>';
    
    echo '<h2> &nbsp <a href="../spring/">  <strong> Spring 2019  </strong> </a> </h2>';
    
  echo '</body>';

 ?>
 
