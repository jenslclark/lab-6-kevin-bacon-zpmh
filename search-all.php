<?php
require_once("common.php");
$db = DBconnect();
$firstname = $_GET["firstname"];
$lastname = $_GET["lastname"];
?>

<!DOCTYPE html>
<html>
	<head>
		<title>My Movie Database (MyMDb)</title>
		<meta charset="utf-8" />
		<link href="https://webster.cs.washington.edu/images/kevinbacon/favicon.png" type="image/png" rel="shortcut icon" />

		<!-- Link to your CSS file that you should edit -->
		<link href="bacon.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<div id="frame">
			<div id="banner">
				<a href="mymdb.php"><img src="https://webster.cs.washington.edu/images/kevinbacon/mymdb.png" alt="banner logo" /></a>
				My Movie Database
			</div>
		    <div id="main">
		       <h1>Results for <?= $_GET["firstname"] ?> <?= $_GET["lastname"] ?> </h1> 
		
<?php
	$id = getActorId($db, $firstname, $lastname);
	
?>

<?php
	$rows = getMoviesByActorId($db, $id);
			
	if($id != NULL) { 
	formatTable($rows);
	}
	
	elseif($id == NULL) {
 ?>
 	<p>Actor <?= $_GET["firstname"] ?> <?= $_GET["lastname"] ?> not found.</p>
  <?php
        }
?>
               <form action="search-all.php" method="get">
            				<fieldset>
            					<legend>All movies</legend>
            					<div>
            							<input name="firstname" type="text" size="12" placeholder="first name" autofocus="autofocus" /> 
            							<input name="lastname" type="text" size="12" placeholder="last name" /> 
            							<input type="submit" value="go" />
            						</div>
            					</fieldset>
            				</form>
            
            				<!-- form to search for movies where a given actor was with Kevin Bacon -->
            				<form action="search-kevin.php" method="get">
            					<fieldset>
            						<legend>Movies with Kevin Bacon</legend>
            						<div>
            							<input name="firstname" type="text" size="12" placeholder="first name" /> 
            							<input name="lastname" type="text" size="12" placeholder="last name" /> 
            							<input type="submit" value="go" />
            						</div>
            					</fieldset>
            	    </form>
            </div> <!-- end of #main div -->
            
            <div id="w3c">
				<a href="https://webster.cs.washington.edu/validate-html.php"><img src="https://webster.cs.washington.edu/images/w3c-html.png" alt="Valid HTML5" /></a>
				<a href="https://webster.cs.washington.edu/validate-css.php"><img src="https://webster.cs.washington.edu/images/w3c-css.png" alt="Valid CSS" /></a>
			</div>
			
        </div> <!-- end of #frame div -->
    </body>
</html>
