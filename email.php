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
$xoopsOption['show_rblock'] =1;

//global $dateformat, $autoactive, $imagesize, $heightunit, $weightunit, $footermsgtxt;

        OpenTable();
//************************************************************


//include "admin/head.php";
if (!$xoopsUser){
	redirect_header("index.php",3,_TEXTANONYMUSCANTMAIL."");
	echo"";
}
if (isset($id)) {
if ($page == send) {
	
if (empty($mail)) {
	
	
  	redirect_header("email.php?id=$id",3,_TEXTEMAILMISSING."");
	echo"";
	
}

if (empty($message)) {
	redirect_header("email.php?id=$id",3,_TEXTMESSAGEMISSING."");
	echo"";
}
	$txtfooter = "\n\n____________________________________________________________\n";
    $txtfooter.= $footermsgtxt;
    $message = stripslashes($message);
    $content = $message.$txtfooter;	
	
$result = $xoopsDB->query("SELECT email FROM ".$xoopsDB->prefix($xoopsModule->dirname())." WHERE id = '$id'");
while (list($email) = $xoopsDB->fetchRow($result))
 {
	mail($email, _TEXTMAILSUBJECT, $content,
     "From: $mail\nReply-To: $mail\nX-Mailer: PHP/" . phpversion());
}
redirect_header("view.php?id=$id",3,_TEXTTHANKSMAIL."");
} else {
 echo"
<img src=images/others/menubar.gif>&nbsp;&nbsp;&nbsp;
<a href=index.php><img src=images/icons/ffhome.gif></a>&nbsp;&nbsp;&nbsp;
<a href=search.php><img src=images/icons/searchprofiles.gif></a>&nbsp;&nbsp;&nbsp;
<a href=view-all.php><img src=images/icons/browseall.gif></a>&nbsp;&nbsp;&nbsp;
<img src=images/others/menubarend.gif>
<br>
 <img src=images/line.gif>
  
  <br>

<form action=email.php method=post>
<input type=hidden name=id value=". $id.">
<input type=hidden name=page value=send>
  <table border=0 align=center cellpadding=5 width=450>
    <tr><td>"._TEXTEMAILSENDER."</td>
         <td><input type=text name=name></td></tr>
     <tr><td>"._TEXTEMAILSENDERADDRESS."</td>
         <td><input type=text name=mail></td></tr>
     <tr><td valign=top>"._TEXTEMAILMESSAGE."</td>
         <td><textarea name=message cols=40 rows=15></textarea></td></tr>
     <tr><td colspan=2><div align=center>
         <input type=submit value="._TEXTEMAILBUTTON.">
        </div>
      </td>
    </tr>
  </table>
</form> ";
}
} else {
echo "<img src=images/others/menubar.gif>&nbsp;&nbsp;&nbsp;
<a href=index.php><img src=images/icons/ffhome.gif></a>&nbsp;&nbsp;&nbsp;
<a href=search.php><img src=images/icons/searchprofiles.gif></a>&nbsp;&nbsp;&nbsp;
<a href=view-all.php><img src=images/icons/browseall.gif></a>&nbsp;&nbsp;&nbsp;
<img src=images/others/menubarend.gif><br><br>You must choose a member to e-mail";
} 





//************************************************************
        CloseTable();
include("../../footer.php");
?>
