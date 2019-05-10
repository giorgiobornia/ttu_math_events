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
    
    echo '<h3> &nbsp <strong> Weekly colloquia and seminars </strong> </h3>';
    
    echo '<br/>';
    
    
    echo '&nbsp <a href="./by_week/2019/spring/4_29_5_5.php">April 29 - May 5</a>';
    echo '<br/>';
    echo '&nbsp <a href="./by_week/2019/spring/4_22_4_28.php">April 22 - April 28</a>';
    echo '<br/>';
    echo '&nbsp <a href="./by_week/2019/spring/4_15_4_21.php">April 15 - April 21</a>';
    echo '<br/>';
      
    echo '<br/>';
    
    echo '<h3> &nbsp <strong> Colloquia </strong> </h3>';
    
    echo '<br/>';
    
    echo '&nbsp <a href="./colloquia/">Spring 2019</a>';
    
    echo '<br/>';
    
    $array_in = ttu_math_seminars::$discipline_array;
    $array_out = array_splice($array_in, 0, 12);  ///@todo does this act on the input array? I want to pass a copy, not a reference
    
  Seminars::generate_seminar_page_list($array_out);
  
  echo '</body>';

 ?>
 
