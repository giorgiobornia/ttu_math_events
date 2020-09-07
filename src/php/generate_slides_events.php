  <?php
  
//- run this script automatically every Friday afternoon
  // syntax: 
  //         php generate_slides.php  current 
  //  or
  //         php generate_slides.php  following
// The way it is right now, it cannot be launched from another position than this current position

  require './ttu_math_events.php'; 

  $relative_path_to_apps = '../../'; 
  
  $all_schemes = array();
  ttu_math_events::push_all_schemes($all_schemes);
 
$year        = ttu_math_events::$current_year;
$semester    = ttu_math_events::$current_semester;

$current_or_following = $argv[1]; //command line argument

  echo "We are generating the " . $current_or_following .  " week\n";

if ( strcmp($current_or_following, "current") != 0 && strcmp($current_or_following,"following") != 0 ) { echo "Wrong week\n"; exit(); }

$month_and_day_begin_end = Events::compute_containing_week_from_monday_to_sunday_starting_from_current_day($current_or_following);


$month_begin = $month_and_day_begin_end[0][0];
$day_begin   = $month_and_day_begin_end[0][1];
$month_end   = $month_and_day_begin_end[1][0];
$day_end     = $month_and_day_begin_end[1][1];



Events::generate_pdf_slides_by_time_range(ttu_math_events::$math_server_url_base,
                                            $relative_path_to_apps,
                                            ttu_math_events::$are_input_files_local,
                                            ttu_math_events::$institution,
                                            ttu_math_events::$department,
                                            $year, $semester, $month_begin, $day_begin, $month_end, $day_end, 
                                            $all_schemes);
  
  
  ?>
