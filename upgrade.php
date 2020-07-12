<html>
<head>
<TITLE>
Friendfinder module upgrade page</TITLE>
</head>
<?

include("header.php");

if ( $action == "upgrade" ) {

	include("../../mainfile.php");

$result = $xoopsDB->queryF("ALTER TABLE ".$xoopsDB->prefix("friendfinder")." ADD topic VARCHAR(100) DEFAULT '' NOT NULL"); 
if (!$result) {
	$error[] = "Failed ALTER TABLE ".$xoopsDB->prefix("friendfinder")."";
}

echo "<p>...Updating</p>\n";
if ( count($error) ) {
	echo "<p><span style='color:#ff0000;font-weight:bold'>There was an error while updating MySQL database tables. <br /></span></p>\n";
	foreach( $error as $err ) {
		echo $err."<br>";
	}
	
} else {
	echo "<div style='text-align:center;'><h4>Upgrade from Friendfinder 3.0x to 3.1 end and was successfully</h4>\n";
	echo "<table width='70%' border='0'><tr><td>";
	if (is_dir(XOOPS_ROOT_PATH."/modules/friendfinder/")) {
		echo "The '<b>Freind Finder</b>' module is now replaced with the new '<b>Friend Finder</b>' module. <br /><br />";
	}
	die();
}
}

echo"<b><center>Welcome to the friendfinder upgrade page.</b></center><br><br><br>This page will upgrade your existing friendfinder tables and will 
convert it to work with the new friendfinder version 3.1 <br><br>
This script will only update the table structur and will not add new data to you database.<br><br>
Be sure to add the pictures names for category and sex after updating the tables.<br><br>
<B>CAUTION !!!PLEASE MAKE A BACKUP OF YOUR DATA BEFORE USING THIS SCRIPT!!!</B>
<CENTER>
<form action=\"upgrade.php\" method=\"POST\">
<input type='hidden' value='upgrade' name='action'/>
<input type=submit value=\"Upgrade Friendfinder\"></form>
</center>";
?>
</html>
