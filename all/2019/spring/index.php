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
  
  $discipline = 'all';
  
  Seminars::navigation_bar(ttu_math_seminars::$math_server_url_base, $relative_path_to_app, ttu_math_seminars::$are_input_files_local, $discipline, ttu_math_seminars::$discipline_array, ttu_math_seminars::$department);
  
  Seminars::main_banner($title, ttu_math_seminars::$department, ttu_math_seminars::$institution);  
  
    echo '<h2> &nbsp <strong> Spring 2019  </strong> </h2>';
    
    echo '<h3> &nbsp <strong> Colloquia and seminars by week </strong> </h3>';
    
    echo '<br/>';
    
    
    echo '&nbsp <a href="./week/4_29.php">Week of Monday, April 29</a>';    echo '<br/>';
    echo '&nbsp <a href="./week/4_22.php">Week of Monday, April 22</a>';    echo '<br/>';
    echo '&nbsp <a href="./week/4_15.php">Week of Monday, April 15</a>';    echo '<br/>';
    echo '&nbsp <a href="./week/4_8.php">Week of Monday, April 8</a>';    echo '<br/>';
    echo '&nbsp <a href="./week/4_1.php">Week of Monday, April 1</a>';    echo '<br/>';
    echo '&nbsp <a href="./week/3_25.php">Week of Monday, March 25</a>';    echo '<br/>';
    echo '&nbsp <a href="./week/3_18.php">Week of Monday, March 18</a>';    echo '<br/>';
    echo '&nbsp <a href="./week/3_11.php">Week of Monday, March 11</a>';    echo '<br/>';
    echo '&nbsp <a href="./week/3_4.php">Week of Monday, March 4</a>';    echo '<br/>';
    echo '&nbsp <a href="./week/2_25.php">Week of Monday, February 25</a>';    echo '<br/>';
    echo '&nbsp <a href="./week/2_18.php">Week of Monday, February 18</a>';    echo '<br/>';
    echo '&nbsp <a href="./week/2_11.php">Week of Monday, February 11</a>';    echo '<br/>';
    echo '&nbsp <a href="./week/2_4.php">Week of Monday, February 4</a>';    echo '<br/>';
    echo '&nbsp <a href="./week/1_28.php">Week of Monday, January 28</a>';    echo '<br/>';
    echo '&nbsp <a href="./week/1_21.php">Week of Monday, January 21</a>';    echo '<br/>';
    
      
    echo '<br/>';
    
    $array_in = ttu_math_seminars::$discipline_array;
    $array_out = array_splice($array_in, 0, 12);  ///@todo does this act on the input array? I want to pass a copy, not a reference
    
    $colloquia = 'colloquia';//ttu_math_seminars::$discipline_array[12];
    
  Seminars::generate_seminar_page_list($array_out, $colloquia);
  
  echo '</body>';

 ?>
 
