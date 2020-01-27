 
<?php 

// include($_SERVER['DOCUMENT_ROOT']."includes/people.php");
include("../../../events_lib/src/php/functions.php");

 // database server info -----------
$dsn      = "mysql:host=webwork.math.ttu.edu; dbname=deptweb";
$username = "readdeptweb";
$password = "byrt82fw";

 
 // connect to database -----------
	try {
			$conn = new PDO ($dsn, $username, $password );
			$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	} catch ( PDOException $e) {
			echo  "Connection failed: " . $e->getMessage();
	}


// query -----------
   $name_first = "Giorgio";
   $name_last  = "Bornia";
  
//   $sql = "SELECT * FROM roster WHERE Last_Name='" . $name_last . "' AND First_Name='" . $name_first . "'";
   $sql = "SELECT * FROM roster WHERE Employed='T' AND Rank<'4' ORDER BY LAST_NAME, FIRST_NAME";  ///@todo see how to randomize over all faculty //see how to avoid Latex compile errors for & and so on

   $rows = $conn->query( $sql );
   
  
  Events::single_latex_pdf_slide_person($rows);

?>
