 
<?php



function render($show, $dsn, $username, $password) {

	
	$html = "";	
	try {
			$conn = new PDO ($dsn, $username, $password );
			$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	} catch ( PDOException $e) {
			$html.= "<pre>Connection failed: " . $e->getMessage() ."</pre>";
	}
	
	switch ($show) {
		/* RESEARCH INFO */
		case 'AllResearch':
			$sql = "SELECT * FROM roster WHERE Employed='T' AND Rank <'4' ORDER BY Last_Name, First_Name";
			$html.= renderDetailed($sql, $conn);
			break;
		case 'Algebra':
			$sql = "SELECT * FROM roster WHERE Employed='T' AND Research LIKE '%Algebra%' ORDER BY Last_Name, First_Name";
			$html.= renderDetailed($sql, $conn);
			break;
		case 'Analysis':
			$sql = "SELECT * FROM roster WHERE Employed='T' AND Research LIKE '%Anal%' ORDER BY Last_Name, First_Name";
			$html.= renderDetailed($sql, $conn);
			break;
		case 'Applied':
			$sql = "SELECT * FROM roster WHERE Employed='T' AND Research LIKE '%Appl%' ORDER BY Last_Name, First_Name";
			$html.= renderDetailed($sql, $conn);
			break;
		case 'Biology':
			$sql = "SELECT * FROM roster WHERE Employed='T' AND Research LIKE '%Bio%' ORDER BY Last_Name, First_Name";
			$html.= renderDetailed($sql, $conn);
			break;
		case 'Comput':
			$sql = "SELECT * FROM roster WHERE Employed='T' AND Research LIKE '%Comput%' ORDER BY Last_Name, First_Name";
			$html.= renderDetailed($sql, $conn);
			break;
		case 'Control':
			$sql = "SELECT * FROM roster WHERE Employed='T' AND Research LIKE '%Control%' ORDER BY Last_Name, First_Name";
			$html.= renderDetailed($sql, $conn);
			break;
		case 'DiffEq':
			$sql = "SELECT * FROM roster WHERE Employed='T' AND Research LIKE '%Diff%Equ%' ORDER BY Last_Name, First_Name";
			$html.= renderDetailed($sql, $conn);
			break;
		case 'EdOut':
			$sql = "SELECT * FROM roster WHERE Employed='T' AND Research LIKE '%Educat%' OR Research LIKE '%Outreach%' ORDER BY Last_Name, First_Name";
			$html.= renderDetailed($sql, $conn);
			break;
		case 'Geometry':
			$sql = "SELECT * FROM roster WHERE Employed='T' AND (Research LIKE '%Geometr%' OR Research LIKE '%Topolo%') ORDER BY Last_Name, First_Name";
			$html.= renderDetailed($sql, $conn);
			break;
		case 'Physics':
			$sql = "SELECT * FROM roster WHERE Employed='T' AND Research LIKE '%Physic%' ORDER BY Last_Name, First_Name";
			$html.= renderDetailed($sql, $conn);
			break;
		case 'Stats':
			$sql = "SELECT * FROM roster WHERE Employed='T' AND Research LIKE '%Statis%' OR Research LIKE '%Probab%' ORDER BY Last_Name, First_Name";
			$html.= renderDetailed($sql, $conn);
			break;
		
		
		/* DIRECTORY INFO */
		case 'assiprof':
			$sql = "SELECT * FROM roster WHERE Employed='T' AND Rank='3' ORDER BY LAST_NAME, FIRST_NAME";
			$html.= renderDetailed($sql, $conn);
			break;


		case 'assoprof':
			$sql = "SELECT * FROM roster WHERE Employed='T' AND Rank='2' ORDER BY LAST_NAME, FIRST_NAME";
			$html.= renderDetailed($sql, $conn);
			break;


		case 'former_left':
			$sql = "SELECT * FROM roster WHERE Employed='F' AND Rank<'4' ORDER BY LAST_NAME, FIRST_NAME";
			$html.= renderDetailed($sql, $conn);
			break;


		case 'former':
			$sql = "SELECT * FROM roster WHERE Employed='R' AND Rank='0' ORDER BY LAST_NAME, FIRST_NAME";
			$html.= renderDetailed($sql, $conn, "h3", "Horn Professor Emeritus");
			$sql = "SELECT * FROM roster WHERE Employed='R' AND Rank='1' ORDER BY LAST_NAME, FIRST_NAME";
			$html.= renderDetailed($sql, $conn, "h3", "Professor Emeritus");
			$sql = "SELECT * FROM roster WHERE Employed='R' AND Rank='2' ORDER BY LAST_NAME, FIRST_NAME";
			$html.= renderDetailed($sql, $conn, "h3", "Associate Professor Emeritus");
			$sql = "SELECT * FROM roster WHERE Employed='F' AND Rank<'4' ORDER BY LAST_NAME, FIRST_NAME";
			$html.= renderDetailed($sql, $conn);
			$sql = "SELECT * FROM roster WHERE Employed='D' ORDER BY LAST_NAME, FIRST_NAME";
			$html.= renderDetailed($sql, $conn);
			break;


		case 'grad':
			$sql = "SELECT FIRST_NAME, LAST_NAME, E_MAIL, Office_Building, Office_Room, Phone, TITLE_1, Website, Office_HR, Office_HR1, Office_HR2, Office_HR3 FROM roster WHERE Employed='T' AND Rank = '5' ORDER BY LAST_NAME, FIRST_NAME";
			$html.= renderDefault($sql, $conn);
			break;


		case 'distprof':
			$sql = "SELECT * FROM roster WHERE Employed='T' AND Rank='0' ORDER BY LAST_NAME, FIRST_NAME";
			$html.= renderDistinguished($sql, $conn);
			break;


		case 'instruct_lect':
			$sql = "SELECT * FROM roster WHERE Employed='T' AND Rank = '4' ORDER BY LAST_NAME, FIRST_NAME";
			$html.= renderDefault($sql, $conn);
			break;


		case 'office':
			$sql = "SELECT * FROM roster WHERE Employed='T' ORDER BY LAST_NAME, FIRST_NAME";
			$html.= renderTable($sql, $conn);
			break;


		case 'prof':
			$sql = "SELECT * FROM roster WHERE Employed='T' AND Rank='1' ORDER BY LAST_NAME, FIRST_NAME";
			$html.= renderDetailed($sql, $conn);
			break;


		case 'staff':
			$sql = "SELECT FIRST_NAME, LAST_NAME, E_MAIL, Office_Room, Phone, TITLE_1 FROM roster WHERE Employed='T' AND Rank='6' ORDER BY LAST_NAME, FIRST_NAME";
			$html.= renderDefault($sql, $conn);
			break;


	        case 'post':
			$sql = "SELECT * FROM roster WHERE Employed='T' AND Rank='8' ORDER BY LAST_NAME, FIRST_NAME";
			$html.= renderDetailed($sql, $conn);
			break;	


                case 'adjunct';
			$q = $conn->query( "SELECT COUNT(SerialNumber) AS Count FROM roster WHERE Employed='T' AND TITLE_1 LIKE '%Visit%' OR TITLE_1 LIKE '%Adjunct%'" );
			$count = $q->fetchColumn(); 
			if ($count == false || $count < 1) {
				$html.="<p>There are no Adjunct Professors at this time.</p>";
			} else {
				$sql = "SELECT * FROM roster WHERE Employed='T' AND TITLE_1 LIKE 'Visit%' OR TITLE_1 LIKE '%Adjunct%' ORDER BY LAST_NAME, FIRST_NAME";
				$html.= renderDefault($sql, $conn);
			}
		
			
			break;


		case 'advising';
			$sql = "SELECT FIRST_NAME, LAST_NAME, E_MAIL, Office_Building, Office_Room, Phone, TITLE_1, Website, Office_HR, Office_HR1, Office_HR2, Office_HR3 FROM roster WHERE Employed='T' AND (TITLE_1 LIKE '%Advis%' OR TITLE_1 LIKE '%Graduat%Progra%Manage%') ORDER BY LAST_NAME, FIRST_NAME";
			$html.= renderDefault($sql, $conn);
			break;


		case 'all':
		default:
			$sql = "SELECT * FROM roster WHERE Employed='T' AND (Rank <5 OR Rank=8) ORDER BY LAST_NAME, FIRST_NAME";
			$html.= renderDefault($sql, $conn);
			break;


	}
	$conn = null;
	return $html;
}


function renderDefault($sql, $conn, $heading = "h3") {
	$html = "";
	try {
		$rows = $conn->query( $sql );
		
		foreach ($rows as $row) {
			$img = str_replace(" ", "_", str_replace(",", "", $row["LAST_NAME"]."_".$row["FIRST_NAME"]));
			$html.="<div class='people row'>";
			$html.="<div class='small-3 columns' style='text-align:right;'>";
			$html.="<img src='/math/images/Faculty_Photos/".$img.".jpg' alt='".$row["FIRST_NAME"]." ".$row["LAST_NAME"]."' />";
			$html.="</div>"; // end of image column
			$html.="<div class='small-9 columns'>";
                        
                        $html.="<h3>";
                        $html.= (isDr($row['Degree'])) ? "Dr. " : "";
                        $html.= $row["FIRST_NAME"]." ".$row["LAST_NAME"]."</h3>";

			$html.="<p class='title'>".$row["TITLE_1"]."</p>";
			$html.="<div class='row'>";
			$html.="<div class='large-6 columns'>";
			$html.="<ul class='default-list'>";
			if (!empty($row["E_MAIL"])) {
				$html.="<li><a href='mailto:".$row["E_MAIL"]."' class='mail'>".$row["E_MAIL"]."</a></li>";
			}
			if (!empty($row["Office_Room"])) {
				$html.="<li>Office: ".$row["Office_Building"]." ".$row["Office_Room"]."</li>";
			}
			if (!empty($row["Phone"])) {
				$html.="<li>Phone: ".$row["Phone"]."</li>";
			}
			if (!empty($row["Website"])) {
				$html.="<li><a href='".$row["Website"]."' class='external'>Website</a></li>";
			}
			$html.="</ul>";
			$html.="</div>"; // end of inside left column
			$html.="<div class='large-6 columns'>";
			if (!empty($row["Office_HR"]) || !empty($row["Office_HR1"]) || !empty($row["Office_HR2"]) || !empty($row["Office_HR3"])) {
				$html.="<p><strong>Office Hours:</strong></p>";
			}
			$html.="<ul class='default-list'>";
			if (!empty($row["Office_HR"])) {
				$html.="<li> ".$row["Office_HR"]."</li>";
			}
			if (!empty($row["Office_HR1"])) {
				$html.="<li> ".$row["Office_HR1"]."</li>";
			}
			if (!empty($row["Office_HR2"])) {
				$html.="<li> ".$row["Office_HR2"]."</li>";
			}
			if (!empty($row["Office_HR3"])) {
				$html.="<li> ".$row["Office_HR3"]."</li>";
			}
			$html.="</ul>";
			$html.="</div>"; // end of inside right column
			$html.="</div>"; // end of inside row 
			$html.="</div>"; // end of info column
			$html.="</div>"; // end of row
		}
		
	} catch ( PDOException $e ) {
		$html.= "Query Failed: " . $e->getMessage();
	}
	return $html;
}

function renderDetailed($sql, $conn, $heading = "h3", $subtitle = "") {
	$html = "";
	try {
		$rows = $conn->query( $sql );
		
		foreach ($rows as $row) {
			$img = str_replace(" ", "_", str_replace(",", "", $row["LAST_NAME"]."_".$row["FIRST_NAME"]));
			$html.="<div class='people row'>";
			$html.="<h3>";
			$html.= (isDr($row['Degree'])) ? "Dr. " : "";
			$html.= $row["FIRST_NAME"]." ".$row["LAST_NAME"]."</h3>";
			$html.= (!empty($subtitle)) ? "<p>".$subtitle."</p>" : "";
			$html.="<p class='title'>".$row["Job_Title"] ." " .$row["Degree"] ." ".$row["Year_Received"] ." ".$row["University"]."</p>";
			$html.="<p>" .nl2br("\n");
			$html.="<div class='medium-4 columns'>";
			$html.="<img align='center' src='/math/images/Faculty_Photos/".$img.".jpg' alt='".$row["FIRST_NAME"]." ".$row["LAST_NAME"]."' />";
			$html.="<p>" .nl2br("\n");
			$html.="<ul class='default-list'>";
			if (!empty($row["E_MAIL"]) || !empty($row["Phone"]) || !empty($row["Office_Room"]) || !empty($row["Website"])) {
			}
			if (!empty($row["E_MAIL"])) {
				$html.="<li><a href='mailto:".$row["E_MAIL"]."' class='mail'>".$row["E_MAIL"]."</a></li>";
			}
			if (!empty($row["Phone"])) {
				$html.="<li>".$row["Phone"]."</li>";
			}
			if (!empty($row["Office_Room"])) {
				$html.="<li>Office: ".$row["Office_Building"]." ".$row["Office_Room"]."</li>";
			}
			if (!empty($row["Website"])) {
				$html.="<li><a href='".$row["Website"]."' class='external'>Website</a></li>";
			}
			$html.="</ul>";
			$html.="</div>"; // end of left column
			$html.="<div class='medium-8 columns'>";
			if (!empty($row["Research"]) || !empty($row["Bio"])) {
			}
			if (!empty($row["Research"])) {
				$html.="<p><strong>Research Interests: " .$row["Research"] . "</strong></p>";
			}
			$html.="<p>" .nl2br("\n");
			if (!empty($row["Bio"])) {
				$html.="<p>" .utf8_encode($row["Bio"]) . "</p>";
			}
			$html.="</div>"; // end of right column
			$html.="</div>"; // end of row
		}
		
	} catch ( PDOException $e ) {
		$html.= "Query Failed: " . $e->getMessage();
	}
	return $html;
}

function renderTable($sql, $conn, $heading = "h3") {
	$html = "";
	try {
		$rows = $conn->query( $sql );
		$html.="<div class='people row'>";
		$html.="<table class='dataTable striped' style='width:100%'>";
		$html.="<thead><tr>";
		$html.="<th>Name/Email</th>";
		$html.="<th>Office</th>";
		$html.="<th>Hours</th>";
		$html.="</td></thead>";
		$html.="<tbody>";
		foreach ($rows as $row) {
		
		$html.="<tr>";

		$html .= "<td><strong>";
                $html .= (isDr($row['Degree'])) ? "Dr. " : "";
                $html .=  $row["FIRST_NAME"] . " " . $row["LAST_NAME"] . "<br /><a class='mail title' href= mailto:" . $row["E_MAIL"] . ">Email</a></strong><br />" . $row["Phone"] . "</td>";
		$html.="<td><strong>" .$row["Office_Building"] ." " .$row["Office_Room"] . "</strong></td>";
		$html.="<td>" 
			.$row["Office_HR"] . "<br />" 
			.$row["Office_HR1"] . "<br />"
			.$row["Office_HR2"] . "<br />"
			.$row["Office_HR3"] . "<br /></td>";
		$html.="</tr>";
		
					
		}
		$html.="</tbody>";
		
	} catch ( PDOException $e ) {
		$html.= "Query Failed: " . $e->getMessage();
	}
	$html.="</table>"; // end of table
	$html.="</div>"; // end of row
	return $html;
	
}


function renderDistinguished($sql, $conn, $heading = "h3", $subtitle = "") {
	$html = "";
	try {
		$rows = $conn->query( $sql );
		
		foreach ($rows as $row) {
			$img = str_replace(" ", "_", str_replace(",", "", $row["LAST_NAME"]."_".$row["FIRST_NAME"]));
			$html.="<div class='people row'>";
			$html.="<h3>";
			$html.= (isDr($row['Degree'])) ? "Dr. " : "";
			$html.= $row["FIRST_NAME"]." ".$row["LAST_NAME"]."</h3>";
			$html.= (!empty($subtitle)) ? "<p>".$subtitle."</p>" : "";
			$html.="<p class='title'>".$row["Job_Title"] ." " .$row["Degree"] ." ".$row["Year_Received"] ." ".$row["University"]."</p>";
                        $html.="<p class='title'>".$row["TITLE_1"] . "</p>";
			$html.="<p>" .nl2br("\n");
			$html.="<div class='medium-4 columns'>";
			$html.="<img align='center' src='/math/images/Faculty_Photos/".$img.".jpg' alt='".$row["FIRST_NAME"]." ".$row["LAST_NAME"]."' />";
			$html.="<p>" .nl2br("\n");
			$html.="<ul class='default-list'>";
			if (!empty($row["E_MAIL"]) || !empty($row["Phone"]) || !empty($row["Office_Room"]) || !empty($row["Website"])) {
			}
			if (!empty($row["E_MAIL"])) {
				$html.="<li><a href='mailto:".$row["E_MAIL"]."' class='mail'>".$row["E_MAIL"]."</a></li>";
			}
			if (!empty($row["Phone"])) {
				$html.="<li>".$row["Phone"]."</li>";
			}
			if (!empty($row["Office_Room"])) {
				$html.="<li>Office: ".$row["Office_Building"]." ".$row["Office_Room"]."</li>";
			}
			if (!empty($row["Website"])) {
				$html.="<li><a href='".$row["Website"]."' class='external'>Website</a></li>";
			}
			$html.="</ul>";
			$html.="</div>"; // end of left column
			$html.="<div class='medium-8 columns'>";
			if (!empty($row["Research"]) || !empty($row["Bio"])) {
			}
			if (!empty($row["Research"])) {
				$html.="<p><strong>Research Interests: " .$row["Research"] . "</strong></p>";
			}
			$html.="<p>" .nl2br("\n");
			if (!empty($row["Bio"])) {
				$html.="<p>" .utf8_encode($row["Bio"]) . "</p>";
			}
			$html.="</div>"; // end of right column
			$html.="</div>"; // end of row
		}
		
	} catch ( PDOException $e ) {
		$html.= "Query Failed: " . $e->getMessage();
	}
	return $html;
}


function renderBlank($row) {
	$html = "";
	$html.="<div class='people row'>";
	$html.="<div class='medium-4 small-3 columns'>";


	$html.="</div>"; // end of image column
	$html.="<div class='medium-8 small-9 columns'>";


	$html.="</div>"; // end of info column
	$html.="</div>"; // end of row
	return $html;
}

function isDr($degree) {
	return ($degree === "Ph.D." || $degree === "Ed.D." || $degree === "D.Sc.");
}


?>
