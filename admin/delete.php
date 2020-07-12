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

include_once($xoopsConfig['root_path']."class/module.textsanitizer.php");
global $xoopsDB, $xoopsTheme, $xoopsConfig, $xoopsModule;
$myts = new MyTextSanitizer;
$xoopsOption['show_rblock']= 1 ;

if($sec) {
   switch($sec) {
        case 'del':


$path = ("../members/uploads/$imgtime/");


if ($handle = opendir($path)) {
while (false !== ($file = readdir($handle))) {
if ( is_file($path.$file) ) {
@chmod($path.$file, 0666);
//echo "Chmoding to ".$path.$file." 666<br />";
}
if ( !is_dir($path.$file) ) {
//echo "Deleting ".$path.$file."<br />";
unlink($path.$file);
unlink($path."index.html");
}}
closedir($handle);
rmdir("../members/uploads/$imgtime");
}

$result = "DELETE FROM ".$xoopsDB->prefix("friendfinder")." WHERE (id = '$id')";
              if(!$result = $xoopsDB->query($result))
        die("Error! Could not connect to database!");

echo "<TABLE BORDER=0 CELLPADDING=0 CELLSPACING=0 WIDTH=600>
<TR>
<TD WIDTH=600 VALIGN=top>

<TABLE BORDER=0 CELLPADDING=2 CELLSPACING=1 WIDTH=600>
<TR>
<TD WIDTH=600 ALIGN=center VALIGN=top HEIGHT=300>
<B><BR>"._deletet."</B><BR><BR>
[ <A HREF=./view-all.php>"._backtoadmin."</A> ]
<BR><BR>
</TD>
</TR>
</TABLE>
</TD>
</TR>
</TABLE>";


//include("admin_footer.php");

        exit;
        break;
        }
}



$view = $xoopsDB->query("SELECT uid,id,user,active,sex,category,name,email,city,state,country,hobby,partner,height,weight,birth,pic,Description,imgname,imgtime,date FROM ".$xoopsDB->prefix("friendfinder")."
WHERE id = '$id'");
while (list($uid,$id,$user,$active,$sex,$category,$name,$email,$city,$state,$country,$hobby,$partner,$height,$weight,$birth,$pic,$Description,$imgname,$imgtime,$date) = $xoopsDB->fetchRow($view))
{


echo "<BR>
<TABLE BORDER=0 CELLPADDING=0 CELLSPACING=0 WIDTH=600>
<TR>
<TD WIDTH=600 VALIGN=top>

<TABLE BORDER=0 CELLPADDING=2 CELLSPACING=1 WIDTH=600>
<TR>
<TD WIDTH=600 VALIGN=top>


<FORM METHOD=\"POST\" ACTION=\"$PHP_SELF?id=".$id."\">
<TABLE BORDER=0 CELLPADDING=0 CELLSPACING=0 WIDTH=100%>
<TR>
<TD WIDTH=600 COLSPAN=2>
<BR>

<BR><P></DIV>
</TD>
</TR>
<TR>
<TD WIDTH=150>
"._UNAME."
</TD>
<TD WIDTH=450>
".$myts->makeTboxData4Show($name)."
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
echo $myts->makeTboxData4Show($Description);
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
<BR></TD></TR>
</TABLE>
</TD>
</TR>
</TABLE>";

}
include("admin_footer.php");
//include("../../../footer.php");
?>
