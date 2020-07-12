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

include("../../../mainfile.php");
include("../../../header.php");
include("../header.php");
include("../cache/config.php");
$username=$xoopsUser->uname("E");
$xoopsOption['show_rblock'] =1;

global $dateformat, $autoactive, $imagesize, $heightunit, $weightunit, $XoopsTheme;
        OpenTable();
//************************************************************

if ($page == "update") {
$sql = "UPDATE ".$xoopsDB->prefix("friendfinder")." SET sex='$sex', name='$name', active='$active',  partner='$partner', category='$category', country='$country', state='$state', city='$city', hobby='$hobby', Description='$Description', height='$height', weight='$weight', birth='$birth' topic='$topic' WHERE id = '$id'";
$result = $xoopsDB->query($sql);

echo ""._TEXTPROFILEUPDATED."<br><br><a href=\"index.php\">"._TEXTADDSEARCH."</a>";
} else {
$sql = "SELECT id,user,active,sex,category,name,email,city,state,country,hobby,partner,height,weight,birth,pic,Description,imgname,imgtime,date,title,sextitle,cattitle,sid,cid,catid,topic FROM ".$xoopsDB->prefix("friendfinder")."
inner join ".$xoopsDB->prefix("friendfinder_state")."
on state = cid
inner join ".$xoopsDB->prefix("friendfinder_sex")."
on sex = sid
inner join ".$xoopsDB->prefix("friendfinder_category")."
on category = catid WHERE id = '$id'";

$result = $xoopsDB->query($sql);
while (list($id,$user,$active,$sex,$category,$name,$email,$city,$state,$country,$hobby,$partner,$height,$weight,$birth,$pic,$Description,$imgname,$imgtime,$date, $title,$sextitle,$cattitle,$sid,$cid,$catid,$topic) = $xoopsDB->fetchRow($result)) {

echo"
<center>";
if($picupload==1){
	echo"
  <a href=pic.php?username=".$username.">"._TEXTMEMBERCHANGEPIC."</a>";
	}else {
}
echo"
</center>
<form action=edit.php?id=".$id."&page=update method=post enctype=post>
  <table border=0 cellpadding=1 cellspacing=0 align=center>
    <tr>
      <INPUT TYPE=hidden name=activ value=".$autoactive."></input>
      <td>"._TEXTSEX."</td>
      <td>";

             list($numrows) = $xoopsDB->fetchRow($xoopsDB->query("select sid, sextitle from ".$xoopsDB->prefix("friendfinder_sex").""));

             if ($numrows>0) {
	         $result = $xoopsDB->query("select sid, sextitle from ".$xoopsDB->prefix("friendfinder_sex")." order by sextitle");
	         echo "<select name=\"sex\"><option value=".$i[sid].">".$sextitle."</option>";
	         while(list($sid, $sextitle) = $xoopsDB->fetchRow($result)) {
	         echo "<option value=".$sid.">$sextitle</option>";
             }
             }

             echo"</td>
      </tr>
      <tr>
      <td>"._TEXTREALNAME."</td>
      <td><input type=text name=name maxlength=50 value=".$name."></td>
      </tr>
      <tr>
      <td>"._TEXTREGION."</td>
      <td> ";

             list($numrows) = $xoopsDB->fetchRow($xoopsDB->query("select cid, title from ".$xoopsDB->prefix("friendfinder_state").""));

	         if ($numrows>0) {
	         $result = $xoopsDB->query("select cid, title from ".$xoopsDB->prefix("friendfinder_state")." order by title");
	         echo "<select name=\"state\"><option value=".$cid.">".$title."</option>";
	         while(list($cid, $title) = $xoopsDB->fetchRow($result)) {
	         echo "<option value=".$cid.">$title</option>";
             }
             }
	
   echo "</td>
      </tr>   ";
   if($countrysearch==1){
   	echo"
      <tr>
      <td>"._TEXTCOUNTRY."</td>
      <td>"._SELECTCOUNTRY."</td>
      </tr>
   ";
   }else{
   }
   
echo"
      <tr>
      <td>"._TEXTCITY."</td>
      <td><input type=text name=city maxlength=99 value=".$city."></td>
      </tr>
      <tr>
      <td>"._TEXTPSEX."</td>
      <td>";
$viewpartner=$xoopsDB->query("select sid, sextitle from ".$xoopsDB->prefix("friendfinder_sex")." Where sid=$partner order by sextitle");
 while(list($sid2, $sextitle2) = $xoopsDB->fetchRow($viewpartner))
	         {
             list($numrows) = $xoopsDB->fetchRow($xoopsDB->query("select sid, sextitle from ".$xoopsDB->prefix("friendfinder_sex").""));

             if ($numrows>0) {
	         $result = $xoopsDB->query("select sid, sextitle from ".$xoopsDB->prefix("friendfinder_sex")." order by sextitle");
	         echo "<select name=\"partner\"><option value=".$partner.">".$sextitle2."</option>";
	         while(list($sid, $sextitle) = $xoopsDB->fetchRow($result)) {
	         echo "<option value=".$sid.">$sextitle</option>";
             }
             }

             echo"</td>
      </tr>
      <tr>
      <TD>"._TEXTCATEGORY."</td>
      <TD>";

             list($numrows) = $xoopsDB->fetchRow($xoopsDB->query("select catid, cattitle from ".$xoopsDB->prefix("friendfinder_category").""));

             if ($numrows>0) {
	         $result = $xoopsDB->query("select catid, cattitle from ".$xoopsDB->prefix("friendfinder_category")." order by cattitle");
	         echo "<select name=\"category\"><option value=".$catid.">".$cattitle."</option>";
	         while(list($catid, $cattitle) = $xoopsDB->fetchRow($result)) {
	         echo "<option value=".$catid.">$cattitle</option>";
             }
             }

             echo"</td>
      </tr>
              <tr>
         <TD WIDTH=150>"._TEXTTOPIC."</TD>
         <TD WIDTH=450>
         <INPUT TYPE=text name=topic size=30 value=".$topic.">
         </TD>
         </TR>
      <tr>
      <td>"._TEXTTANZ."</td>
      <td><textarea cols=20 rows=4 name=hobby>".$hobby."</textarea></td>
      </tr>
      <tr>
      <td>"._TEXTDESCRIPTION."</td>
      <td><textarea cols=20 rows=4 name=Description>".$Description."</textarea></td>
      </tr>
      <tr>
      <td>"._TEXTHEIGHT."</td>
      <td><input type=text name=height maxlength=20 value=".$height.">".$heightunit."</td>
      </tr>
      <tr>
      <td>"._TEXTWEIGHT."</td>
      <td><input type=text name=weight maxlength=20 value=".$weight.">".$weightunit."</td>
      <tr>
      <tr>
      <td>"._TEXTBIRTHDAY."</td>
      <td><input type=text name=birth maxlength=10 value=".$birth."></td>
      <tr>
      <td><input type=submit value="._TEXTMEMBERBUTTON."></td>
      </tr>
  </table>
</form>";
}
}
}
//************************************************************
        CloseTable();
include("../../../footer.php");
?>
