 <?php

  class ttu_math_seminars {
 
 public static  $institution = 'Texas Tech University';
 
 public static  $department = array('Department of Mathematics and Statistics', 'https://www.depts.ttu.edu/math/'); ///@todo it seems like you cannot initialize static variables using other static variables
 
 public static  $icon_in_toolbar = './src/img/favicon.ico';


 public static  $math_server_url_base = 'http://www.math.ttu.edu/colloquia_and_seminars/';
 public static  $are_input_files_local = true;

 public static $discipline_array = array(
 'algebra_and_number_theory' => 'Algebra and Number Theory', 
 'analysis'                  => 'Analysis', 
 'applied_math'              => 'Applied Mathematics',
 'biomath'                   => 'Biomathematics',
 'geometry'                  => 'Geometry',
 'image_analysis'            => 'Image Analysis',
 'logic_topology'            => 'Logic-Topology',
 'math_club'                 => 'Math Club',
 'math_ed'                   => 'Mathematics Education',
 'prep_for_profession'       => 'Preparation for the Profession',
 'real_algebraic_geometry'   => 'Real-Algebraic Geometry', 
 'statistics'                => 'Statistics',
 'colloquia'                 => 'Colloquia'
 );
 
  public static  $current_year = 2019;
  public static  $current_semester = 'spring';

 }
 
 
 ///@todo write a function that checks that the directories of the inputs are there

 ?>
