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
include(XOOPS_ROOT_PATH."/include/xoopscodes.php");
//include_once(XOOPS_URL."/class/upload.class.php");
$xoopsOption['show_rblock'] =1;
$myts =& MyTextSanitizer::getInstance();
//include_once XOOPS_ROOT_PATH."/class/xoopslists.php";
include_once XOOPS_ROOT_PATH."/class/xoopsformloader.php";
global $dateformat, $autoactive, $anonymusmail, $anonymussearch, $mailtoadmin, $emailaddress, $imagesize, $heightunit, $weightunit, $footermsgtxt;
global $xoopsConfigUser; 
if($dateformat==0){
   $textdateformat = _mmttjjjj;
    } else {
   $textdateformat = _jjjjmmtt;
}

if (!$xoopsUser) {
include(XOOPS_ROOT_PATH."header.php");
OpenTable();
redirect_header("index.php",4,"<DIV ALIGN=\"center\">"._TEXTNOXOOPSUSER."<A HREF=\"".XOOPS_URL."/register.php\">"._CLA_REGISTER."</A><BR>"._CLA_OR." <A HREF=\"".XOOPS_URL."/user.php\">"._CLA_CONECT."</A> "._CLA_IFAREMEMBER."</DIV>");
CloseTable();
include("../../footer.php");
} else {

        OpenTable();
//************************************************************
include(XOOPS_ROOT_PATH."header.php");

global $xoopsUser;
//Function to find out if the user already has a profile or not
	$sql = "SELECT  count(*) FROM ".$xoopsDB->prefix($xoopsModule->dirname())." WHERE uid = '".$xoopsUser->getVar("uid")."'";
	$result = $xoopsDB->query($sql);
	list($numrows)=$xoopsDB->fetchRow($result);
   	if ($numrows>0) {
		echo "
  <img src=images/others/menubar.gif>&nbsp;&nbsp;&nbsp;
<a href=index.php><img src=images/icons/ffhome.gif></a>&nbsp;&nbsp;&nbsp;

<a href=search.php><img src=images/icons/searchprofiles.gif></a>&nbsp;&nbsp;&nbsp;
<a href=view-all.php><img src=images/icons/browseall.gif></a>&nbsp;&nbsp;&nbsp;
<img src=images/others/menubarend.gif><tr><td width=600 height=10 colspan=6 ><img src=images/line.gif>
  <br>
<font face=arial size=2><br>"._USEREXISTS."<br><br></font></center>";
		include "admin/foot.php";
		CloseTable();
		include(XOOPS_ROOT_PATH."/footer.php");
		die;
	}//end of existing profile checking
	
if ($page == "add") 
{
$sql = "SELECT user FROM ".$xoopsDB->prefix("friendfinder")." WHERE user = '$user'";
$result = $xoopsDB->query($sql);
while (list($userdb) = $xoopsDB->fetchArray($result)) {

if ($user == $userdb) {
echo "<font face=arial size=2><br>"._USEREXISTS."<br><br><br><br></font>";
include "admin/foot.php";
die;
}
}

if (empty($sex) || $sex == "0") {
  
  echo"
<img src=images/others/menubar.gif>&nbsp;&nbsp;&nbsp;
<a href=index.php><img src=images/icons/ffhome.gif></a>&nbsp;&nbsp;&nbsp;

<a href=search.php><img src=images/icons/searchprofiles.gif></a>&nbsp;&nbsp;&nbsp;
<a href=view-all.php><img src=images/icons/browseall.gif></a>&nbsp;&nbsp;&nbsp;
<img src=images/others/menubarend.gif><tr><td width=600 height=10 colspan=6 ><img src=images/line.gif>
  <br><font face=arial size=2>Please choose your sex</font>";
include "admin/foot.php";
include("../../footer.php");
die;

}

if (empty($state) || $state == "0") {
echo "
  <img src=images/others/menubar.gif>&nbsp;&nbsp;&nbsp;
<a href=index.php><img src=images/icons/ffhome.gif></a>&nbsp;&nbsp;&nbsp;

<a href=search.php><img src=images/icons/searchprofiles.gif></a>&nbsp;&nbsp;&nbsp;
<a href=view-all.php><img src=images/icons/browseall.gif></a>&nbsp;&nbsp;&nbsp;
<img src=images/others/menubarend.gif><tr><td width=600 height=10 colspan=6 ><img src=images/line.gif>
  <br><font face=arial size=2>"._TEXTSTATEMISSING."</font>";
include "admin/foot.php";
include("../../footer.php");
die;
}

if (empty($partner) || $partner == "0") {
echo "
  <img src=images/others/menubar.gif>&nbsp;&nbsp;&nbsp;
<a href=index.php><img src=images/icons/ffhome.gif></a>&nbsp;&nbsp;&nbsp;

<a href=search.php><img src=images/icons/searchprofiles.gif></a>&nbsp;&nbsp;&nbsp;
<a href=view-all.php><img src=images/icons/browseall.gif></a>&nbsp;&nbsp;&nbsp;
<img src=images/others/menubarend.gif><tr><td width=600 height=10 colspan=6 ><img src=images/line.gif>
  <br><font face=arial size=2>"._TEXTPARTNERMISSING."</font>";
include "admin/foot.php";
include("../../footer.php");
die;
}

if (empty($category) || $category == "0") {
echo "
  <img src=images/others/menubar.gif>&nbsp;&nbsp;&nbsp;
<a href=index.php><img src=images/icons/ffhome.gif></a>&nbsp;&nbsp;&nbsp;

<a href=search.php><img src=images/icons/searchprofiles.gif></a>&nbsp;&nbsp;&nbsp;
<a href=view-all.php><img src=images/icons/browseall.gif></a>&nbsp;&nbsp;&nbsp;
<img src=images/others/menubarend.gif><tr><td width=600 height=10 colspan=6 ><img src=images/line.gif><br>
  <br><font face=arial size=2>"._TEXTCATEGORYMISSING."</font>";
include "admin/foot.php";
include("../../footer.php");
die;
}

if (empty($city) || $city == "") {
echo "
  <img src=images/others/menubar.gif>&nbsp;&nbsp;&nbsp;
<a href=index.php><img src=images/icons/ffhome.gif></a>&nbsp;&nbsp;&nbsp;

<a href=search.php><img src=images/icons/searchprofiles.gif></a>&nbsp;&nbsp;&nbsp;
<a href=view-all.php><img src=images/icons/browseall.gif></a>&nbsp;&nbsp;&nbsp;
<img src=images/others/menubarend.gif><tr><td width=600 height=10 colspan=6 ><img src=images/line.gif>
  <br><font face=arial size=2>"._TEXTCITYMISSING."</font>";
include "admin/foot.php";
include("../../footer.php");
die;
}

if (empty($year) || $year == "") {
echo "
  <img src=images/others/menubar.gif>&nbsp;&nbsp;&nbsp;
<a href=index.php><img src=images/icons/ffhome.gif></a>&nbsp;&nbsp;&nbsp;

<a href=search.php><img src=images/icons/searchprofiles.gif></a>&nbsp;&nbsp;&nbsp;
<a href=view-all.php><img src=images/icons/browseall.gif></a>&nbsp;&nbsp;&nbsp;
<img src=images/others/menubarend.gif><tr><td width=600 height=10 colspan=6 ><img src=images/line.gif>
  <br><font face=arial size=2>"._TEXTYEARMISSING."</font>";
include "admin/foot.php";
include("../../footer.php");
die;
}

$birth=($day.".".$month.".".$year);
$date = date( "d.m.Y" );
$time = time();


if ($file1_name != "") {

    if ($file1_type!="image/pjpeg" && $file1_type!="image/gif" && $file1_type!="image/jpeg"){
    include("header.php");
    	echo ""._FILEFORMAT."";
    include "admin/foot.php";
    die;
    }
   		$kbsize = filesize($file1);
    
   		if ($kbsize >= $imagesize) {
   		include("../../header.php");
   		echo"
  		<img src=images/others/menubar.gif>&nbsp;&nbsp;&nbsp;
<a href=index.php><img src=images/icons/ffhome.gif></a>&nbsp;&nbsp;&nbsp;

<a href=search.php><img src=images/icons/searchprofiles.gif></a>&nbsp;&nbsp;&nbsp;
<a href=view-all.php><img src=images/icons/browseall.gif></a>&nbsp;&nbsp;&nbsp;
<img src=images/others/menubarend.gif><tr><td width=600 height=10 colspan=6 ><img src=images/line.gif>
  		<br>";
    	echo ""._TEXTUPLOAD."";
    	include "admin/foot.php";
	include("../../footer.php");
    	die;
    	}
 		
    	$size	   = getimagesize($file1);
    	$width     = $size[0];
		$height    = $size[1];
	
		if($hight >= $imgheight || $width >= $imgwight){
		echo"Your picture has the wrong ".$width." width or ".$hight." height is to big to upload";
		include "admin/foot.php";
		include("../../footer.php");
    	die;
    	} 


// bama
	if (@is_dir("members/uploads/$time")) {
    	@chmod("members/uploads/$time", 0777);
	}else{
		$oldumask = umask(0);
    	$result = mkdir("members/uploads/$time", 0777);
    	umask($oldumask);
    	if (!@is_dir("members/uploads/$time") || !$result) {
      		$result = mkdir("members/uploads/$time", 0755);
      		@chmod("members/uploads/$time", 0777);
    	}	
	}
	if (file_exists(XOOPS_ROOT_PATH."/modules/".$xoopsModule->dirname()."/images/index.html")) {
		@copy(XOOPS_ROOT_PATH."/modules/".$xoopsModule->dirname()."/images/index.html",XOOPS_ROOT_PATH."/modules/".$xoopsModule->dirname()."/members/uploads/".$time."/index.html");
	}
	
//mkdir ("members/uploads/$time", 0777);
// bama ende
copy("$file1", "members/uploads/$time/$file1_name");
$pic = XOOPS_URL."/modules/".$xoopsModule->dirname()."/members/uploads/".$time."/".$file1_name;

		
	}
 /*
	if($category!=''){
 	 $category1 = implode (", ",$category);
}


	if($partner!=''){
  	$partner1 = implode (", ",$partner);
}

         */


$sql = "INSERT INTO ".$xoopsDB->prefix($xoopsModule->dirname())." (id, uid, sex, category, date, user, active, name, email, city, country, state, hobby, partner, height, weight, birth, pic, Description, imgname, imgtime, topic) VALUES ('', '$uid', '$sex', '$category', '$date','$user', '$active', '$name', '$email', '$city', '$country', '$state', '$hobby', '$partner', '$height', '$weight', '$birth', '$pic', '$comment', '$file1_name', '$time', '$topic')";
$xoopsDB->query($sql);
//include("header.php");
redirect_header("index.php",4,_TEXTADDSUCCESSFUL."");
//include("../../footer.php");  		

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


    echo"
    
  <img src=images/others/menubar.gif>&nbsp;&nbsp;&nbsp;
<a href=index.php><img src=images/icons/ffhome.gif></a>&nbsp;&nbsp;&nbsp;

<a href=search.php><img src=images/icons/searchprofiles.gif></a>&nbsp;&nbsp;&nbsp;
<a href=view-all.php><img src=images/icons/browseall.gif></a>&nbsp;&nbsp;&nbsp;
<img src=images/others/menubarend.gif><tr><td width=600 height=10 colspan=6 ><img src=images/line.gif>
  <br>

    <form action=add.php?page=add method=post enctype=multipart/form-data>

    <INPUT TYPE=hidden NAME=user SIZE=30 ";?>
    value=<?php if($xoopsUser) echo $xoopsUser->uname("E"); ?>>

    <?
    echo" <INPUT TYPE=hidden NAME=uid SIZE=30 ";?>
    value=<?php if($xoopsUser) echo $xoopsUser->uid("E"); ?>>

 <?
   echo"<Input TYPE=hidden NAME=email SIZE=30 value="; if($xoopsUser) echo $xoopsUser->email("E");
   echo" ";
   echo"</td>";
   echo"     <INPUT TYPE=hidden name=active value=".$autoactive.">
             <table border=0 cellpadding=5 cellspacing=0 align=center width=550>


             <tr>
             <td>"._TEXTSEX."</td>
             <td>";

             list($numrows) = $xoopsDB->fetchRow($xoopsDB->query("select sid, sextitle from ".$xoopsDB->prefix($xoopsModule->dirname()."_sex").""));

             if ($numrows>0) {
	         $result = $xoopsDB->query("select sid, sextitle from ".$xoopsDB->prefix($xoopsModule->dirname()."_sex")." order by sextitle");
	         echo "<select name=\"sex\"><option value=\"0\">"._CLA_SELECTCAT."</option>";
	         while(list($sid, $sextitle) = $xoopsDB->fetchRow($result)) {
	         echo "<option value=".$sid.">$sextitle</option>";
             }
             }

             echo" ></td>
             </tr>
             <TR>
             <TD WIDTH=150>"._TEXTREALNAME."</TD> ";

   echo"     <TD WIDTH=450><INPUT TYPE=text NAME=name SIZE=30 value="; if($xoopsUser) echo $xoopsUser->name("E");
   echo"    > </TD>
             </TR>";
   if($countrysearch==1){
   	echo"
             <tr>
             <TD WIDTH=150>"._TEXTCOUNTRY."</TD>
             <TD WIDTH=450>"._SELECTCOUNTRY."</TD>
             </TR>
             <TR>";
   }else{
   }
   
echo"
             <TD WIDTH=150 valign=top>"._TEXTREGION."</TD>
             <TD WIDTH=450>   ";

             list($numrows) = $xoopsDB->fetchRow($xoopsDB->query("select cid, title from ".$xoopsDB->prefix($xoopsModule->dirname()."_state").""));

	         if ($numrows>0) {
	         $result = $xoopsDB->query("select cid, title from ".$xoopsDB->prefix($xoopsModule->dirname()."_state")." order by title");
//	         echo "<select name=\"state\"><option value=\"0\">"._CLA_SELECTCAT."</option>";
	         echo "<select name=\"state\">";
	         while(list($cid, $title) = $xoopsDB->fetchRow($result)) {
	         echo "<option value=".$cid.">$title</option>";
           //  echo "<input name=state[] type=checkbox value=".$cid."> $title</input>  <br>"; 
	         }
             }
	
   echo " </TD>
          </TR>
          <TR>
          <TD WIDTH=150>"._TEXTCITY."</TD>
          <TD WIDTH=450><INPUT TYPE=text NAME=city SIZE=30 value=";  if($xoopsUser) echo $xoopsUser->user_from("E"); 

   echo" >
         </TD>
         </TR>
         <tr>
         <td valign=top>"._TEXTPSEX."</td>
         <td>";

             list($numrows) = $xoopsDB->fetchRow($xoopsDB->query("select sid, sextitle from ".$xoopsDB->prefix($xoopsModule->dirname()."_sex").""));

             if ($numrows>0) {
	         $result = $xoopsDB->query("select sid, sextitle from ".$xoopsDB->prefix($xoopsModule->dirname()."_sex")." order by sextitle");
	        echo "<select name=\"partner\"><option value=\"0\">"._CLA_SELECTCAT."</option>";
	         while(list($sid, $sextitle) = $xoopsDB->fetchRow($result)) {
	       //  echo "<input name=partner[] type=checkbox value=".$sid."> $sextitle</input>  <br>";
	         echo "<option value=".$sid.">$sextitle</option>";
             }
             }

             echo"</td>
         </tr>
         <tr>
         <TD WIDTH=150 valign=top>"._TEXTCATEGORY."</td>
         <TD WIDTH=450>";

             list($numrows) = $xoopsDB->fetchRow($xoopsDB->query("select catid, cattitle from ".$xoopsDB->prefix($xoopsModule->dirname()."_category").""));

             if ($numrows>0) {
	         $result = $xoopsDB->query("select catid, cattitle from ".$xoopsDB->prefix($xoopsModule->dirname()."_category")." order by cattitle");
	         echo "<select name=\"category\"><option value=\"0\">"._CLA_SELECTCAT."</option>";
	         while(list($catid, $cattitle) = $xoopsDB->fetchRow($result)) {
	          echo "<option value=".$catid.">$cattitle</option>";
            // echo "<input name=category[] type=checkbox value=".$catid."> $cattitle</input>  <br>";
             }
             }

             echo"</td>
         </tr>
               <tr>
         <TD WIDTH=150>"._TEXTTOPIC."</TD>
         <TD WIDTH=450>
         <INPUT TYPE=text name=topic size=30>
         </TD>
         </TR>
         <tr>
         <TD WIDTH=150>"._TEXTTANZ."</TD>
         <TD WIDTH=450>
         <TEXTAREA  name=hobby rows=5 cols=50 wrap=VIRTUAL></TEXTAREA>
         </TD>
         </TR>
       
         <TR>
         <TD WIDTH=150><BR>"._TEXTDESCRIPTION."</TD>
         <TD WIDTH=450><br>  ";
         xoopsCodeTarea("comment");

  echo"  </TD>
         </TR>
         <TR>
         <TD WIDTH=150>"._TEXTHEIGHT."</TD>
         <TD WIDTH=450><INPUT TYPE=text NAME=height SIZE=30>
         ".$heightunit."
         </TD>
         </TR>
         <TR>
         <TD WIDTH=150>"._TEXTWEIGHT."</TD>
         <TD WIDTH=450><INPUT TYPE=text NAME=weight SIZE=30>
         ".$weightunit."
         </TD>
         </TR>
         <TR>
         <TD WIDTH=150>"._TEXTBIRTHDAY."</TD>
         <TD WIDTH=450>

          <select size=1 name=day>
          <option value=01>01</option>
          <option value=02>02</option>
          <option value=03>03</option>
          <option value=04>04</option>
          <option value=05>05</option>
          <option value=06>06</option>
          <option value=07>07</option>
          <option value=08>08</option>
          <option value=09>09</option>
          <option value=10>10</option>
          <option value=11>11</option>
          <option value=12>12</option>
          <option value=13>13</option>
          <option value=14>14</option>
          <option value=15>15</option>
          <option value=16>16</option>
          <option value=17>17</option>
          <option value=18>18</option>
          <option value=19>19</option>
          <option value=20>20</option>
          <option value=21>21</option>
          <option value=22>22</option>
          <option value=23>23</option>
          <option value=24>24</option>
          <option value=25>25</option>
          <option value=26>26</option>
          <option value=27>27</option>
          <option value=28>28</option>
          <option value=29>29</option>
          <option value=30>30</option>
          <option value=31>31</option>
          </select>

          <select size=1 name=month>
          <option value=01>01</option>
          <option value=02>02</option>
          <option value=03>03</option>
          <option value=04>04</option>
          <option value=05>05</option>
          <option value=06>06</option>
          <option value=07>07</option>
          <option value=08>08</option>
          <option value=09>09</option>
          <option value=10>10</option>
          <option value=11>11</option>
          <option value=12>12</option> </select>

          <INPUT TYPE=text NAME=year SIZE=4 MAXLENGTH=4>
          ".$textdateformat."
          </TD>
          </TR>";
    if($picupload==1){
  	echo"
          <TR>
          <TD WIDTH=150>"._TEXTUPLOAD."</TD>
          <TD WIDTH=450><input type=file name=file1></TD>
          </TR>";
  }else{
  }

     echo"<tr colspan=2>
          <td><input type=\"submit\" value=\""._TEXTADDBUTTON."\">

          </table>
          </form> ";

}

 CloseTable();
include("../../footer.php");
}
?>

