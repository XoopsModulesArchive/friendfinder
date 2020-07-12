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
include("../cache/config.php");
include("../header.php");


$xoopsOption['show_rblock'] =1;
$uid=$xoopsUser->uid("E");
global $xoopsDB, $xoopsTheme, $xoopsConfig, $xoopsModule;
global $dateformat, $autoactive, $anonymusmail, $anonymussearch, $mailtoadmin, $emailaddress, $imagesize, $heightunit, $weightunit, $footermsgtxt;


if($dateformat==0){
   $textdateformat = _ttmmjjjj;
    } else {
   $textdateformat = _jjjjmmtt;
}


   
if (!$xoopsUser) {
include(XOOPS_ROOT_PATH."header.php");

OpenTable();
echo "<DIV ALIGN=\"center\">"._TEXTNOXOOPSUSER."<A HREF=\"".XOOPS_URL."/register.php\">"._CLA_REGISTER."</A><BR>"._CLA_OR." <A HREF=\"".XOOPS_URL."/user.php\">"._CLA_CONECT."</A> "._CLA_IFAREMEMBER."</DIV>";
CloseTable();
include("../../footer.php");
} else {

        OpenTable();
//************************************************************
if ($page == "update") {
$sql = "UPDATE ".$xoopsDB->prefix("friendfinder")." SET sex='$sex', active='$active', name='$name', partner='$partner', category='$category', country='$country', state='$state', city='$city', hobby='$hobby', Description='$Description', height='$height', weight='$weight', birth='$birth',topic='$topic' WHERE uid = '$uid'";
$result = $xoopsDB->query($sql);
redirect_header("../index.php",2,_TEXTPROFILEUPDATED."");
     			
				if ($mailtoadmin==1) {
				$xoopsMailer =& getMailer();
				$xoopsMailer->useMail();
				$xoopsMailer->setToEmails($emailaddress);
				$xoopsMailer->setFromEmail($xoopsConfig['adminmail']);
				$xoopsMailer->setFromName($xoopsConfig['sitename']);
				$xoopsMailer->setSubject(sprintf(_US_NEWUSERREGAT));
				$xoopsMailer->setBody(sprintf(_US_HASJUSTREG));
				$xoopsMailer->send();
		
		} else {
		       
		}

} else {
	

$view = $xoopsDB->query("SELECT id,uid,user,active,sex,category,name,email,city,state,country,hobby,partner,height,weight,birth,pic,Description,imgname,imgtime,date,topic,title,sextitle,cattitle,sid,cid,catid FROM ".$xoopsDB->prefix("friendfinder")."
inner join ".$xoopsDB->prefix("friendfinder_state")."
on state = cid
inner join ".$xoopsDB->prefix("friendfinder_sex")."
on sex = sid
inner join ".$xoopsDB->prefix("friendfinder_category")."
on category = catid 
WHERE uid = '$uid'"); 

//$result = $xoopsDB->query($view);

while (list($id,$uid,$user,$active,$sex,$category,$name,$email,$city,$state,$country,$hobby,$partner,$height,$weight,$birth,$pic,$Description,$imgname,$imgtime,$date,$topic, $title,$sextitle,$cattitle,$sid,$cid,$catid) = $xoopsDB->fetchRow($view)) {
echo"
<center>

<img src=../images/others/menubar.gif>&nbsp;&nbsp;&nbsp;
<a href=../index.php><img src=../images/icons/ffhome.gif></a>&nbsp;&nbsp;&nbsp;
<a href=../view.php?id=".$id."><img src=../images/icons/view.gif></a>&nbsp;&nbsp;&nbsp;
<a href=../search.php><img src=../images/icons/searchprofiles.gif></a>&nbsp;&nbsp;&nbsp;
<a href=../view-all.php><img src=../images/icons/browseall.gif></a>&nbsp;&nbsp;&nbsp;
<a href=../delete.php><img src=../images/icons/deleteprofile.gif width=50 height=50></a>&nbsp;&nbsp;&nbsp;
";
if($picupload==1){
	echo"
  
  <a href=pic.php?uid=".$uid."><img src=../images/icons/changepic.gif></a><img src=../images/others/menubarend.gif>";
}else {
}
#$mod=$xoopsModule->dirname();
echo"</center>
<form action=index.php?uid=".$uid."&page=update method=post enctype=post>

  <table border=0 cellpadding=1 cellspacing=0 align=center>
    <tr>
      <INPUT TYPE=hidden name=active value=".$autoactive."></input>
      <td>"._TEXTSEX."</td>
      <td>";

             list($numrows) = $xoopsDB->fetchRow($xoopsDB->query("select sid, sextitle from ".$xoopsDB->prefix("friendfinder_sex").""));

             if ($numrows>0) {
	         $result = $xoopsDB->query("select sid, sextitle from ".$xoopsDB->prefix("friendfinder_sex")." order by sextitle");
	         echo "<select name=\"sex\"><option value=".$sid.">".$sextitle."</option>";
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
      <td>   ";

             list($numrows) = $xoopsDB->fetchRow($xoopsDB->query("select cid, title from ".$xoopsDB->prefix("friendfinder_state").""));

	         if ($numrows>0) {
	         $result = $xoopsDB->query("select cid, title from ".$xoopsDB->prefix("friendfinder_state")." order by title");
	         echo "<select name=\"state\"><option value=".$cid.">".$title."</option>";
	         while(list($cid, $title) = $xoopsDB->fetchRow($result)) {
	         echo "<option value=".$cid.">$title</option>";
             }
             }
	
   echo " </td>
      </tr>
   ";
   if($countrysearch==1){
   	echo"
      <tr>
      <td>"._TEXTCOUNTRY."</td>
      <td>"._SELECTCOUNTRY."</td>
      </tr>";
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
             list($numrows) = $xoopsDB->fetchRow($xoopsDB->query("select * from ".$xoopsDB->prefix("friendfinder").""));
			 
			 
             if ($numrows>0) {
	         $result = $xoopsDB->query("select sid, sextitle from ".$xoopsDB->prefix("friendfinder_sex")." order by sextitle");
	         echo "<select name=\"partner\"><option value=".$partner.">".$sextitle2."</option>";
	         while(list($sid, $sextitle) = $xoopsDB->fetchRow($result))
	          {
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
      <td><input type=text name=height maxlength=20 value=".$height."> ".$heightunit."</td>
      </tr>
      <tr>
      <td>"._TEXTWEIGHT."</td>
      <td><input type=text name=weight maxlength=20 value=".$weight."> ".$weightunit."</td>
      <tr>
      <tr>
      <td>"._TEXTBIRTHDAY."</td>
      <td><input type=text name=birth maxlength=10 value=".$birth."> ".$textdateformat."</td>
      <tr>
      <td><input type=submit value=\""._TEXTMEMBERBUTTON."\"></td>
      </tr>
  </table>
</form>";
}
}
}
}

//************************************************************
        CloseTable();
include("../../../footer.php");
?>
