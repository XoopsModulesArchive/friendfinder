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
echo"<br><br><b>
First of all please to not delete the credits because I have spend a lot of time in development of this script. </b>
<br> <br>Original php version by Jeremy Ross - webmaster@phprank.com <br><br>
<b>Copyright for Xoops Friendfinder rc3 by Manuel Caballero manuel@dancepatner.net </b><br><br>
 <table border=0 cellpadding=5 cellspacing=0 align=left width=900>
 <tr> <td>Thanks to Neon <br>http://neon.qldgamers.com/  </td>
 <td> Digitalpixel <br>http://www.digitalpixel.de </td>
 <td>Mister S <br>webmaster@feuerwehr-eisingen.de </tr> </td>
 <tr> <td><b>Special Thanks for Langfiles to </b></tr> </td>
 <tr> <td>Russian files: Vladimir Dmitrijev <br> www.xoops.ru webmaster@xoops.ru  </td>
 <td> Danish files: Farsus Xteam <br> admin@farsus.dk http://xoops.farsus.dk  </td>
 <td> Japanese files: elf <br> webmaster@elf.no-ip.org http://elf.no-ip.org/ </tr> </td>
 <tr> <td> Dutch files: mike <br> mike@jeweetwel.net http://www.xoops.nl</td>
 <td> Spanish files: w4z004 <br> w4z004@xoops.sytes.net http://www.xoops.sytes.net</td>
 <td> tchinese files: liya  <br> liya@wanderer.com.tw   http://tw.xoops.org	 </td 
<td></td></tr></table>
 <br><br><br>
 <br><br><br>
 <br><br><br>
 <br>
 <b>How do I make friendfinder working:</b>
 <br>
 <br><b><font arial size=6>Attention:<br><br></font>
 Due to the new tables comming with Friendfinder 3.xx it will not work as an update of Friendfinder 2.xx. So Please
 uninstall the old version and make a new install of Friendfinder 3.xx</b>
 <br><br>
 1) Upload all file and folders to your website.  <br>
 2) CHMOD members/uploads to 777  <br>
 3) CHMOD cache to 777 and config file to 777 <br>	
 4) Go to xoops admin, and install the Mod.    <br>
 That's all folk's !
 <br>
 <br>
Go to the admin area friendfinder and choose preferences and create the thinks you want for region, sex and category.
<br>
Go to main configuration and change the values as you like it.
<br>
And that's all. Have fun. <br>

<b>Please report bugs to ffbug@dancepartner.net</b>
 <br>
 <br>  <b>
 Some useful information perhaps you need it: </b>
 <br>
 <br>
 If you want to use the online offline feature you need to have lastseen installed.
 <br>
 If you want to add Friendfinder to waiting content have a look at ffwatingcontent.txt
 <br>
 <br>
<b>Changelog:</b><br>
What has been changed in the friendfinder with the new version 3.05:<br>
- index.php non xoops user will not see link for edit and delete a profile<br>
- foot.php links has been deleted.<br>
- email.php and pref.php new feature added: Now you can create a message footer for every email.<br>
- added tchinese lang files.<br>
- global added $picsize to langfiles that caluclated the right pic size from the values the admin enters.<br>
- pref.php added new user handling features: You can now allow/forbit anonymus to search or to send emails.<br>
- pref.php added poibility for admin to choose if he wants the new profile via mail or not. And you cann choose mail address.<br>
- search.php and view.php implemented the features mentiond above.<br>
- search.php changed search mechanism.<br> 
- Block for friendfinder has been written that shows a random profile.<br>
- edit.php and members/index.php bug sex/partner has been fixed<br> 
<br>
<br>
<br>
What has been changed in the friendfinder with the new version 3.03: <br>
 - Completly rewritten now in php <br>
- search.php will inform if no data has been found.  <br>
- three new tabels has been added for state, category and sex  <br>
- admin Area select.php has been added to fill the new tables and so the selectboxes <br>
- deletion of the pics. When a profile is deleted the pic and the folder will be removed    <br>
- Admin mail. The Admin or the user you selected for new xoops users will be informed when new profile is added.   <br>
- Online detection added. When your a watching a profile you can see in the person is on or offline. <br>
- Added private messaging feature for xoops users.  <br>
- new lang files have been added   <br>
- some bugs have been fixed.    <br>


 	
	      

";?>
