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
include("age.php");
#include(XOOPS_ROOT_PATH."/include/xoopscodes.php");
include(XOOPS_ROOT_PATH."/include/version.php");
$myts =& MyTextSanitizer::getInstance();
$xoopsOption['show_rblock'] =1;

global $xoopsDB, $xoopsTheme, $xoopsConfig, $xoopsModule;
global $dateformat, $autoactive,$anonymusmail, $imagesize, $heightunit, $weightunit;

//Function to see if directfriends is installed
//This function only works with xoops2
//if(XOOPS_VERSION=="XOOPS 2.0.6"){
	$module_handler =& xoops_gethandler('module');
	if ($module_handler->getCount(new Criteria('dirname', 'directfriends'))) {
		$directfriends=1;
		} else{
		$directfriends=0;
	}
//}else{
//	if (XoopsModule::moduleExists("directfriends")) {
//		$directfriends=1;
//		} else{
//		$directfriends=0;
//	}
//}

//end of direct friends

OpenTable();
//************************************************************




if (isset($id) || $id != "")
{
//	$statistic = $xoopsDB->query("SELECT id,statistic FROM xoops_friendfinder WHERE id = '$id'");
//	while (list($id,$statistic) = $xoopsDB->fetchRow($statistic)){
//	$newstatistic= $statistic + 1;
//	}
/*		$updatestatistic= $xoopsDB->query("UPDATE ".$xoopsDB->prefix($xoopsModule->dirname())." set statistic='$newstatistic WHERE id='$id'");
	*/



$view = $xoopsDB->query("SELECT uid,id,user,active,sex,category,name,email,city,state,country,hobby,partner,height,weight,birth,pic,Description,imgname,imgtime,date, topic,title FROM ".$xoopsDB->prefix($xoopsModule->dirname())."
inner join ".$xoopsDB->prefix($xoopsModule->dirname()."_state")." on state = cid 
inner join ".$xoopsDB->prefix($xoopsModule->dirname()."_sex")." on sex = sid
inner join ".$xoopsDB->prefix($xoopsModule->dirname()."_category")." on category = catid 
WHERE id = '$id'");
        while (list($uid,$id,$user,$active,$sex,$category,$name,$email,$city,$state,$country,$hobby,$partner,$height,$weight,$birth,$pic,$Description,$imgname,$imgtime,$date,$topic,$title) = $xoopsDB->fetchRow($view)) {
        	
 //       	$newstatistic= $statistic + 1;
 //       	$updatestatistic = $xoopsDB->query("UPDATE xoops_friendfinder set statistic='$newstatistic' WHERE id='$id'");
			
  	   
			if ( $uid != 0 ) {
				$poster = new XoopsUser($uid);
				if ( !$poster->isActive() ) {
				$poster = 0;
				}
				} else {
				$poster = 0;
				}	
				if ($pic==""){
		    	$picture="images/blank.gif";
		    	$imgname="images/blank.gif";
		    	$imgtime="";
		    	$gimaxwight=1;
		    
        		}else{
            	$picture=$pic;
            	$imgtime="/".$imgtime."";
        		}
#############Prepare Data to show################################        
$Description = $myts->makeTareaData4Show($Description,0,1,1);
$topic = $myts->makeTboxData4Show($topic,0,1,1);
$hobby = $myts->makeTboxData4Show($hobby,0,1,1);
$user = $myts->makeTboxData4Show($user,0,1,1);
$id = $myts->makeTboxData4Show($id,0,1,1);
$title = $myts->makeTboxData4Show($title,0,1,1);
$weight = $myts->makeTboxData4Show($weight,0,1,1);
$height = $myts->makeTboxData4Show($height,0,1,1);
$sextitle =$myts->makeTboxData4Show($sextitle,0,1,1);
$sex =$myts->makeTboxData4Show($sex,0,1,1);
#################################################################
//below echo<img src=images/logo/".$logo." width=478 height=74>
echo" 
 
  
<table align=center width=500 border=0 cellpadding=5  cellspacing=0>
<tr><td width=500  height=10 colspan=4>
<img src=images/others/menubar.gif>&nbsp;&nbsp;&nbsp;
<a href=index.php><img src=images/icons/ffhome.gif></a>&nbsp;&nbsp;&nbsp;
<a href=search.php><img src=images/icons/searchprofiles.gif></a>&nbsp;&nbsp;&nbsp;
<a href=view-all.php><img src=images/icons/browseall.gif></a>&nbsp;&nbsp;&nbsp;
<img src=images/others/menubarend.gif>
</tr>

<tr><td width=200 height=10>&nbsp;</td></tr>
<tr><td width=600 height=10 colspan=6 ><img src=images/line.gif></td></tr>";

if($xoopsUser){
	echo"
	<tr><td width=500 height=10 colspan=4><b><h5><i>Friend Finder Profile for <a href='/userinfo.php?uid=$uid'>".$user."</h5></a></i></b></td></tr>
<tr><td><img src=images/Image1.gif></td><td><img src=images/Image1.gif></td><td><img src=images/Image1.gif></td></tr>    
      

    ";
}else{
	echo"<tr><td width=500 height=10 colspan=4><b><h5><i>Register to contact this user</h5></a></i></b></td></tr>
<tr><td><img src=images/Image1.gif></td><td><img src=images/Image1.gif></td><td><img src=images/Image1.gif></td></tr>
";
}
if($generateimage==1){
	echo"
      <td width=200 height=243 rowspan=11><center><img src=".$myts->makeTboxData4Show($picture)." border=1 width=200></center></td>";
}else {
	echo"
<td width=200 height=243 rowspan=11><center><img src=".$myts->makeTboxData4Show($picture)." border=1 width=200></center></td>";	
}
 echo"     </tr>  ";
 //   <tr>
 //     <td width=200 height=1>"._TEXTVIEWREALNAME."</td>
 //     <td width=200 height=1>".$myts->makeTboxData4Show($name)."</td>
 //  </tr>
   

  echo"
	<tr>
	<td width=200 height=10>Profile Updated:</td>
	<td width=200 height=10>".$date."</td></tr>
      <tr>
	<td width=200 height=10>My State:</td>
      <td width=200 height=10>".$country."</td>
    </tr>
    <tr>
      <td width=200 height=10>"._TEXTVIEWCITY."</td>
      <td width=200 height=10>".$myts->makeTboxData4Show($city)."</td>
    </tr>
    <tr>
    <td width=200 height=10>"._TEXTCATEGORY."</td> ";
    $cat_res=$xoopsDB->query("select cattitle, catdescription From ".$xoopsDB->prefix($xoopsModule->dirname()."_category")." WHERE catid='$category'");
	list($cattitle, $catdescription) = $xoopsDB->fetchRow($cat_res);
    echo "<td>".$cattitle."</td>
    </tr>
    <tr>
    <td width=200 height=10>"._PARTNER."</td> ";
    $pat_res=$xoopsDB->query("select sextitle, sexdescription From ".$xoopsDB->prefix($xoopsModule->dirname()."_sex")." WHERE sid='$partner'");
	list($sextitle2, $sexdescription) = $xoopsDB->fetchRow($pat_res);
	echo "<td width=200 height=10><img src=images/sex/".$sexdescription." alt='".$sextitle."'></td>
    </tr>";
    if($sex == "1"){
       echo"<tr> 
         <td width=200 height=10>I am: </td>
         <td width=200 height=10>Male</td></tr>";
}else{
echo"<tr>
         <td width=200 height=10>I am: </td>
         <td width=200 height=10>Female</td></tr>";
}
echo"
    <tr>
      <td width=200 height=10>"._REGION."</td>
      <td width=200 height=10>".$title."</td>
    </tr>
    <tr>
      <td width=200 height=10>"._TEXTWEIGHT."</td>
      <td width=200 height=10>".$weight." ".$weightunit."</td>
    </tr>
    <tr>
      <td width=200 height=10>"._TEXTHEIGHT."</td>
      <td width=200 height=10>".$height." ".$heightunit."</td>
    </tr>
    <tr>
      <td width=200 height=10>"._TEXTAGE."</td>
      <td width=200 height=10>".getage($myts->makeTboxData4Show($birth))."</td>
    </tr>
<tr><td width=600 height=10 colspan=3><img src=images/line2.gif></td></tr>
<tr>
 <td width=400 colspan=3 height=18><b>"._DESCRIPTION.": </b></td>
 </tr>
    <tr>
      <td width=400 colspan=3 height=18>".$Description."</td>
    </tr>
    <tr>
      <td width=200 height=3 colspan=2>&nbsp;</td>
    </tr>
   <tr>
 <td width=400 colspan=2 height=18><b>"._HOBBY."</b></td>
 </tr>
    <tr>
      <td width=400 height=23 colspan=2>".$hobby."</td>
    </tr>
    <tr>
      <td width=200 height=10 colspan=2>&nbsp;</td>
    </tr>

	";
    //if ( $poster->isOnline() ) {
	//	echo "<td width=200 height=10><img src=images/FF-On.gif width=71 height=18></td>";
	//	} else {
	//	echo "<td width=200 height=10><img src=images/FF-Off.gif width=71 height=18></td>";
       // }
echo" <tr><td width=600 height=10 colspan=3><img src=images/line2.gif></td></tr>
      <td width=200 height=10 >"._TEXTVIEWEMAIL."</td><td width=200 height=10><center>Send Private Message</td><td width=200 height=10><center>Add to DirectFriends</td></tr></center> ";

      if(($anonymusemail==0) AND (!$xoopsUser)){
    echo"<center><td width=200 height=10 colspan=6><img src=images/others/pmemaildf.gif></td></center>";
    } else {
    echo"<td width=200 height=10 ><center><a href=email.php?id=".$id."><img src=images/email.gif></td></center>";
	} 

       if ( $xoopsUser ) {
	echo  " 
      <td width=200 height=10 ><center><a href=\"javascript:openWithSelfMain('".XOOPS_URL."/pmlite.php?send2=1&amp;to_userid=".$poster->uid()."','pmlite',435,370);\"><img src='".XOOPS_URL."/images/icons/pm.gif' alt='".sprintf(_SENDPMTO,$poster->uname())."' /></a></td></center>";
    echo  "";
  	if ( $xoopsUser && $directfriends==1) {
	echo " 
               <td width=200 height=10 ><center><a href=../directfriends/index.php?action=ajouter&uid=$uid><img src='images/icons/indexcard.gif'></a></td></center>";
	
  }
  echo"
       ";
}
} 
//$updatestatistic = $xoopsDB->query("UPDATE xoops_friendfinder set statistic='$newstatistic' WHERE id='$id'");
$xoopsDB->close();
} else "<tr>
      <td width=200 height=10 colspan=2>&nbsp;</td>
    </tr><tr><td width=600 height=10 colspan=3><img src=images/line2.gif></td></tr>
</table>";{
echo "<tr>
      <td width=200 height=10 colspan=2>&nbsp;</td>
    </tr><tr><td width=600 height=10 colspan=3><img src=images/line2.gif></td></tr>
</table>";
}

//include "admin/foot.php";


//************************************************************
   CloseTable();
include("../../footer.php");
die;
?>

