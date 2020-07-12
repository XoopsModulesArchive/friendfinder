<?php
#################################################################################
# Friend Finder for Xoops 1.3.x and Xoops 2.xx Version 3.1 beta                 #
#                                                                               #
# 			Copyright 2003 by eagle81											#
#																				#
# Manuel Caballero	 	friendfinder@dancepartner.net							#
# Module Homepage:		http://www.dancepartner.net								#
#																				#
# Please report bugs and new feature request at modcentral.com friendfinder		#
# forum or via mail frienfinder@dancepartner.net  								#
#																				#
# Copyright for this langfile													#
# Lanuage:			Language name												#
# Name:				your name and email											#
# Homepage:			your Homepage												#
#																				#
#                                                                               #
# Last modification:            2002-02-22										#
#                                                                               #
# Initialy this script is based on phpMeet from                                 #
# Jeremy Ross 					webmaster@phprank.com                      		#
# Script design  : PhpMeet  	Copyright 2002 -                                #
# Created 15/01/02              Last Modified 15/01/02                          #
# Scripts Home                  http://www.jrscripts.com                        #
#																				#
# First Xoops Versions from:                   									#
#                                                                               #
# Xoops-RC2 French Version  :   jokerman@free.fr                                #
# Web Home                  :   http://www.webetfric.com                        #
#                                                                               #
# Xoops-RC2 English Version :   webmaster@modscentral.com                    	#
# Web Home                  :   http://www.modscentral.com                      #
#################################################################################
include("../cache/config.php");
include("admin_header.php");

#  function Index
#####################################################
function Index() {
    global  $xoopsDB, $xoopsConfig, $xoopsModule;
		echo "<br />\n";
		
		OpenTable();
	//	echo "<CENTER><A HREF=\"pref.php\">"._CLA_CONF."</A /></CENTER>";
		CloseTable();
   		echo "<br />\n";



// Add a new State
    OpenTable();
    echo "<form method=\"post\" action=\"select.php\">
		<b>"._CLA_ADDSTATE."</b><br><br>
		"._CLA_STATENAME." <input type=\"text\" name=\"title\" size=\"30\" maxlength=\"100\">	<input type=\"hidden\" name=\"op\" value=\"AddNewState\">
		<input type=\"submit\" value=\""._CLA_ADD."\">
		</form>";
    echo "<br>";


// Modify State

	list($numrows) = $xoopsDB->fetchRow($xoopsDB->query("SELECT COUNT(*) FROM ".$xoopsDB->prefix("friendfinder_state").""));
    if ($numrows>0) {	
	echo "<form method=\"post\" action=\"select.php\">
	 <b>"._CLA_MODIFSTATE."</b></font><br><br>";
	$result = $xoopsDB->query("select cid, title from ".$xoopsDB->prefix("friendfinder_state")." order by title");
	echo ""._CLA_STATE." <select name=\"cat\">";
	while(list($cid, $title) = $xoopsDB->fetchRow($result)) {
	    echo "<option value=\"$cid\">$title</option>";
	   	}
	echo "</select>"
	    ."<input type=\"hidden\" name=\"op\" value=\"ModState\"> <input type=\"submit\" value=\""._CLA_MODIFSTATE."\">"
	    ."</form>";
	CloseTable();
	echo "<br>";
    }


    // Add a new SEX
    OpenTable();
    echo "<form method=\"post\" action=\"select.php\">
		<b>"._CLA_ADDSEX."</b><br><br>
		"._CLA_SEXNAME." <input type=\"text\" name=\"sextitle\" size=\"30\" maxlength=\"100\"><br>
"._CLA_SEXIMAGENAME." <input type=\"text\" name=\"sexdescription\" size=\"30\" maxlength=\"100\">
    <input type=\"hidden\" name=\"op\" value=\"AddNewSex\">
		<input type=\"submit\" value=\""._CLA_ADD."\">
		</form>";
    echo "<br>";

    // Modify SEX

	list($numrows) = $xoopsDB->fetchRow($xoopsDB->query("SELECT COUNT(*) FROM ".$xoopsDB->prefix("friendfinder_sex").""));
    if ($numrows>0) {	
	echo "<form method=\"post\" action=\"select.php\">
	 <b>"._CLA_MODIFSEX."</b></font><br><br>";
	$result = $xoopsDB->query("select sid, sextitle from ".$xoopsDB->prefix("friendfinder_sex")." order by sextitle");
	echo ""._CLA_SEX." <select name=\"catS\">";
	while(list($sid, $sextitle) = $xoopsDB->fetchRow($result)) {
	    echo "<option value=\"$sid\">$sextitle</option>";
	   	}
	echo "</select>"
	    ."<input type=\"hidden\" name=\"op\" value=\"ModSex\"> <input type=\"submit\" value=\""._CLA_MODIFSEX."\">"
	    ."</form>";
	CloseTable();
	echo "<br>";
    }
    
    
       // Add a new Category
    OpenTable();
    echo "<form method=\"post\" action=\"select.php\">
		<b>"._CLA_ADDCATEGORY."</b><br><br>
		"._CLA_CATEGORYNAME." <input type=\"text\" name=\"cattitle\" size=\"30\" maxlength=\"100\">	<br>
		"._CLA_CATEGORYIMAGENAME." <input type=\"text\" name=\"catdescription\" size=\"30\" maxlength=\"100\">
    <input type=\"hidden\" name=\"op\" value=\"AddNewCat\">
		<input type=\"submit\" value=\""._CLA_ADD."\">
		</form>";
    echo "<br>";

    // Modify Category

	list($numrows) = $xoopsDB->fetchRow($xoopsDB->query("SELECT COUNT(*) FROM ".$xoopsDB->prefix("friendfinder_category").""));
    if ($numrows>0) {	
	echo "<form method=\"post\" action=\"select.php\">
	 <b>"._CLA_MODIFCAT."</b></font><br><br>";
	$result = $xoopsDB->query("select catid, cattitle, catdescription from ".$xoopsDB->prefix("friendfinder_category")." order by cattitle");
	echo ""._CLA_CATEGORY." <select name=\"catC\">";
	while(list($catid, $cattitle, $catdescription) = $xoopsDB->fetchRow($result)) {
	    echo "<option value=\"$catid\">$cattitle</option>";
	   	}
	echo "</select>"
	."<input type=\"hidden\" name=\"op\" value=\"ModCat\"> <input type=\"submit\" value=\""._CLA_MODIFCAT."\">"
	    ."</form>";
	CloseTable();
	echo "<br>";
    }
    include("admin_footer.php");
	}

#  function ModState
#####################################################
function ModState($cat) {
    global $xoopsDB, $xoopsConfig, $xoopsModule;
	
  	echo "<br />\n";

    OpenTable();

    $cat = explode("-", $cat);

    if ($cat[1]==0) {
	echo "<b>"._CLA_MODIFSTATE."</b><br><br>";
	$result = $xoopsDB->query("select title, cdescription from ".$xoopsDB->prefix("friendfinder_state")." where cid=$cat[0]");
	list($title,$cdescription) = $xoopsDB->fetchRow($result);
	
	$cdescription = stripslashes($cdescription);
	
	echo "<form action=\"select.php\" method=\"post\">"
	    .""._CLA_STATE." : <input type=\"text\" name=\"title\" value=\"$title\" size=\"51\" maxlength=\"50\"><br>"
	    ."<input type=\"hidden\" name=\"cid\" value=\"$cat[0]\">"
	    ."<input type=\"hidden\" name=\"op\" value=\"ModStateSave\">"
	    ."<table border=\"0\"><tr><td>"
	    ."<input type=\"submit\" value=\""._CLA_SAVMOD."\"></form></td><td>"
	    ."<form action=\"select.php\" method=\"post\">"
	    	    ."<input type=\"hidden\" name=\"cid\" value=\"$cat[0]\">"
	    ."<input type=\"hidden\" name=\"op\" value=\"DelState\">"
	    ."<input type=\"submit\" value=\""._CLA_DEL."\"></form></td></tr></table>";
    }
    CloseTable();
    include("admin_footer.php");
}


#  function ModStateSave
#####################################################
function ModStateSave($cid, $title) {
    global $xoopsDB,$xoopsConfig;
	
    if ($sub==0) {
	$xoopsDB->query("update ".$xoopsDB->prefix("friendfinder_state")." set title='$title' where cid=$cid");
    } else {
	}
	
redirect_header("select.php",1,_CLA_CATSMOD);
exit();
}


#  function DelState
#####################################################
function DelState($cid) {
    global $xoopsDB, $xoopsConfig, $xoopsModule;
	
 	    $xoopsDB->queryF("delete from ".$xoopsDB->prefix("friendfinder_state")." where cid=$cid");

	
redirect_header("select.php",1,_CLA_CATDEL);
exit();


    xoops_cp_header();
		echo "<br />\n";

	OpenTable();
	echo "<br><center><b>"._CLA_SURDELCAT."</b><br><br>";
	echo "[ <a href=\"select.php?op=DelState&cid=$cid\">"._CLA_OUI."</a> | <a href=\"select.php\">"._CLA_NON."</a> ]<br><br>";
	CloseTable();
    include("admin_footer.php");
}


#  function AddNewState
#####################################################
function AddNewState($title, $cdescription) {
    global $xoopsDB, $xoopsConfig;
	
	list($numrows) = $xoopsDB->fetchRow($xoopsDB->query("SELECT  COUNT(*)  FROM ".$xoopsDB->prefix("friendfinder_state")." where title='$title'"));
    if ($numrows>0) {
	xoops_cp_header();
	OpenTable();
	echo "<br><center><b>"._CLA_ERRORCAT." $title "._CLA_EXIST."</b><br><br>";
	echo "<form method=\"post\" action=\"select.php\">
		<b>"._CLA_ADDCATPRINC."</b><br><br>
		"._CLA_CATNAME." <input type=\"text\" name=\"title\" size=\"30\" maxlength=\"100\">	<input type=\"hidden\" name=\"op\" value=\"AddNewState\">
		<input type=\"submit\" value=\""._CLA_ADD."\">
		</form>";
	CloseTable();
    include("admin_footer.php");
    } else {
	$xoopsDB->query("insert into ".$xoopsDB->prefix("friendfinder_state")." values (NULL, '$title', '$cdescription')");
	
redirect_header("select.php",1,_CLA_CATADD);
exit();
    }
}


#  function AddNewSex
#####################################################
function AddNewSex($sextitle, $sexdescription) {
    global $xoopsDB, $xoopsConfig;
	
	list($numrows) = $xoopsDB->fetchRow($xoopsDB->query("SELECT  COUNT(*)  FROM ".$xoopsDB->prefix("friendfinder_sex")." where sextitle='$sextitle'"));
    if ($numrows>0) {
	xoops_cp_header();
	OpenTable();
	echo "<br><center><b>"._CLA_ERRORCAT." $sextitle "._CLA_EXIST."</b><br><br>";
	echo "<form method=\"post\" action=\"select.php\">
		<b>"._CLA_ADDCATPRINC."</b><br><br>
		"._CLA_CATNAME." <input type=\"text\" name=\"sextitle\" size=\"30\" maxlength=\"100\">	<br>
	"._CLA_SEXIMAGENAME." <input type=\"text\" name=\"sexdescription\" size=\"30\" maxlength=\"100\">
	<input type=\"hidden\" name=\"op\" value=\"AddNewSex\">
		<input type=\"submit\" value=\""._CLA_ADD."\">
		</form>";
	CloseTable();
    include("admin_footer.php");
    } else {
	$xoopsDB->query("insert into ".$xoopsDB->prefix("friendfinder_sex")." values (NULL, '$sextitle', '$sexdescription')");
	
redirect_header("select.php",1,_CLA_CATADD);
exit();
    }
}

#  function AddNewCat
#####################################################
function AddNewCat($cattitle, $catdescription) {
    global $xoopsDB, $xoopsConfig;
	
	list($numrows) = $xoopsDB->fetchRow($xoopsDB->query("SELECT  COUNT(*)  FROM ".$xoopsDB->prefix("friendfinder_category")." where cattitle='$cattitle'"));
    if ($numrows>0) {
	xoops_cp_header();
	OpenTable();
	echo "<br><center><b>"._CLA_ERRORCAT." $cattitle "._CLA_EXIST."</b><br><br>";
	echo "<form method=\"post\" action=\"select.php\">
		<b>"._CLA_ADDCATPRINC."</b><br><br>
		"._CLA_CATNAME." <input type=\"text\" name=\"cattitle\" size=\"30\" maxlength=\"100\">	<br>
	"._CLA_CATEGORYIMAGENAME." <input type=\"text\" name=\"catdescription\" size=\"30\" maxlength=\"100\">	
	<input type=\"hidden\" name=\"op\" value=\"AddNewCat\">
	<input type=\"submit\" value=\""._CLA_ADD."\">
		</form>";
	CloseTable();
    include("admin_footer.php");
    } else {
	$xoopsDB->query("insert into ".$xoopsDB->prefix("friendfinder_category")." values (NULL, '$cattitle', '$catdescription')");
	
redirect_header("select.php",1,_CLA_CATADD);
exit();
    }
}

#  function ModSex
#####################################################
function ModSex($catS) {
    global $xoopsDB, $xoopsConfig, $xoopsModule;
	
  	echo "<br />\n";

    OpenTable();

    $catS = explode("-", $catS);

    if ($catS[1]==0) {
	echo "<b>"._CLA_MODIFSEX."</b><br><br>";
	$result = $xoopsDB->query("select sextitle, sexdescription from ".$xoopsDB->prefix("friendfinder_sex")." where sid=$catS[0]");
	list($sextitle,$sexdescription) = $xoopsDB->fetchRow($result);
	
	$sexdescription = stripslashes($sexdescription);
	
	echo "<form action=\"select.php\" method=\"post\">
	<img src=../images/sex/".$sexdescription." alt='".$sextitle."' align=right>
	<table border=0 cellpadding=0 cellspacing=0 align=left>"
	    ."<tr><td>"._CLA_SEXNAME."</td><td> <input type=\"text\" name=\"sextitle\" value=\"$sextitle\" size=\"51\" maxlength=\"50\"><br></td><td>&nbsp;</td></tr>"
		."<tr><td>"._CLA_MODIFSEXIMAGE." :</td><td> <input type=\"text\" name=\"sexdescription\" value=\"$sexdescription\" size=\"51\" maxlength=\"50\"></td>"
	    ."<input type=\"hidden\" name=\"sid\" value=\"$catS[0]\">"
	    ."<input type=\"hidden\" name=\"op\" value=\"ModSexSave\">"
	    ."<tr><td><input type=\"submit\" value=\""._CLA_SAVMOD."\"></form></td>"
	    ."<td><form action=\"select.php\" method=\"post\">"
	    ."<input type=\"hidden\" name=\"sid\" value=\"$catS[0]\">"
	    ."<input type=\"hidden\" name=\"op\" value=\"DelSex\">"
	    ."<input type=\"submit\" value=\""._CLA_DEL."\"></form></td></tr></table>";
    }
    CloseTable();
    include("admin_footer.php");
}

#  function ModCat
#####################################################
function ModCat($catC) {
    global $xoopsDB, $xoopsConfig, $xoopsModule;
	
  	echo "<br />\n";

    OpenTable();

    $catC = explode("-", $catC);

    if ($catC[1]==0) {
	echo "<b>"._CLA_MODIFCATEGORY."</b><br><br>";
	$result = $xoopsDB->query("select cattitle, catdescription from ".$xoopsDB->prefix("friendfinder_category")." where catid=$catC[0]");
	list($cattitle,$catdescription) = $xoopsDB->fetchRow($result);
	
	$catdescription = stripslashes($catdescription);
	
	echo "<form action=\"select.php\" method=\"post\">
	
	<img src=../images/cat/".$catdescription." alt='".$cattitle."' align=right>
	
	 <table border=0 cellpadding=0 cellspacing=0 align=left>"
		
	    ."<tr><td>"._CLA_MODIFCATEGORY." :</td><td> <input type=\"text\" name=\"cattitle\" value=\"$cattitle\" size=\"51\" maxlength=\"50\"></td><td>&nbsp;</td></tr>"
	    ."<tr><td>"._CLA_MODIFCATEGORYIMAGE." :</td><td> <input type=\"text\" name=\"catdescription\" value=\"$catdescription\" size=\"51\" maxlength=\"50\"></td>"
	    
	    ."<input type=\"hidden\" name=\"catid\" value=\"$catC[0]\">"
	    ."<input type=\"hidden\" name=\"op\" value=\"ModCatSave\">"
	    ."<tr><td><input type=\"submit\" value=\""._CLA_SAVMOD."\"></form></td>"
	    ."<td><form action=\"select.php\" method=\"post\">"
	    ."<input type=\"hidden\" name=\"catid\" value=\"$catC[0]\">"
	    ."<input type=\"hidden\" name=\"op\" value=\"DelCat\">"
	    ."<input type=\"submit\" value=\""._CLA_DEL."\"></form></td></tr></table>";
    }
    CloseTable();
    include("admin_footer.php");
}


#  function ModSexSave
#####################################################
function ModSexSave($sid, $sextitle, $sexdescription) {
    global $xoopsDB,$xoopsConfig;
	
    if ($sub==0) {
	$xoopsDB->query("update ".$xoopsDB->prefix("friendfinder_sex")." set sextitle='$sextitle', sexdescription='$sexdescription' where sid=$sid");
    } else {
	}
	
redirect_header("select.php",1,_CLA_CATSMOD);
exit();
}

#  function ModCatSave
#####################################################
function ModCatSave($catid, $cattitle, $catdescription) {
    global $xoopsDB,$xoopsConfig;
	
    if ($sub==0) {
	$xoopsDB->query("update ".$xoopsDB->prefix("friendfinder_category")." set cattitle='$cattitle', catdescription='$catdescription' where catid=$catid");
    } else {
	}
	
redirect_header("select.php",1,_CLA_CATSMOD);
exit();
}

#  function DelSex
#####################################################
function DelSex($sid) {
    global $xoopsDB, $xoopsConfig, $xoopsModule;
	
 	    $xoopsDB->queryF("delete from ".$xoopsDB->prefix("friendfinder_sex")." where sid=$sid");

	
redirect_header("select.php",1,_CLA_CATDEL);
exit();


    xoops_cp_header();
		echo "<br />\n";

	OpenTable();
	echo "<br><center><b>"._CLA_SURDELCAT."</b><br><br>";
	echo "[ <a href=\"select.php?op=DelSex&sid=$sid\">"._CLA_OUI."</a> | <a href=\"select.php\">"._CLA_NON."</a> ]<br><br>";
	CloseTable();
	
    include("admin_footer.php");
}


#  function DelCat
#####################################################
function DelCat($catid) {
    global $xoopsDB, $xoopsConfig, $xoopsModule;
	
 	    $xoopsDB->queryF("delete from ".$xoopsDB->prefix("friendfinder_category")." where catid=$catid");

	
redirect_header("select.php",1,_CLA_CATDEL);
exit();


    xoops_cp_header();
		echo "<br />\n";

	OpenTable();
	echo "<br><center><b>"._CLA_SURDELCAT."</b><br><br>";
	echo "[ <a href=\"select.php?op=DelCat&catid=$catid\">"._CLA_OUI."</a> | <a href=\"select.php\">"._CLA_NON."</a> ]<br><br>";
	CloseTable();
	
    include("admin_footer.php");
}

switch ($op) {


    case "AddNewState":
    AddNewState($title, $cdescription);
    break;
    
    case "AddNewSex":
    AddNewSex($sextitle, $sexdescription);
    break;
    
    case "AddNewCat":
    AddNewCat($cattitle, $catdescription);
    break;

    case "DelState":
    DelState($cid, $ok);
    break;

    case "DelSex":
    DelSex($sid, $ok);
    break;
    
    case "DelCat":
    DelCat($catid, $ok);
    break;
    
    case "ModState":
    ModState($cat);
    break;

    case "ModSex":
    ModSex($catS);
    break;
    
    case "ModCat":
    ModCat($catC);
    break;
    
    case "ModStateSave":
    ModStateSave($cid, $title, $cdescription);
    break;

    case "ModSexSave":
    ModSexSave($sid, $sextitle, $sexdescription);
    break;
    
    case "ModCatSave":
    ModCatSave($catid, $cattitle, $catdescription);
    break;


    default:
    Index();
    break;

}


?>

