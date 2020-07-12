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
include("../../mainfile.php");
include("../../header.php");
include("/cache/config.php");
include("header.php");
include("age.php");

global $xoopsDB, $xoopsTheme, $xoopsConfig, $xoopsModule;
$uid=$xoopsUser->uid("E");

//echo $user;

$myts =& MyTextSanitizer::getInstance();

$xoopsOption['show_rblock']= 1 ;

if($sec) {
   switch($sec) {
        case 'del':


$path = ("members/uploads/$imgtime/");
   


if ($handle = opendir($path)) {
while (false !== ($file = readdir($handle))) {
if ( is_file($path.$file) ) {
@chmod($path.$file, 0666);

}
if ( !is_dir($path.$file) )
{
unlink($path.$file);
unlink($path."index.html");
}}
closedir($handle);
rmdir("members/uploads/$imgtime");
}

$result = "DELETE FROM ".$xoopsDB->prefix($xoopsModule->dirname())." WHERE (uid = '$uid')";
              if(!$result = $xoopsDB->query($result))
        die("Error! Could not connect to database!");
        redirect_header("index.php",4,_TEXTUSERDELETED."");
        exit;
        break;
        }
}




$view = $xoopsDB->query("SELECT uid,id,user, pic, email,Description,imgname,imgtime,date FROM ".$xoopsDB->prefix($xoopsModule->dirname())."
WHERE uid = '$uid'");
while (list($uid,$id,$user,$pic,$email,$Description,$imgname,$imgtime,$date) = $xoopsDB->fetchRow($view))
{

$Description = $myts->makeTareaData4Show($Description,0,1,1);
echo "
<TABLE BORDER=0 CELLPADDING=0 CELLSPACING=0 WIDTH=600>

  <td><img src=images/others/menubar.gif>&nbsp;&nbsp;&nbsp;
<a href=members/index.php><img src=images/icons/editprofile.gif width=50 height=50></a>&nbsp;&nbsp;&nbsp;
<a href=view.php?id=".$id."><img src=images/icons/view.gif></a>&nbsp;&nbsp;&nbsp;
<a href=search.php><img src=images/icons/searchprofiles.gif></a>&nbsp;&nbsp;&nbsp;
<a href=view-all.php><img src=images/icons/browseall.gif></a>&nbsp;&nbsp;&nbsp;
<a href=members/pic.php?uid=".$uid."><img src=images/icons/changepic.gif></a><img src=images/others/menubarend.gif></td>
  <tr><td width=600 height=10 colspan=6 ><img src=images/line.gif></td></tr>
<br>
</table>

<FORM METHOD=\"POST\" ACTION=\"$PHP_SELF?id=".$id."\">
<TABLE BORDER=0 CELLPADDING=0 CELLSPACING=0 WIDTH=100%>
<TR>
<TD WIDTH=600 COLSPAN=2><b><h4>By clicking delete you will permanently erase your profile and picture</h4></b></td>
<BR>

<BR><P></DIV>
</TD>
</TR>
<TR>
<TD WIDTH=150>
"._UNAME."
</TD>
<TD WIDTH=450>
".$myts->makeTboxData4Show($user)."
</TD>
</TR>";


if ($email == '')
{
echo "";
}
else
{
echo "<TR><TD WIDTH=150>
"._TEXTEMAIL."
</TD>
<TD WIDTH=450>
".$myts->makeTboxData4Show($email)."
</TD>
</TR>";
}

echo "
<TR>
<TD WIDTH=150>
"._TEXTDESCRIPTION."
</TD>
<TD WIDTH=450>";

echo $Description;
echo"</TD>
</TR>

<TR>
<TD WIDTH=150 VALIGN=top>
&nbsp;
</TD>
<TD WIDTH=450><BR>";


echo "<INPUT TYPE=hidden NAME=sec VALUE=\"del\">
<INPUT TYPE=hidden NAME=imgtime VALUE=$imgtime>
<INPUT TYPE=\"submit\" VALUE="._delen.">
</TD>
</TR>
</TABLE>
</FORM>
";

}
include("../../footer.php");
?>
