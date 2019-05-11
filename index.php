 <?php
 
//  //library
//  $library_path = "../colloquia_and_seminars_lib/";
//  include($library_path . "./src/php/functions.php");
//  
//  //application
//  $relative_path_to_app = './';
//  include($relative_path_to_app . './src/php/ttu_math_seminars.php');
// 
// 
//  Seminars::redirect_page(ttu_math_seminars::$current_year, ttu_math_seminars::$current_semester);

$folder='all';
$year = '2019';
$semester = 'fall';

     echo '<!DOCTYPE html>';

     echo '<html>';
     echo '<head>';
     echo '<title> Redirecting </title>';
     echo '<meta http-equiv="refresh" content="0;url=./' . $folder .'/' . $year .'/' . $semester . '/' . '">';
     echo '</head>';
     echo '<body>';
     echo '</body>';
     echo '</html>';

 ?>
