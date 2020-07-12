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
// ORIGINAL FILE INFO

include("../../mainfile.php");
include("../../header.php");
include("cache/config.php");
include("header.php");
include(XOOPS_ROOT_PATH."/include/xoopscodes.php");
$xoopsOption['show_rblock'] =1;


global $dateformat, $autoactive, $imagesize, $heightunit, $weightunit, $logo, $xoopsConfig, $xoopsDB, $xoopsTheme, $xoopsUser;


     if ($xoopsUser){
     	global $xoopsUser;
//Function to find out if the user already has a profile or not
	$sql = "SELECT  count(*) FROM ".$xoopsDB->prefix("friendfinder")." WHERE uid = '".$xoopsUser->getVar("uid")."'";
	$result = $xoopsDB->query($sql);
	list($numrows)=$xoopsDB->fetchRow($result);
   	if ($numrows>0) {
//	echo "<font face=arial size=2><br>".$result."<br><br><br><br></font>";

	OpenTable();
//below echo <img src=images/logo/".$logo." width=478 height=74>
  echo"<center>
  
  <table width=500 border=0 cellspacing=0 cellpadding=0>";

  if($useredit==1){
  echo"<img src=images/others/menubar.gif>
	<a href=members/index.php><img src=images/icons/editprofile.gif width=50 height=50>
 </a>&nbsp&nbsp&nbsp";
  }else{
  } 
  echo"<a href=search.php><img src=images/icons/searchprofiles.gif width=50 height=50></a>&nbsp&nbsp&nbsp";
  
  if($userdelete==1){
  echo"
      <a href=delete.php><img src=images/icons/deleteprofile.gif width=50 height=50></a>&nbsp&nbsp&nbsp
      

";

  }else {
  }echo" 
<a href=view-all.php><img src=images/icons/browseall.gif width=50 height=50></a>&nbsp&nbsp&nbsp<img src=images/others/menubarend.gif><tr><td width=600 height=10 colspan=6 ><img src=images/line.gif></td></tr>
&nbsp&nbsp&nbsp</center></table>";
	include "search2.php";	
	include "viewall.php";

		CloseTable();
		include(XOOPS_ROOT_PATH."/footer.php");
		die;
	}//end of existing profile checking

OpenTable();
//************************************************************
$xoopsOption['show_rblock'] =1;
//below echo<img src=images/logo/".$logo." width=478 height=74>
 echo"
  
<table width=450 border=0 cellspacing=5 cellpadding=5>
<img src=images/others/menubar.gif>
   <a href=add.php><img src=images/icons/createprofile.gif width=50 height=50></a>&nbsp;&nbsp;&nbsp;
  <a href=search.php><img src=images/icons/searchprofiles.gif width=50 height=50></a>&nbsp;&nbsp;&nbsp;
 <a href=view-all.php><img src=images/icons/browseall.gif width=50 height=50></a>
<img src=images/others/menubarend.gif></center><tr><td width=600 height=10 colspan=6 ><img src=images/line.gif></td></tr>
</table>";

include "search2.php";
include "viewall.php";
//************************************************************
       CloseTable();
        
include("../../footer.php");
die; 
}else{
        OpenTable();
//************************************************************
//below echo <img src=images/logo/".$logo." width=478 height=74>
echo"
  
<table width=450 border=0 cellspacing=5 cellpadding=5 align=center>
<img src=images/others/menubar.gif>
<a href=../../register.php><img src=images/icons/register.gif width=50 height=50></a>&nbsp;&nbsp;&nbsp;

   <a href=add.php><img src=images/icons/createprofile.gif width=50 height=50></a>&nbsp;&nbsp;&nbsp;
  <a href=search.php><img src=images/icons/searchprofiles.gif width=50 height=50></a>&nbsp;&nbsp;&nbsp;
<a href=view-all.php><img src=images/icons/browseall.gif width=50 height=50></a>
  <img src=images/others/menubarend.gif></center><tr><td width=600 height=10 colspan=6 ><img src=images/line.gif></td></tr>
</table>";

include "search2.php";
include "viewall.php";

//************************************************************
        CloseTable();

include("../../footer.php");
die;
} //else zu
//}while zu
?>
