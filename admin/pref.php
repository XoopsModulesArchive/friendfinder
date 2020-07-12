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

include("admin_header.php");
include("../header.php");
include("../cache/config.php");


function Conf() {
global $xoopsUser, $xoopsConfig, $xoopsModule, $xoopsTheme;
global $dateformat, $autoactive, $asearch, $countrysearch, $anonymusemail, $mailtoadmin, $emailaddress, $useredit, $userdelete, $picupload, $imagesize, $imgheight, $imgwight, $generateimage, $gimaxwight, $heightunit, $weightunit, $footermsgtxt, $logo, $icon;

if($dateformat==0){
   $dfttmmjjjj = checked;
    } else {
   $dfjjjjmmtt = checked;
}

if($autoactive==0){
 $aano=checked;
} else {
$aayes=checked;
}
if($asearch==0){
 $asno = checked;
} else {
$asyes = checked;
}
if($countrysearch==0){
   $csno=checked;
    } else {
   $csyes=checked;
}

if($anonymusemail==0){
   $aeno=checked;
    } else {
   $aeyes=checked;
}


if($mailtoadmin==0){
   $mano = checked;
   $dismail= disabled;
   } else {
   $mayes = checked;

}
if($useredit==0){
   $ueno = checked;
   } else {
   $ueyes = checked;

}

if($userdelete==0){
   $udno = checked;
   } else {
   $udyes = checked;

}
if($picupload==0){
   $puno = checked;
   } else {
   $puyes = checked;

}
if($generateimage==0){
   $gino = checked;
   } else {
   $giyes = checked;

}
echo "<br />\n";


    OpenTable();

echo "<FORM ACTION=\"pref.php?pa=ConfOk\" METHOD=POST>";
echo "<table width = \"100%\" border = \"0\">
<td>"._TEXTDATEFORMAT." </td>
<td>
<input type=\"radio\" value=\"0\" name=\"dateformatS\" ".$dfttmmjjjj."> "._ttmmjjjj."
<input type=\"radio\" value=\"1\" name=\"dateformatS\" ".$dfjjjjmmtt."> "._jjjjmmtt."
</td>
</tr>
<tr>
<td>"._TEXTAUTOACTIVE." </td>
<td>
<input type=radio value=0 name=autoactiveS ".$aano."> "._ff_no."
<input type=radio value=1 name=autoactiveS ".$aayes."> "._ff_yes."
</td>
</tr>
<tr>
<td>"._TEXTANONYMUSSEARCH." </td>
<td>
<input type=\"radio\" value=\"0\" name=\"asearchS\" ".$asno."> "._ff_no."
<input type=\"radio\" value=\"1\" name=\"asearchS\" ".$asyes."> "._ff_yes."
</td>
</tr>
<tr>
<td>"._TEXTSEARCHFORCOUNTRY." </td>
<td>
<input type=\"radio\" value=\"0\" name=\"countrysearchS\" ".$csno."> "._ff_no."
<input type=\"radio\" value=\"1\" name=\"countrysearchS\" ".$csyes."> "._ff_yes."
</td>
</tr>
<tr>
<td>"._TEXTANONYMUSMAIL." </td>
<td>
<input type=\"radio\" value=\"0\" name=\"anonymusemailS\" ".$aeno." > "._ff_no."
<input type=\"radio\" value=\"1\" name=\"anonymusemailS\" ".$aeyes."> "._ff_yes."
</td>
</tr>
<tr>
<td>"._TEXTMAILTOADMIN." </td>
<td>
<input type=\"radio\" value=\"0\" name=\"mailtoadminS\" ".$mano." > "._ff_no."
<input type=\"radio\" value=\"1\" name=\"mailtoadminS\" ".$mayes."> "._ff_yes."
</td>
</tr>

<tr><td>"._TEXTADMINEMAIL." </td>
<td><input type=\"text\" ".$dismail." name=\"emailaddressS\" value=\"$emailaddress\" size=\"30\" maxlength=\"60\"></td>
<tr>
<td>"._TEXTCANUSEREDIT." </td>
<td>
<input type=\"radio\" value=\"0\" name=\"usereditS\" ".$ueno." > "._ff_no."
<input type=\"radio\" value=\"1\" name=\"usereditS\" ".$ueyes." > "._ff_yes."
</td>
</tr>
<tr>
<td>"._TEXTCANUSERDELETE." </td>
<td>
<input type=\"radio\" value=\"0\" name=\"userdeleteS\" ".$udno." > "._ff_no."
<input type=\"radio\" value=\"1\" name=\"userdeleteS\" ".$udyes." > "._ff_yes."
</td>
</tr>
<tr>
<td>"._TEXTPICUPLOAD." </td>
<td>
<input type=\"radio\" value=\"0\" name=\"picuploadS\" ".$puno." > "._ff_no."
<input type=\"radio\" value=\"1\" name=\"picuploadS\" ".$puyes." > "._ff_yes."
</td>
</tr>
<tr>
<td>
"._TEXTIMAGESIZE." 
</td>
<td>
<input type=\"text\" name=\"imagesizeS\" value=\"$imagesize\" size=\"10\" maxlength=\"10\">
</td>
</tr>
<tr>
<td>
"._TEXTIMAGESIZEHEIGHT." 
</td>
<td>
<input type=\"text\" name=\"imgheightS\" value=\"$imgheight\" size=\"10\" maxlength=\"10\">
</td>
</tr>
<td>
"._TEXTIMAGESIZEWIGHT." 
</td>
<td>
<input type=\"text\" name=\"imgwightS\" value=\"$imgwight\" size=\"10\" maxlength=\"10\">
</td>
<tr>
<td>"._TEXTUSEGENERATEIMAGE." </td>
<td>
<input type=\"radio\" value=\"0\" name=\"generateimageS\" ".$gino." > "._ff_no."
<input type=\"radio\" value=\"1\" name=\"generateimageS\" ".$giyes." > "._ff_yes."
</td>
</tr>
</tr>
<tr><td>"._TEXTGIMAXWIGHT." </td>
<td><input type=\"text\" name=\"gimaxwightS\" value=\"$gimaxwight\" size=\"5\" maxlength=\"5\"></td>
</tr>
<tr><td>"._TEXTHEIGHTUNIT." </td>
<td><input type=\"text\" name=\"heightunitS\" value=\"$heightunit\" size=\"3\" maxlength=\"2\"></td>
</tr>
<tr><td>"._TEXTWEIGHTUNIT." </td>
<td><input type=\"text\" name=\"weightunitS\" value=\"$weightunit\" size=\"3\" maxlength=\"2\"></td>
</tr>
<tr><td valign=top>"._TEXTFOOTERMESSAGE." </td>
<td><TEXTAREA  name=\"footermsgtxtS\" rows=5 cols=50>".$footermsgtxt."</TEXTAREA></td>
</tr>
<tr><td>"._TEXTLOGO." </td>
<td><input type=\"text\" name=\"logoS\" value=\"$logo\" size=\"30\" maxlength=\"60\"></td>
</tr>
<tr><td>"._TEXTICON." </td>
<td><input type=\"text\" name=\"iconS\" value=\"$icon\" size=\"30\" maxlength=\"60\"></td>
</tr>
</table><br />
<input type=\"submit\" value=\""._PREFBUTTON."\">
</form>";

CloseTable();
include("admin_footer.php");
}

function ConfOK($dateformatS, $autoactiveS, $asearchS, $countrysearchS, $anonymusemailS, $mailtoadminS, $emailaddressS, $usereditS, $userdeleteS, $picuploadS, $imagesizeS, $imgheightS, $imgwightS, $generateimageS, $gimaxwightS, $heightunitS,$weightunitS,$footermsgtxtS,$logoS,$iconS)
 {

  $file = fopen("../cache/config.php",'w');
  $content = "<?\n";
  $content .= "\$dateformat=\"$dateformatS\";\n\n";
  $content .= "\$autoactive=\"$autoactiveS\";\n\n";
  $content .= "\$asearch=\"$asearchS\";\n\n";
  $content .= "\$countrysearch=\"$countrysearchS\";\n\n";
  $content .= "\$anonymusemail=\"$anonymusemailS\";\n\n";
  $content .= "\$mailtoadmin=\"$mailtoadminS\";\n\n";
  $content .= "\$emailaddress=\"$emailaddressS\";\n\n";
  $content .= "\$useredit=\"$usereditS\";\n\n";
  $content .= "\$userdelete=\"$userdeleteS\";\n\n";
  $content .= "\$picupload=\"$picuploadS\";\n\n";
  $content .= "\$imagesize = \"$imagesizeS\";\n\n";
  $content .= "\$imgheight = \"$imgheightS\";\n\n";
  $content .= "\$imgwight =\"$imgwightS\";\n\n";
  $content .= "\$generateimage =\"$generateimageS\";\n\n";
  $content .= "\$gimaxwight =\"$gimaxwightS\";\n\n";
  $content .= "\$heightunit = \"$heightunitS\";\n\n";
  $content .= "\$weightunit = \"$weightunitS\";\n\n";
  $content .= "\$footermsgtxt = \"$footermsgtxtS\";\n\n";
  $content .= "\$logo = \"$logoS\";\n\n";
  $content .= "\$icon = \"$iconS\";\n\n";
  $content .= "?>";

    fwrite($file, $content);
    fclose($file);

redirect_header("index.php",1,_CONFSAVE);
exit();

}



switch($pa){

        case "ConfOk":
                ConfOk($dateformatS,$autoactiveS, $asearchS, $countrysearchS, $anonymusemailS, $mailtoadminS, $emailaddressS, $usereditS, $userdeleteS, $picuploadS, $imagesizeS, $imgheightS, $imgwightS, $generateimageS, $gimaxwightS, $heightunitS,$weightunitS,$footermsgtxtS,$logoS, $iconS);
        break;

        default:
                Conf();
        break;
}


?>
