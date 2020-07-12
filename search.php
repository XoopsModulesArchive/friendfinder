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
include("header.php");
$xoopsOption['show_rblock'] =1;
include("cache/config.php");
include("language/english/main.php");
include("age.php");
global $dateformat, $autoactive,$anonymusmail, $imagesize, $heightunit, $weightunit, $asearch;
//global $xoopsDB, $xoopsTheme, $xoopsConfig, $xoopsModule, $xoopsUser;

$myts =& MyTextSanitizer::getInstance();
$getentries = $xoopsDB->getRowsNum($xoopsDB->query("SELECT id FROM ".$xoopsDB->prefix($xoopsModule->dirname()).""));
$partner = isset($HTTP_POST_VARS['partner']) ? $HTTP_POST_VARS['partner'] : array();
$category = isset($HTTP_POST_VARS['category']) ? $HTTP_POST_VARS['category'] : array();
$state = isset($HTTP_POST_VARS['state']) ? $HTTP_POST_VARS['state'] : array();
$agefrom = isset($HTTP_POST_VARS['agefrom']) ? $HTTP_POST_VARS['agefrom'] : 18;
$agetill = isset($HTTP_POST_VARS['agetill']) ? $HTTP_POST_VARS['agetill'] : 65;
        


//************************************************************

if (($asearch==0) AND (!$xoopsUser)) {
	redirect_header("index.php",6,"<DIV ALIGN=\"center\">"._TEXTNOXOOPSUSER."<A HREF=\"".XOOPS_URL."/register.php\">"._CLA_REGISTER."</A><BR>"._CLA_OR." <A HREF=\"".XOOPS_URL."/user.php\">"._CLA_CONECT."</A> "._CLA_IFAREMEMBER."</DIV>");

}else{
	include(XOOPS_ROOT_PATH."/header.php");
	OpenTable();
	if ($page == search) {
		if ($search == search) {
			
			if($countrysearch==1){
				$sc="AND country='$country'";
			}else{
			}
			/************************/
			$g="SUBSTRING(birth,7)";
			$m="SUBSTRING(birth,4,2)";
			$d="LEFT(birth,2)";
			$dat="CONCAT($g,'.',$m,'.',$d)";
			/************************/
			$sql2 = "SELECT id, uid, user, sex, name, city, state, partner, category, birth, pic, topic FROM ".$xoopsDB->prefix($xoopsModule->dirname())." WHERE (DATE_FORMAT(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS($dat)), '%Y')+0) BETWEEN $agefrom AND $agetill ".$sc." AND partner='$sex'";				
			if ( count($partner) >= 1 ){
				$sql2 .= " AND (sex='".$partner[0]."'";
				if ( count($partner) > 1 ) {
					for ( $i = 1; $i < count($partner); $i++ ) {
						$sql2 .= " OR sex='".$partner[$i]."'";
					}
				}
				$sql2 .= ")";				
			}
			if ( count($category) >= 1 ){
				$sql2 .= " AND (category='".$category[0]."'";
				if ( count($category) > 1 ) {
					for ( $i = 1; $i < count($category); $i++ ) {
						$sql2 .= " OR category='".$category[$i]."'";
					}
				}
				$sql2 .= ")";				
			}
			if ( count($state) >= 1 ){
				$sql2 .= " AND (state='".$state[0]."'";
				if ( count($state) > 1 ) {
					for ( $i = 1; $i < count($state); $i++ ) {
						$sql2 .= " OR state='".$state[$i]."'";
					}
				}
				$sql2 .= ")";				
			}
			$sql2 .= " ORDER BY '$sort'";
		}//end off if search
		list($numrows) = $xoopsDB->fetchRow($xoopsDB->query($sql2));
		if ($numrows>0) {		
echo "
  <img src=images/others/menubar.gif>&nbsp;&nbsp;&nbsp;
<a href=index.php><img src=images/icons/ffhome.gif></a>&nbsp;&nbsp;&nbsp;
<a href=search.php><img src=images/icons/searchprofiles.gif></a>&nbsp;&nbsp;&nbsp;
<a href=view-all.php><img src=images/icons/browseall.gif></a>&nbsp;&nbsp;&nbsp;
<img src=images/others/menubarend.gif>
<br>
<img src=images/line.gif>
<table width='100%' border='0' cellpadding='10' cellspacing='0' align='center'>";
			echo "<tr><td><b>Click to view:</td><td><b>"._TAGLINE."</td><td>&nbsp;</td><td><b>"._CITY."</td><td><b>"._TEXTAGE."</td><td><b>Picture:</b></td></tr>";
        	$result = $xoopsDB->query($sql2);
			while (list($id, $uid, $user, $sex, $name, $city, $state, $partner, $category, $birth, $pic, $topic ) = $xoopsDB->fetchRow($result)) {
				echo "";
    			echo"<tr><td><a href=view.php?id=".$myts->makeTboxData4Show($id).">View Profile</a></td><td>".$myts->makeTboxData4Show($topic)."</td>";
    	    	$sex_res=$xoopsDB->query("select sextitle, sexdescription From ".$xoopsDB->prefix($xoopsModule->dirname()."_sex")." WHERE sid='$sex'");
				list($sextitle, $sexdescription) = $xoopsDB->fetchRow($sex_res);
                echo "<td></td>";
			//	echo"<td>".$myts->makeTboxData4Show($topic)."</td>";
				$cat_res=$xoopsDB->query("select cattitle, catdescription From ".$xoopsDB->prefix($xoopsModule->dirname()."_category")." WHERE catid='$category'");
				list($cattitle, $catdescription) = $xoopsDB->fetchRow($cat_res);
                echo "<td>".$city."</td>";
				

    			echo"</td><td>".getage($birth)."</tr>";
    
    			//to find out if user is on- or offline
            	if ( $uid != 0 ) {
    				$poster = new XoopsUser($uid);
    				if ( !$poster->isActive() ) {
    					$poster = 0;
    				}
    			} else {
    				$poster = 0;
    			}	
                if ($pic != "") {
                 	echo "<TD><img src=".$myts->makeTboxData4Show($pic)."  height =50></td>";
      			}else{
					echo "<td><img src=images/blank.gif  height =50></td>";
    			}
            	if ( $poster->isOnline() ) {
    				//echo "<td><img src=images/FF-On.gif width=71 height=18></td></tr>";
    			} else {
    				//echo "<td><img src=images/FF-Off.gif width=71 height=18></td></tr>";   		
            	}
      //			echo $seachcategory1;
    		}
			echo "</table>";
		}else{		
        	echo "<tr><img src=images/others/menubar.gif>&nbsp;&nbsp;&nbsp;
<a href=index.php><img src=images/icons/ffhome.gif></a>&nbsp;&nbsp;&nbsp;
<a href=search.php><img src=images/icons/searchprofiles.gif></a>&nbsp;&nbsp;&nbsp;
<a href=view-all.php><img src=images/icons/browseall.gif></a>&nbsp;&nbsp;&nbsp;
<img src=images/others/menubarend.gif></tr>
<tr><td>&nbsp;</td></tr>
 <tr><img src=images/line.gif></tr><br><br>


<center><b>No profiles matched your search</b>
<tr><td><center> Try expanding your search or browsing all profiles</center></td></tr>";
        	echo "<br><br>";
        	
		
			echo "</center>";
			CloseTable();
			include("../../footer.php");
        	exit();
		}
	}else{
		echo"
 <img src=images/others/menubar.gif>&nbsp;&nbsp;&nbsp;
<a href=index.php><img src=images/icons/ffhome.gif></a>&nbsp;&nbsp;&nbsp;
<a href=search.php><img src=images/icons/searchprofiles.gif></a>&nbsp;&nbsp;&nbsp;
<a href=view-all.php><img src=images/icons/browseall.gif></a>&nbsp;&nbsp;&nbsp;
<img src=images/others/menubarend.gif>
<br>
 <img src=images/line.gif>
<form action=search.php method=post>
 		<table border=0 cellpadding=5 cellspacing=0 align=center width='100%'>
    	<tr>
    	<TD WIDTH=150>"._TEXTSEX."</td>
    	<TD>";

        list($numrows) = $xoopsDB->fetchRow($xoopsDB->query("select sid, sextitle from ".$xoopsDB->prefix($xoopsModule->dirname()."_sex").""));
        if ($numrows>0) {
	    	$result = $xoopsDB->query("select sid, sextitle from ".$xoopsDB->prefix($xoopsModule->dirname()."_sex")." order by sextitle");
	       // echo "<select name=\"sex\"><option value=\"0\">"._CLA_SELECTCAT."</option>";
	        while(list($sid, $sextitle) = $xoopsDB->fetchRow($result)) {
	       // echo "<option value=".$sid.">$sextitle</option>";
	         echo "<input type=radio value=".$sid." name=sex checked> $sextitle</input>";
            }
        }
        echo"</td></tr><tr>

    	<TD WIDTH=150 valign=top>"._TEXTPSEX."</td>
    	<TD>";
        list($numrows) = $xoopsDB->fetchRow($xoopsDB->query("select sid, sextitle from ".$xoopsDB->prefix($xoopsModule->dirname()."_sex").""));
        if ($numrows>0) {
	        $result = $xoopsDB->query("select sid, sextitle from ".$xoopsDB->prefix($xoopsModule->dirname()."_sex")." order by sextitle");
	        while(list($sid, $sextitle) = $xoopsDB->fetchRow($result)) {
	         	echo"<input name=partner[] type=checkbox value=".$sid.">$sextitle</input><br>";
            }
        }
        echo"</td>
    	</tr>
     	<tr>
    	<TD WIDTH=150>"._TEXTAGE."</td>
    	<TD>"._AGEFROM." <input type=text name=agefrom size=4 value=$agefrom> "._AGETILL." <input type=text name=agetill size=4 value=$agetill></td>
    	</tr>
    	<tr>
    	<TD WIDTH=150 valign=top>"._TEXTCATEGORY."</td>
    	<TD>";

        list($numrows) = $xoopsDB->fetchRow($xoopsDB->query("select catid, cattitle from ".$xoopsDB->prefix($xoopsModule->dirname()."_category").""));
        if ($numrows>0) {
	        $result = $xoopsDB->query("select catid, cattitle from ".$xoopsDB->prefix($xoopsModule->dirname()."_category")." order by cattitle");
	        while(list($catid, $cattitle) = $xoopsDB->fetchRow($result)) {
            	echo"<input name=category[] type=checkbox value=".$catid."> $cattitle</input><br>";
            }
        }
        echo"</td>
    	</tr>";
   if($countrysearch==1){
   	echo"
        <tr>
        <TD WIDTH=150>"._TEXTCOUNTRY."</TD>
        <TD WIDTH=450>"._SELECTCOUNTRY."</TD>
        </TR>";
   }else{
   }
   
echo"
    	<tr>
    	<TD WIDTH=150 valign=top>"._TEXTREGION."</td>
    	<TD>  ";
     	list($numrows) = $xoopsDB->fetchRow($xoopsDB->query("select cid, title from ".$xoopsDB->prefix($xoopsModule->dirname()."_state").""));
     	if ($numrows>0) {
     		$result = $xoopsDB->query("select cid, title from ".$xoopsDB->prefix($xoopsModule->dirname()."_state")." order by title");
	 		while(list($cid, $title) = $xoopsDB->fetchRow($result)) {
	 			echo"<input name=state[] type=checkbox value=".$cid."> $title</input><br>";
    		}
    	}
	
    	echo"</td>
    	</tr>
    	<tr>
    	<TD WIDTH=150>"._TEXTSEARCHSORT."</td>
    	<input name=search type=hidden value=search>
		<input name=page type=hidden value=search>
    	<TD>"._SELECTSORT."</td>
    	</tr>
    	<tr>
    	<td><br><input type=\"submit\" value=\""._TEXTSEARCHBUTTON."\">
   		</tr>
   		<td>&nbsp;</td>
  		</table>
		</form>";
 		include "foot.php";

	}
    CloseTable();
	include(XOOPS_ROOT_PATH."/footer.php");
}

?>
