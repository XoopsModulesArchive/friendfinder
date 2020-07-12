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
include_once("admin_header.php");
global $xoopsDB, $xoopsTheme, $xoopsConfig, $xoopsModule;
$topics = "10";
$getentries = $xoopsDB->getRowsNum($xoopsDB->query("SELECT id FROM ".$xoopsDB->prefix($xoopsModule->dirname()).""));
$myts =& MyTextSanitizer::getInstance();


OpenTable();
echo"<TABLE BORDER=0 width=100% align=\"left\" CELLPADDING=0 CELLSPACING=0><TR>
<td>";
     if (!$start)
         {
         $start = "0";
         }
         $showit = "1";
         $next = $start + $topics;
         $anzahl = $xoopsDB->getRowsNum($xoopsDB->query("SELECT id FROM ".$xoopsDB->prefix($xoopsModule->dirname())." ORDER BY id"));
     if ($anzahl > $topics)
         {
     if ($next < $anzahl)
            {
            echo "<a href=./view-all.php?start=$next>"._NEXTPAGE."</a> | ";
            }
         for($x = 0; $x < $anzahl; $x++)
            {
               if(0 == ($x % $topics))
               {
         if($x == $start)
         echo "<B><U>$showit</U></B>\n|\n";
         else
         echo "<a href=./view-all.php?start=$x>$showit</a>\n|\n";
         $showit++;
         if(!($showit % 10))
         echo "<BR>";
               }
           }
}
$next = "0";
echo"</TD></TR></TABLE>";
CloseTable();

$view = $xoopsDB->query("SELECT id,user,active,sex,category,name,email,city,state,country,hobby,partner,height,weight,birth,pic,Description,imgname,imgtime,date,title,sextitle,cattitle FROM ".$xoopsDB->prefix($xoopsModule->dirname())."
inner join ".$xoopsDB->prefix($xoopsModule->dirname()."_state")."
on state = cid
inner join ".$xoopsDB->prefix($xoopsModule->dirname()."_sex")."
on sex = sid
inner join ".$xoopsDB->prefix($xoopsModule->dirname()."_category")."
on category = catid ORDER BY id DESC LIMIT $start, $topics");
        while (list($id,$user,$active,$sex,$category,$name,$email,$city,$state,$country,$hobby,$partner,$height,$weight,$birth,$pic,$Description,$imgname,$imgtime,$date, $title,$sextitle,$cattitle) = $xoopsDB->fetchRow($view)) {
        //Which sex has the partner
        $pat_res=$xoopsDB->query("select sextitle, sexdescription From ".$xoopsDB->prefix($xoopsModule->dirname()."_sex")." WHERE sid='$partner'");
		list($sextitle2, $sexdescription2) = $xoopsDB->fetchRow($pat_res);


#############Prepare Data to show################################        
$Description = $myts->makeTareaData4Show($Description,0,1,1);
$topic = $myts->makeTboxData4Show($topic,0,1,1);
$hobby = $myts->makeTboxData4Show($hobby,0,1,1);
$user = $myts->makeTboxData4Show($user,0,1,1);
$id = $myts->makeTboxData4Show($id,0,1,1);
$title = $myts->makeTboxData4Show($title,0,1,1);
$weight = $myts->makeTboxData4Show($weight,0,1,1);
$height = $myts->makeTboxData4Show($height,0,1,1);
$sextitle = $myts->makeTboxData4Show($sextitle,0,1,1);
$name = $myts->makeTboxData4Show($name,0,1,1);
$country = $myts->makeTboxData4Show($country,0,1,1);
$city = $myts->makeTboxData4Show($city,0,1,1);
$sextitle2 = $myts->makeTboxData4Show($sextitle2,0,1,1);
$cattitle = $myts->makeTboxData4Show($cattitle,0,1,1);
#################################################################

OpenTable();
if($active==0){
   $actived = _ff_no;
    } else {
   $actived = _ff_yes;
    }
    if ($pic==""){
		    	$picture="../images/blank.gif";
		    	$imgname="../images/blank.gif";
		    	$imgtime="";
		    	$gimaxwight=1;
		
        		}else{
            	$picture=$pic;
            	$imgtime="/".$imgtime."";
        		}
echo"<TABLE align=center BORDER=0  CELLPADDING=0 CELLSPACING=0 WIDTH=100%>
<TR><TD  WIDTH=25%><b>"._ID."</b></TD><TD >".$id."</TD><td rowspan=14><img src=".$myts->makeTboxData4Show($picture)." border=0></td></TR>
<TR><TD><b>"._TEXTSTATUS."  </b></TD><TD>$actived</TD></TR>
<TR><TD><b>"._UNAME."       </b></TD><TD>".$user."</TD></TR>
<TR><TD><b>"._SEX."         </b></TD><TD>".$sextitle."</TD></TR>
<TR><TD><b>"._NAME."        </b></TD><TD>".$name."</TD></TR>
<TR><TD><b>"._COUNTRY."     </b></TD><TD>".$country."</TD></TR>
<TR><TD><b>"._REGION."      </b></TD><TD>".$title."</TD></TR>
<TR><TD><b>"._CITY."        </b></TD><TD>".$city."</TD></TR>
<TR><TD><b>"._HOBBY."       </b></TD><TD>".$hobby."</TD></TR>
<TR><TD><b>"._PARTNER."     </b></TD><TD>".$sextitle2."</TD></TR>
<TR><TD><b>"._TEXTCATEGORY."</b></TD><TD>".$cattitle."</TD></TR>
<TR><TD><b>"._TEXTHEIGHT."  </b></TD><TD>".$height."</TD></TR>
<TR><TD><b>"._TEXTWEIGHT."  </b></TD><TD>".$weight."</TD></TR>
<TR><TD><b>"._DESCRIPTION." </b></TD><TD>".$Description."</TD></TR>
</TABLE>
<br>
<TABLE align=center BORDER=0 CELLPADDING=0 CELLSPACING=0 WIDTH=100%>
<TR><TD>
<SMALL>[<A HREF=./edit.php?id=$id>"._editen."</A>]</SMALL>
<SMALL>[<A HREF=./delete.php?id=$id>"._delen."</A>]</SMALL>
<SMALL>[<A HREF=./activate.php?id=$id>"._activate."</A>]</SMALL>
</TD></TR></TABLE>";
CloseTable();
}
echo "<br>"._ENTRIES.": $getentries";
include("admin_footer.php");
?>
