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
include_once("admin_header.php");
include("../../../mainfile.php");

echo "<br>";
$url = (XOOPS_URL."/modules/system");
OpenTable();
echo "<br><br><TABLE BORDER=0 align=\"center\" CELLPADDING=2 CELLSPACING=1 WIDTH=600>
<TR>
<td align=\"center\"><form action=\"./pref.php\" method=\"POST\"><input type=submit value=\""._pref."\"></form></TD>
<td align=\"center\"><form action=\"./select.php\" method=\"POST\"><input type=submit value=\""._menu3."\"></form></TD>
<td align=\"center\"><form action=\"./view-all.php\" method=\"POST\"><input type=submit value=\""._editdel."\"></form></TD>
<td align=\"center\"><form action=\"$url/admin.php?fct=smilies\" method=\"POST\"><input type=submit value=\""._Smiliese."\"></form></TD>
<td align=\"center\"><form action=\"$url/admin.php?fct=preferences&op=show&confcat_id=4\" method=\"POST\"><input type=submit value="._Badwords."></form></TD>
</TR>
 </table>
<TABLE BORDER=0 align=\"center\" CELLPADDING=2 CELLSPACING=1 WIDTH=600>
<td></td> <td></td>
<td align=\"center\"><a href=\"javascript:openWithSelfMain('".XOOPS_URL."/modules/friendfinder/admin/manual.php');\"> "._MANUAL."</a></td>
<td></td>
</TABLE>";
CloseTable();
xoops_cp_footer();
?>
