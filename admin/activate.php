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
include("admin_header.php");
global $xoopsDB,  $xoopsConfig, $xoopsModule;
$username=$xoopsUser->uname;
$myts =& MyTextSanitizer::getInstance();

if($sec) {
   switch($sec) {
        case 'activate':

$result = "UPDATE ".$xoopsDB->prefix($xoopsModule->dirname())." SET active='1'";
              if(!$result = $xoopsDB->query($result))
        die("Error! Could not connect to database!");

redirect_header("view-all.php",2,_activatedsuccessfully."");
        exit;
        break;
        }
}



OpenTable();
$view = $xoopsDB->query("SELECT id,user,active,email,Description FROM ".$xoopsDB->prefix($xoopsModule->dirname())." WHERE (id = '$id')");
        while (list($id,$user,$active,$email,$Description) = $xoopsDB->fetchRow($view)) {




echo "<FORM METHOD=\"POST\" ACTION=\"$PHP_SELF?id=$id\">
<TABLE BORDER=0 CELLPADDING=0  CELLSPACING=1>
<TR><TD WIDTH=600  VALIGN=top>


<TABLE BORDER=0 CELLPADDING=3  CELLSPACING=1 WIDTH=100%>
<TR>
<TD WIDTH=150><b>"._UNAME."</b></TD>
<TD WIDTH=450>".$myts->makeTboxData4Show($user)."</TD>
</TR>";
if ($email == ''){
    echo "";
    }else{
    echo "<TR>
    <TD WIDTH=150><b>"._TEXTEMAIL.":</b></TD>
    <TD WIDTH=450>".$myts->makeTboxData4Show($email)."</TD>
    </TR>";
     }

echo "
<TR>
<TD WIDTH=150><b>"._TEXTDESCRIPTION."</b></TD>
<TD WIDTH=450>".$myts->makeTboxData4Show($Description)."</TD>
</TR>
<TR>
<TD WIDTH=150>&nbsp;</TD>
<TD WIDTH=450><br><INPUT TYPE=hidden NAME=sec VALUE=\"activate\"><INPUT TYPE=\"submit\" VALUE="._activate."></TD>
</TR>
</TABLE>


</TD>
</TR>
</TABLE></FORM>";
closeTable();
}
include("admin_footer.php");
?>
