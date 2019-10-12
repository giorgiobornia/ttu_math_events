 <?php

 
  $relative_path_to_library_2 = '../../../colloquia_and_seminars_lib/';  //from where it is included!!!
 
 include_once($relative_path_to_library_2 . './src/php/functions.php');
 

    
  class ttu_math_seminars {
 
 public static  $institution = 'Texas Tech University';
 
 public static  $department = array('Department of Mathematics and Statistics', 'https://www.depts.ttu.edu/math/'); ///@todo it seems like you cannot initialize static variables using other static variables
 
 public static  $icon_in_toolbar = './src/img/favicon.ico';

 public static  $base_folder = 'colloquia_and_seminars';
 
 public static  $math_server_url_base = 'http://www.math.ttu.edu/colloquia_and_seminars/';
 public static  $are_input_files_local = true;


  public static  $current_year = 2019;
  public static  $current_semester = 'fall';


// --------------------------------------------- 
// ------ List all trees here ---------------- 
// --------------------------------------------- 
//these schemes are 1-to-1 with the DIRECTORY structure

//each scheme is an associative array with 1 outer pair only
// Here each scheme can have an arbitrary depth.
// The constraint is that all branches of a given scheme must have the same depth

 public static $colloquia_tree = array(
  'colloquia'                 => /*array(*/'Colloquia'/*)*/  ///@todo the leaves must be without "array()"
 );

 
 public static $seminars_tree = array(
  'seminars' =>  array(  'Seminars',   array( 'algebra_and_number_theory' => 'Algebra and Number Theory', 
                                              'analysis'                  => 'Analysis', 
                                              'applied_math'              => 'Applied Mathematics',
                                              'biomath'                   => 'Biomathematics',
                                              'geometry'                  => 'Topology and Geometry',
                                              'logic_topology'            => 'Logic-Topology',
                                              'math_club'                 => 'Math Club',
                                              'math_ed'                   => 'Mathematics Education',
                                              //  'prep_for_profession'       => 'Preparation for the Profession', ///@todo not active for Fall 2019, see how I can handle this
                                              'quantum_homotopy'          => 'Quantum Homotopy',
                                              'real_algebraic_geometry'   => 'Real-Algebraic Geometry', 
                                              'statistics'                => 'Statistics'
                                           )
   )

 );
 
 
 public static $meetings_tree = array(
  'meetings_and_conferences'  => /*array(*/'Meetings and Conferences'/*)*/
);

 public static $stud_orgs_tree = array(
  'stud_orgs'  => array('Student Organizations',  array( 'undergrad' => array('Undergraduate', array('maa' => 'MAA') ),
                                                         'graduate'  => array('Graduate',      array('siam' => 'SIAM') )
                                                       )
                  )
           );
// --------------------------------------------- 
// ------ List all trees here - END ---------------- 
// --------------------------------------------- 


 
  
// --------------------------------------------- 
// ------ Make an array of all trees --------- 
// --------------------------------------------- 
     public static function push_all_schemes(& $all_schemes) {
     
  array_push($all_schemes, ttu_math_seminars::$colloquia_tree);
  array_push($all_schemes, ttu_math_seminars::$seminars_tree);
  array_push($all_schemes, ttu_math_seminars::$meetings_tree);
//   array_push($all_schemes, ttu_math_seminars::$stud_orgs_tree);
  
     }
// --------------------------------------------- 
// ------ Make an array of all trees - END --------- 
// --------------------------------------------- 
     
  
  //====================================
  
   public static function topic_webpage($filename, $relative_path_to_app, $relative_path_to_library) {
   
   
  
  $topic_year_semester = Events::get_discipline_year_semester($filename);  //this gets the last three levels of the directory tree; we also need to identify the current scheme
 

  $all_schemes = array();
  ttu_math_seminars::push_all_schemes($all_schemes);
 
 $father_scheme_string = Events::get_father_scheme_from_filename($filename, ttu_math_seminars::$base_folder);
 
 $father_scheme_idx = Events::get_father_scheme_index_from_string($father_scheme_string, $all_schemes);

    
 $icon_in_toolbar = $relative_path_to_app . ttu_math_seminars::$icon_in_toolbar;
 

 
 $event_container_remote_path_prefix = ttu_math_seminars::$math_server_url_base; //no final slash here!!!
 
 $event_container_local_path_prefix = $relative_path_to_app; //no final slash here!!!

 
 //we need to pass *all* schemes for the navigation bar, but also the *current scheme* at least for the History of the current seminar
 Events::generate_topic_page_by_topic_year_semester($relative_path_to_library,  //to find src/ in the library
 
                                                        $event_container_remote_path_prefix,
                                                        $event_container_local_path_prefix,
                                                        ttu_math_seminars::$are_input_files_local,
                                                        
                                                        ttu_math_seminars::$institution,
                                                        ttu_math_seminars::$department,
                                                        $topic_year_semester,  ///@todo the Topic is taken from the filename
                                                        $icon_in_toolbar,
                                                        $all_schemes,
                                                        $father_scheme_idx  ///@todo the father of the current Topic is taken from here
                                                        ); 
  
  }
  

 }
 
 

 ?>
