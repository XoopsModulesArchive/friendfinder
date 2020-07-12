<?php
#################################################################################
# Friend Finder for Xoops 1.3.x and Xoops 2.xx Version 3.3 beta                 #
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
# Last modification:            2005-7-19										#
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
//modinfo
$modversion['name'] = _XFF;
$modversion['version'] = "3.3";
$modversion['description'] = _XFF_DESC;
//$modversion['official'] = no;
$modversion['author'] = "Manuel Caballero alias eagle81<br />http://www.dancepartner.net";
//$modversion['copyright'] = "Manuel Caballero alias eagle81<br />http://www.dancepartner.net";
$modversion['admin'] = 0;
$modversion['dirname'] = "friendfinder";
$modversion['image'] = "xff_logo.gif";
$modversion['license'] = "GPL see LICENSE";
$modversion['help'] ="manual.php";
$modversion['namemod'] = "Xoops Friend Finder for Xoops 2 (RC4)";
$modversion['credits'] ="(c) by Manuel Caballero <br> friendfinder@dancepartner.net <br><br><br>Original version by<br />Jeremy Ross - webmaster@phprank.com <br /><br />
 Thanks to Neon <br>http://www.modscentral.com/ <br>
 &<br> Digitalpixel <br>http://www.digitalpixel.de <br>
 &<br> Mister S <br>webmaster@feuerwehr-eisingen.de <br>
&<br> Bama <br>webmaster@service.bama-webdesign.de <br>
<br> Special Thanks for Langfiles to <br>
<br> Russian files: Vladimir Dmitrijev <br> www.xoops.ru webmaster@xoops.ru <br>
<br> Danish files: Farsus Xteam <br> admin@farsus.dk http://xoops.farsus.dk <br>
<br> Japanese files: elf <br> webmaster@elf.no-ip.org http://elf.no-ip.org/ <br>
<br> Dutch files: mike <br> mike@jeweetwel.net http://www.xoops.nl <br>
<br> Spanish files: w4z004 <br> w4z004@xoops.sytes.net http://www.xoops.sytes.net <br>
<br> Polish files: arthur <br> exoops@dadude.com http://www.dadude.com <br>
<br> Frensh files: lcnslipe <br> lcnslipe@aol.com http://www.visioncms.fr.st <br>
<br> Italian files: mykeys <br> mykeys@r-o-y-a-l.com http://www.r-o-y-a-l.com <br>
<br> tchinese files liya <br> liya@wanderer.com.tw http://tw.xoops.org	<br>
<br> Prtuguese files ricardo ricardo@ellipsis.com.br http://ellipsis.com.br <br>";

//sql
$modversion['sqlfile']['mysql'] = "sql/mysql.sql";
$modversion['tables'][0] = "friendfinder";
$modversion['tables'][1] = "friendfinder_category";
$modversion['tables'][2] = "friendfinder_sex";
$modversion['tables'][3] = "friendfinder_state";

//has search (does not function)
//$modversion['hasSearch'] = 1;
//$modversion['search']['file'] = "include/search.inc.php";
//$modversion['search']['func'] = "friendfinder_search";




// Menu
$modversion['hasMain'] = 1;
$modversion['sub'][1]['name'] = _XFF_SUBMENU;
$modversion['sub'][1]['url'] = "add.php";
$modversion['sub'][2]['name'] = _XFF_SUBMENUSEARCH;
$modversion['sub'][2]['url'] = "search.php";

// Admin
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "admin/index.php";
$modversion['adminmenu'] = "admin/menu.php";

//Blocks
$modversion['blocks'][1]['file'] = "friendfinder.php";
$modversion['blocks'][1]['name'] = ""._FRIENDFINDERBLOCK."";
$modversion['blocks'][1]['show_func'] = "friendfinder_show";

?>
