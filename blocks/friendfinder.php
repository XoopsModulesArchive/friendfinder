<?
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
include("../header.php");

function friendfinder_show() {
global $xoopsConfig;

$myts =& MyTextSanitizer::getInstance();

	$block = array();
	$block['title'] =  ""._FFBLOCKHEAD."";

global $xoopsDB, $xoopsTheme, $xoopsConfig, $xoopsModule;

$result = $xoopsDB->query("SELECT id FROM ".$xoopsDB->prefix("friendfinder")." where active=1");
$dataresult =$xoopsDB->getRowsNum($result);


mt_srand((double)microtime()*1000000);
$zufall = mt_rand(1, $dataresult);
 
/*Kontrollausgabe für den Admin
echo "zufall: ".$zufall;
echo "<br> dataresult: ".$dataresult;
*/

$view =$xoopsDB->query("SELECT user, id FROM ".$xoopsDB->prefix("friendfinder")." where id=$zufall");
while(list($user, $id) = $xoopsDB->fetchRow($view)) {

//	$block['content']  .= "<center>"._TEXTFFBLOCK."<br><br><a href='".XOOPS_URL."/modules/friendfinder/view.php?id=".$myts->makeTboxData4Show($id)."'>".$user."</a></center>";
	$block['content']  .= "<center><a href='".XOOPS_URL."/modules/friendfinder/view.php?id=".$myts->makeTboxData4Show($id)."'>".$user."</a></center>";

	
	return $block;
}
	
}
?>
