 <?php

 
  $relative_path_to_library_2 = '../../../colloquia_and_seminars_lib/';  //from where it is included!!!
 
 include_once($relative_path_to_library_2 . './src/php/functions.php');
 

    
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
 'geometry'                  => 'Topology and Geometry',
 'image_analysis'            => 'Image Analysis',
 'logic_topology'            => 'Logic-Topology',
 'math_club'                 => 'Math Club',
 'math_ed'                   => 'Mathematics Education',
 'prep_for_profession'       => 'Preparation for the Profession',
 'quantum_homotopy'          => 'Quantum Homotopy',
 'real_algebraic_geometry'   => 'Real-Algebraic Geometry', 
 'statistics'                => 'Statistics'
);
 
  public static $colloquium_array = array(
  'colloquia'                 => 'Colloquia',
  'meetings_and_conferences'  => 'Meetings and Conferences'
 );
 
 
 public static $seminar_container = 'seminars';
 public static $colloquium_container = '';

 
  public static  $current_year = 2019;
  public static  $current_semester = 'fall';
  
  
  
  //====================================
  
   public static function seminar_webpage($filename, $relative_path_to_app, $relative_path_to_library, $is_seminar_colloquium, $seminar_container, $colloquium_container) {
   
   
//    $is_seminar_colloquium: 0 seminar, 1 colloquium, 2 all



   $array = Seminars::get_discipline_year_semester($filename);
 
    
 $icon_in_toolbar = $relative_path_to_app . ttu_math_seminars::$icon_in_toolbar;
  

 
 $event_container_remote_path_prefix = ttu_math_seminars::$math_server_url_base; //no final slash here!!!
 
 $event_container_local_path_prefix = $relative_path_to_app; //no final slash here!!!

 
 Seminars::generate_seminar_page_by_topic_year_semester($relative_path_to_library,  //to find src/ in the library
 
                                                        $event_container_remote_path_prefix,
                                                        $event_container_local_path_prefix,
                                                        ttu_math_seminars::$are_input_files_local,
                                                        
                                                        ttu_math_seminars::$institution,
                                                        ttu_math_seminars::$department,
                                                        $array,
                                                        $icon_in_toolbar,
                                                        ttu_math_seminars::$discipline_array,
                                                        ttu_math_seminars::$colloquium_array,
                                                        ttu_math_seminars::$seminar_container,
                                                        ttu_math_seminars::$colloquium_container,
                                                        $is_seminar_colloquium
                                                        ); 
  
  }
  

 }
 
 
 ///@todo write a function that checks that the directories of the inputs are there

 ?>
