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
 'geometry'                  => 'Geometry',
 'image_analysis'            => 'Image Analysis',
 'logic_topology'            => 'Logic and Topology',
 'math_club'                 => 'Math Club',
 'math_ed'                   => 'Mathematics Education',
 'prep_for_profession'       => 'Preparation for the Profession',
 'real_algebraic_geometry'   => 'Real-Algebraic Geometry', 
 'statistics'                => 'Statistics'
);
 
  public static $colloquium_array = array(
  'colloquia'                 => 'Colloquia' //we should separate this, so far we know that it is the last one //somewhere there is a 12 that we have to get rid of...
 );
 
 
  public static  $current_year = 2019;
  public static  $current_semester = 'spring';
  
  
  
  //====================================
  
   public static function seminar_webpage($filename, $relative_path_to_app, $relative_path_to_library) {
   

   $array = Seminars::get_discipline_year_semester($filename);
 
    
 $icon_in_toolbar = $relative_path_to_app . ttu_math_seminars::$icon_in_toolbar;
  
//  $folder_transl = array(
//  $array[0] => ttu_math_seminars::$discipline_array[$array[0]]
//  );
 
 $event_container_remote_path_prefix = ttu_math_seminars::$math_server_url_base . 'seminars/';
 
 $event_container_local_path_prefix = $relative_path_to_app . 'seminars/';
 
 Seminars::generate_seminar_page_by_topic_year_semester($relative_path_to_library,  //to find src/ in the library
 
                                                        $event_container_remote_path_prefix,
                                                        $event_container_local_path_prefix,
                                                        ttu_math_seminars::$are_input_files_local,
                                                        
                                                        ttu_math_seminars::$institution,
                                                        ttu_math_seminars::$department,
                                                        $array,
                                                        $icon_in_toolbar,
                                                        ttu_math_seminars::$discipline_array,
                                                        ttu_math_seminars::$colloquium_array
                                                        ); 
  
  }
  

 }
 
 
 ///@todo write a function that checks that the directories of the inputs are there

 ?>
