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
# Lanuage:			Engilsh														#
# Name:				eagle81 friendfinder@dancepartner.net						#
# Homepage:			http://www.dancepartner.net									#
#																				#
#                                                                               #
# Last modification:            2002-11-11										#
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

//variables for the index.php

include(XOOPS_ROOT_PATH."/modules/friendfinder/cache/config.php");
global $dateformat, $autoactive, $imagesize, $heightunit, $weightunit, $footermsgtxt;
$picsize=round ($imagesize/1024,0);

//new since 3.06
define("ADDDIRECTFRIENDS","Add to directfriends");
define("_menu3","Main configuration");
define("_TEXTLOGO","Logo for Friendfinder: ");
define("_CLA_MODIFCATEGORYIMAGE","Picture name:" );
define("_CLA_CATEGORYIMAGENAME","Picture name:" );
define("_CLA_MODIFSEXIMAGE","Picture name:" );
define("_CLA_SEXIMAGENAME","Picture name:" );
define("_TEXTTOPIC","Topic: ");
define("_TEXTICON","Icon that will be shown on index.php");
define("_TEXTCANUSEREDIT","Allow users to edit there profile: ");
define("_TEXTCANUSERDELETE","Allow users to delete there profile: ");
define("_TEXTPICUPLOAD","Allow users to upload pictures: ");
define("_TEXTSEARCHFORCOUNTRY","Should users be able to set and search by State: ");
define("_TEXTIMAGESIZEHEIGHT","Maximum height for uploaded picture (in pixel)");
define("_TEXTIMAGESIZEWIGHT","Maximum width for uploaded picture (in pixel)");
define("_TEXTUSEGENERATEIMAGE","Use generateimgae to resize pictures (GD libary is needed) ");
define("_TEXTGIMAXWIGHT","Width for generateimage (in pixel)");


//new since 3.05
define("_TEXTANONYMUSCANTMAIL","Only registerd Users can Send emails");
define("_TEXTANONYMUSSEARCH","Allow anonymus to search for profiles");
define("_TEXTANONYMUSMAIL","Allow anonymus to write eMails to profile owner");
define("_TEXTMAILTOADMIN","Should eMail send for new profiles");
define("_TEXTADMINEMAIL","Enter eMail address where new profile should send to");
define("_TEXTFOOTERMESSAGE","Enter message footer which will be added to every eMail");
define("_SELECTNOMATTER","Don't matter");


// old stuff
define("_TEXTINDEX","<br>");

define("_TEXTINDEXADD","Submit profile");

define("_TEXTINDEXSEARCH","Search for a partner");

define("_TEXTINDEXUPDATE","Edit your profile");

define("_TEXTDELETEUSER","Delete profile");

define("_TEXTVIEWPROFILE","View Your Profile");

//adminpages

define("_editdel","Edit/delete/activate entry");

define("_activatedsuccessfully","The profile was activated successfully.");

define("_Smiliese","Edit smilies");

define("_Badwords","Badwords");

define("_pref","Configuration");

define("_TEXTEMAIL","eMail address");

//select.php

define("_CLA_SAVMOD","Save");
define("_CLA_DEL","Delete");
define("_CLA_CATSMOD","Your data has changed successfully.");
define("_CLA_CATDEL","Your data has been deleted successfully.");
define("_CLA_CATADD","Your data has been saved");

define("_CLA_ADDSTATE","Add Smoking Status");
define("_CLA_STATENAME","Country name");
define("_CLA_ADD","add");
define("_CLA_STATE","Country");
define("_CLA_MODIFSTATE","Edit Smoking Status");
define("_CLA_SELECTCAT","Please choose");

define("_CLA_ADDSEX","Add sex");
define("_CLA_SEXNAME","Sex name");
define("_CLA_MODIFSEX","Edit sex");
define("_CLA_SEX","Sex");

define("_CLA_ADDCATEGORY","Add Category");
define("_CLA_CATEGORYNAME","Category name");
define("_CLA_MODIFCATEGORY","Edit Category");
define("_CLA_CATEGORY","Category");
define("_CLA_MODIFCAT","Edit Category");



//pref.php

define("_TEXTDATEFORMAT","Date format:");

define("_TEXTIMAGESIZE","Picsize in byte:");

define("_TEXTHEIGHTUNIT","Heightunit:");

define("_TEXTWEIGHTUNIT","Weightunit:");

define("_TEXTAUTOACTIVE","Autoactivation of the profiles:");

define("_PREFBUTTON","Save");

define("_ttmmjjjj","mm.DD.YYYY");

define("_jjjjmmtt","YYYY.MM:DD");

define("_CONFSAVE","Your configuration has been saved");

//view-all.php



define("_ID","ID: ");

define("_UNAME","Screen Name: ");

define("_TEXTCATEGORY","My commitment Level:");

define("_SEX", "I am a: ");

define("_NAME", "My Name: ");

define("_COUNTRY","My State: ");

define("_REGION", "Smoke: ");

define("_CITY", "MY City: ");

define("_HOBBY", "What I am looking for: ");

define("_PARTNER", "I am Looking for a: ");

define("_PIC","My Picture: ");

define("_DESCRIPTION","A little about myself: ");

define("_backtoadmin","Back to the administration page");

define("_deletet","The profile was deleted successfully...<P> Click <A HREF=./view-all.php>here</A> to go back to the Xoops Friendfinder...");

define("_activate","activate");

define("_ENTRIES","Profiles");

define("_TEXTSTATUS","Profile active:");

define("_editen","edit");

define("_delen","delete");

define("_ff_yes","yes");

define("_ff_no","no");



//delete.php

define("_TEXTUSERDELETED","Your profile was deleted successfully");

define("_TEXTDELETEBUTTON","Delete profile");

define("_TEXTWANTTODELETE","Do you really want to delete your profile");



// for email.php

define("_TEXTEMAILSENDER","Your name:");

define("_TEXTEMAILSENDERADDRESS","Your Email address:");

define("_TEXTEMAILMESSAGE","Type your message:");

define("_TEXTEMAILBUTTON","send an Email");

define("_TEXTTHANKSMAIL","Thanks for your Email, we hope you get a positive response.");

define("_TEXTPLEASECHOOSEMEMBER","Please choose a user you would like to E-mail");

define("_TEXTMAILSUBJECT","Reply from $user to your profile");

define("_TEXTEMAILMISSING","You must enter your email address");

define("_TEXTMESSAGEMISSING","You must enter a message");


// Variables for the add.php page

define("_TEXTNOXOOPSUSER","Only registered or logged in users can submit/edit or delete a profile!<br><br>");

define("_CLA_REGISTER","Please register or log in.<br>");

define("_CLA_CONECT","create a connection");

define("_CLA_OR","or");

define("_CLA_IFAREMEMBER","if you are already logged in");

define("_TEXTADDSEARCH","Search for a partner");

define("_TEXTADDSUCCESSFUL","Thank you for your entry");

define("_TEXTSEARCH","Search for a partner");

define("_TEXTADDBUTTON","Submit profile");

define("_TEXTSEX","I am: ");

define("_TEXTREALNAME","Your real name: ");

define("_TEXTCOUNTRY","Your State: ");

define("_TEXTDESCRIPTION","Your description: ");

define("_TEXTTANZ","What I am looking for: ");

define("_TEXTPSEX", "You are looking for a: ");

define("_TEXTCITY","Your city: ");

define("_TEXTHEIGHT","Height: ");

define("_TEXTWEIGHT","Weight: ");

define("_TEXTBIRTHDAY","Date of birth: ");

define("_TEXTUPLOAD","Pic: (only jpg/gif max. ".$picsize." Kb) ");

define("_USEREXISTS","You already have created a profile. You can only create one.");

define("_TEXTCITYMISSING","You have forgotten to fill out your city");

define("_TEXTYEARMISSING","You have forgotten to fill out your date of birth");

define("_FILEFORMAT","Only gif or jpg are allowed as graphic formats");

define("_US_NEWUSERREGAT","New Friendfinder profile from: ".$user."");
define("_US_HASJUSTREG","A user had submitted his profile to friendfinder :

Screen Name:                  ".$user."
Real name:                    ".$name."
I am a:                       ".$sex."
E-Mail address:               ".$email."
My State:                     ".$country."
Smoke:                       ".$state."
My City:                     ".$city."
My commitment level:         ".$partner."
What I am looking for:        ".$hobby."
My Height:                    ".$height."
My Weight:                    ".$weight."
My Date of birth:            ".$month.".".$day.".".$year."
A little bit about me:       ".$comment."

To activate the profile log in as Administrator.");

define("_TEXTSEXMISSING","Please choose your sex.");
define("_TEXTSTATEMISSING","Please choose your country");
define("_TEXTPARTNERMISSING","Please choose your partner.");
define("_TEXTCATEGORYMISSING","Please choose your category.");





//These are the variables for the search.php

define("_TEXTSEARCHUNSUCCESSFUL","Your query unfortunately results no data!");

define("_TEXTSEARCHBUTTON","Search");

define("_TEXTSEARCHSORT","Sort(ed) by: ");

define("_AGEFROM","from");

define("_AGETILL", "to");



//These are the variables for the view.php

define("_TEXTVIEWREALNAME","My name is: ");

define("_TEXTVIEWEMAIL","Send me an E-mail: ");

define("_TEXTVIEWCOUNTRY","I come from: ");

define("_TEXTREGION","Smoke: ");

define("_TEXTVIEWDESCRIPTION","All About me: ");

define("_TEXTVIEWCITY","My city is: ");

define("_TEXTAGE","My Age: ");

define("_TEXTVIEWEMAILSEND","Click here to Email");



//Member index site

define("_TEXTPROFILEUPDATED","Your profile was updated successfully.");

define("_TEXTMEMBERCHANGEPIC","Change your picture");

define("_TEXTMEMBERBUTTON","Update your profile");





//member pic site

define("_TEXTPICCURRENT","Your current picture, to delete this picture you must delete your profile");

define("_TEXTPICBUTTON","Update your picture");

define("_TEXTUPLOADSUCCESS","Your picture has been uploaded successfully.");

define("_TAGLINE","Introduction: ");



  //add.php


define("_SELECTSORT"," <select name=sort size=1>

          <option value=date selected>Date</option>

          <option value=state>State</option>

          <option value=city>City</option>

          <option value=age>Age</option></select>");






define("_SELECTCOUNTRY","<select name=country size=1>

<option value=AL>Alabama</option>

<option value=AK>Alaska</option>

<option value=AZ>Arizona</option>

<option value=AR>Arkansas</option>

<option value=CA>California</option>

<option value=CO>Colorado</option>

<option value=CN>Connecticut</option>

<option value=DE>Delaware</option>

<option value=FL>Florida</option>

<option value=GA>Georgia</option>

<option value=HA>Hawaii</option>

<option value=ID>Idaho</option>

<option value=IL>Illinois</option>

<option value=IN>Indiana</option>

<option value=IO>Iowa</option>

<option value=KA>Kansas</option>

<option value=KY>Kentucky</option>

<option value=LO>Louisiana</option>

<option value=>Maine</option>

<option value=MY>Maryland</option>

<option value=MA>Massachusetts</option>

<option value=MI>Michigan</option>

<option value=MN>Minnesota</option>

<option value=MS>Mississippi</option>

<option value=MR>Missouri</option>

<option value=MN>Montana</option>

<option value=NB>Nebraska</option>

<option value=NV>Nevada</option>

<option value=NH>New Hampshire</option>

<option value=NJ>New Jersey</option>

<option value=NM>New Mexico</option>

<option value=NY>New York</option>

<option value=NC>North Carolina</option>

<option value=ND>North Dakota</option>

<option value=OH>Ohio</option>

<option value=OK>Oklahoma</option>

<option value=OR>Oregon</option>

<option value=PN>Pennsylvania</option>

<option value=RI>Rhode Island</option>

<option value=SC>South Carolina</option>

<option value=SD>South Dakota</option>

<option value=TN>Tennessee</option>

<option value=TX>Texas</option>

<option value=UT>Utah</option>

<option value=VT>Vermont</option>

<option value=VR>Virginia</option>

<option value=WA>Washington</option>

<option value=WV>West Virginia</option>

<option value=WI>Wisconsin</option>

<option value=WY>Wyoming</option>

<option value=CD>Canada</option>

<option value=EU>Europe</option>

<option value=MX>Mexico</option>

<option value=CM>Central America</option>

<option value=SA>South America</option>

<option value=ME>Middle East</option>

<option value=AS>Asia</option>

<option value=OT>Other</option>

</select> ");









?>
