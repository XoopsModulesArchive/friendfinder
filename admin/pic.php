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

global $dateformat, $autoactive, $imagesize, $heightunit, $weightunit, $XoopsTheme;

$xoopsOption['show_rblock'] =1;
$uid=$xoopsUser->uid("E");
        OpenTable();
//************************************************************

$sql = "SELECT * FROM ".$xoopsDB->prefix("friendfinder")." WHERE uid = '$uid'";
$result = $xoopsDB->query($sql);
while ($i = $xoopsDB->fetchArray($result))
 {
$imgname = $i[imgname];
$imgtime = $i[imgtime];
$id = $i[id];
$img = $i[pic];
}
if ($page == update) {
	if ($file1_name == "") {
	die("No File!!");
}

      	if ($file1_type!="image/pjpeg" && $file1_type!="image/gif" && $file1_type!="image/jpeg"){
   		echo ""._FILEFORMAT."";
    	include "../admin/foot.php";
   		die;
   		}
	
   		$kbsize = filesize($file1);
    
   		if ($kbsize >= $imagesize) {
   			include("../header.php");
    	echo ""._TEXTUPLOAD."";
    	include "../admin/foot.php";
    	die;
    	}
    
    	$size	   = getimagesize($file1);
    	$width     = $size[0];
		$height    = $size[1];
	
		if($hight >= $imgheight || $width >= $imgwight){
		echo"Your ".$width." or ".$hight." is to big to upload";
		include "admin/foot.php";
    	die;
    	}


// Delete file in dir
unlink ("uploads/$imgtime/$imgname");
unlink ("uploads/$imgtime/index.html");
// Delete dir
rmdir ("uploads/".$imgtime."");
// make new dir
$time = time();
// bama
	if (@is_dir("uploads/$time")) {
    	@chmod("uploads/$time", 0777);
	}else{
		$oldumask = umask(0);
    	$result = mkdir("uploads/$time", 0777);
    	umask($oldumask);
    	if (!@is_dir("uploads/$time") || !$result) {
      		$result = mkdir("uploads/$time", 0755);
      		@chmod("uploads/$time", 0777);
    	}	
	}
	if (file_exists(XOOPS_ROOT_PATH."/modules/friendfinder/images/index.html")) {
		@copy(XOOPS_ROOT_PATH."/modules/friendfinder/images/index.html",XOOPS_ROOT_PATH."/modules/friendfinder/members/uploads/".$time."/index.html");
	}

//mkdir ("uploads/$time", 0777);
// bama ende
// place new file in dir
copy("$file1", "uploads/$time/$file1_name");
// update new recored
$pic = XOOPS_URL."/modules/friendfinder/members/uploads/".$time."/".$file1_name;
$sql2 = "UPDATE ".$xoopsDB->prefix("friendfinder")." SET imgtime='$time', imgname='$file1_name', pic='$pic' WHERE uid = '$uid'";
$xoopsDB->query($sql2);
redirect_header("../index.php",4,_TEXTUPLOADSUCCESS."");

} else {
echo "
<center>
  <img src=../images/logo/".$logo." width=478 height=74><br>
  <br>
</center><center>"._TEXTPICCURRENT."<br><br><img src='$img' border=0><br><br></center>
<center><form action=pic.php?page=update&uid=$uid method=post enctype='multipart/form-data'>
<input type=file name=file1><br>";

echo"<input type=submit value=\""._TEXTPICBUTTON."\"></form></center>";
}
include "../admin/foot.php";
//************************************************************
        CloseTable();
include("../../../footer.php");
?>
