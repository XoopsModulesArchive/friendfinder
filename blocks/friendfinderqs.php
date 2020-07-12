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

function friendfinderqs_show() {
global $xoopsConfig;

$myts =& MyTextSanitizer::getInstance();

	$block = array();
	$block['title'] =  ""._FFBLOCKHEAD."";

global $xoopsDB, $xoopsTheme, $xoopsConfig, $xoopsModule;

	$block['content']  .= "<center><form method=POST action=>
  <table border=0 cellpadding=0 cellspacing=0>
    <tr>
      <td width=50%>Du bist</td>
      <td width=50%><input type=text name=T1 size=20></td>
    </tr>
    <tr>
      <td width=50%>Du suchst</td>
      <td width=50%>test</td>
    </tr>
    <tr>
      <td width=50%>Alter</td>
      <td width=50%><input type=text name=T3 size=3> bis <input type=text name=T3 size=3></td>
    </tr>
  </table>
  <p><input type=submit value=Abschicken name=B1></p>
</form></center>";
	
	return $block;
	
	
}
?>
