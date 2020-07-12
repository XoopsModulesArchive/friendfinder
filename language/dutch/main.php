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
# Lanuage:			Dutch														#
# Name:				mike mike@jeweetwel.net										#
# Homepage:			http://www.xoops.nl											#
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
define("_TEXTSEARCHFORCOUNTRY","Should useres be able to set and search for country: ");
define("_TEXTIMAGESIZEHEIGHT","Maximum height for uploaded picture (in pixel)");
define("_TEXTIMAGESIZEWIGHT","Maximum width for uploaded picture (in pixel)");
define("_TEXTUSEGENERATEIMAGE","Use generateimgae to resize pictures (GD libary is needed) ");
define("_TEXTGIMAXWIGHT","Width for generateimage (in pixel)");
//new since 3.05
define("_TEXTANONYMUSCANTMAIL","Only registerd Users can write emails");
define("_TEXTANONYMUSSEARCH","Allow anonymus to search for profiles");
define("_TEXTANONYMUSMAIL","Allow anonymus to write eMails to profile owner");
define("_TEXTMAILTOADMIN","Should eMail send for new profiles");
define("_TEXTADMINEMAIL","Enter eMail address where new profile hould send to");
define("_TEXTFOOTERMESSAGE","Enter message footer which will be added to every eMail");
define("_SELECTNOMATTER","Don't matter");
//old stuff

define("_TEXTINDEX","Welkome bij de Friendfinder op ".$xoopsConfig['sitename'].",<br>

waarmee je vandaag nog je perfecte partner kunt vinden ;-)");

define("_TEXTINDEXADD","Inzenden profiel");

define("_TEXTINDEXSEARCH","Zoek een partner");

define("_TEXTINDEXUPDATE","Wijzig je profiel");

define("_TEXTDELETEUSER","Verwijder profiel");



//adminpages

define("_editdel","Wijzig/ Verwijder/ Activeren");

define("_activatedsuccessfully","Het profiel is nu aktief");

define("_Smiliese","Wijzig smilies");

define("_Badwords","Ongewenste woorden");

define("_pref","Configuratie");

define("_TEXTEMAIL","email adres");

//select.php

define("_CLA_SAVMOD","Opslaan");
define("_CLA_DEL","Verwijderen");
define("_CLA_CATSMOD","Je gegevens zijn aangepast.");
define("_CLA_CATDEL","Je gegevens zijn gewist.");
define("_CLA_CATADD","Je gegevens zijn opgeslagen");

define("_CLA_ADDSTATE","Voeg een regio toe");
define("_CLA_STATENAME","Regio");
define("_CLA_ADD","toevoegen");
define("_CLA_STATE","Regio");
define("_CLA_MODIFSTATE","Wijzig regio");
define("_CLA_SELECTCAT","Selecteer");

define("_CLA_ADDSEX","Toevoegen");
define("_CLA_SEXNAME","Sex categorie");
define("_CLA_MODIFSEX","Wijzig sexe");
define("_CLA_SEX","Sex");

define("_CLA_ADDCATEGORY","Toevoegen categorie");
define("_CLA_CATEGORYNAME","Categorie");
define("_CLA_MODIFCATEGORY","Wijzig Categorie");
define("_CLA_CATEGORY","Categorie");
define("_CLA_MODIFCAT","Wijzig categorie");



//pref.php

define("_TEXTDATEFORMAT","Datum format:");

define("_TEXTIMAGESIZE","Afbeelding - in Kb:");

define("_TEXTHEIGHTUNIT","Hoogte:");

define("_TEXTWEIGHTUNIT","Breedte:");

define("_TEXTAUTOACTIVE","Autoactiveren profielen:");

define("_PREFBUTTON","Opslaan");

define("_ttmmjjjj","DD.MM.JJJJ");

define("_jjjjmmtt","JJJJ.MM:DD");

define("_CONFSAVE","De configuratie is opgeslagen");

//view-all.php



define("_ID","ID: ");

define("_UNAME","Gebruikersnaam: ");

define("_TEXTCATEGORY","Categorie:");

define("_SEX", "Geslacht: ");

define("_NAME", "Naame: ");

define("_COUNTRY","Land: ");

define("_REGION", "Provincie: ");

define("_CITY", "Stad: ");

define("_HOBBY", "Hobby: ");

define("_PARTNER", "Partner: ");

define("_PIC","Pic: ");

define("_DESCRIPTION","Omschrijving: ");

define("_backtoadmin","Terug naar de administration page");

define("_deletet","The profile was deleted successfully...<P> Click <A HREF=./view-all.php>here</A> to go back to the Xoops Friendfinder...");

define("_activate","activeren");

define("_ENTRIES","Profielen");

define("_TEXTSTATUS","Activeer profiel:");

define("_editen","wijzig");

define("_delen","verwijderen");

define("_ff_yes","ja");

define("_ff_no","nee");



//delete.php

define("_TEXTUSERDELETED","Je profiel is gewist");

define("_TEXTDELETEBUTTON","Verwijder profiel");

define("_TEXTWANTTODELETE","Weet je zeker dat het profiel gewist moet worden");



// for email.php

define("_TEXTEMAILSENDER","Naam:");

define("_TEXTEMAILSENDERADDRESS","Email:");

define("_TEXTEMAILMESSAGE","Bericht:");

define("_TEXTEMAILBUTTON","Verstuur email");

define("_TEXTTHANKSMAIL","Bedankt voor het aanmelden bij FriendFinder.");

define("_TEXTPLEASECHOOSEMEMBER","Selecteer de gebruiker die je wilt email");

define("_TEXTMAILSUBJECT","Reactie van '$name' op je FriendFinder profiel op ".$xoopsConfig['sitename']."");





// Variables for the add.php page

define("_TEXTNOXOOPSUSER","Alleen geregistreerde gebruikers kunnen profielen wissen en wijzigen<br><br>");

define("_CLA_REGISTER","Registreer aub of gebruik je logingegevens.<br>");

define("_CLA_CONECT","maak een connectie");

define("_CLA_OR","of");

define("_CLA_IFAREMEMBER","als je al bent ingelogd");

define("_TEXTADDSEARCH","Zoek naar een partner");

define("_TEXTADDSUCCESSFUL","Bedankt voor je aanmelding");

define("_TEXTSEARCH","Zoek naar een partner");

define("_TEXTADDBUTTON","Profiel inzenden");

define("_TEXTSEX","Ik ben: ");

define("_TEXTREALNAME","Je echte naam: ");

define("_TEXTCOUNTRY","Land: ");

define("_TEXTDESCRIPTION","Extra informatie: ");

define("_TEXTTANZ","Hobbies: ");

define("_TEXTPSEX", "Je bent op zoek naar een: ");

define("_TEXTCITY","Stad: ");

define("_TEXTHEIGHT","Lengte: ");

define("_TEXTWEIGHT","Gewicht: ");

define("_TEXTBIRTHDAY","Geboortedatum: ");

define("_TEXTUPLOAD","Foto: (jpg/gif van max. ".$picsize." kb) ");

define("_USEREXISTS","Er is maar 1 profiel mogelijk per gebruiker.");

define("_TEXTCITYMISSING","Je bent vergeten een Woonplaats in te vullen.");

define("_TEXTYEARMISSING","Je hebt vergeten je geboortedatum in te vullen.");

define("_FILEFORMAT","jpg en gif zijn de enige toegestane grafische formaten");

define("_US_NEWUSERREGAT","Een nieuw Friendfinder profiel van: ".$user."");
define("_US_HASJUSTREG","Een gebruiker heeft zojuist zijn of haar FriendFinder profiel ingezonden :

Gebruikersnaam:              ".$user."
Echte naam                   ".$name."
Sex:                         ".$sex."
Emailadres:                  ".$email."
Land:                        ".$country."
Provincie:                   ".$state."
Stad:                        ".$city."
Partner:                     ".$partner."
Hobbies:                     ".$hobby."
Lengte:                      ".$height."
Gewicht:                     ".$weight."
Geboortedatum:               ".$day.".".$month.".".$year."
Omschrijving:                ".$comment."

Om het profiel te activeren moet je inloggen als administrator.");

define("_TEXTSEXMISSING","Selecteer je geslacht.");
define("_TEXTSTATEMISSING","Selecteer je provincie");
define("_TEXTPARTNERMISSING","Selecteer je partner.");
define("_TEXTCATEGORYMISSING","Selecteer je categorie.");





//These are the variables for the search.php

define("_TEXTSEARCHUNSUCCESSFUL","Je zoekaktie heeft geen resultaten opgeleverd!");

define("_TEXTSEARCHBUTTON","Zoek een partner");

define("_TEXTSEARCHSORT","Sorteren op: ");

define("_AGEFROM","van");

define("_AGETILL", "tot");



//These are the variables for the view.php

define("_TEXTVIEWREALNAME","Mijn naam is: ");

define("_TEXTVIEWEMAIL","Email: ");

define("_TEXTVIEWCOUNTRY","Land: ");

define("_TEXTREGION","Provincie: ");

define("_TEXTVIEWDESCRIPTION","Omschrijving: ");

define("_TEXTVIEWCITY","Mijn woonplaats is: ");

define("_TEXTAGE","Leeftijd: ");

define("_TEXTVIEWEMAILSEND","Klik hier om te emailen");



//Member index site

define("_TEXTPROFILEUPDATED","Je profiel is succesvol aangepast.");

define("_TEXTMEMBERCHANGEPIC","Wijzig je foto");

define("_TEXTMEMBERBUTTON","Aanpassen profiel");





//member pic site

define("_TEXTPICCURRENT","Je huidige foto");

define("_TEXTPICBUTTON","Aanpassen foto");

define("_TEXTUPLOADSUCCESS","Je foto is succesvol aangepast.");




  //add.php


define("_SELECTSORT"," <select name=sort size=1>

          <option value=date selected>Datum</option>

          <option value=state>Provincie</option>

          <option value=city>Stad</option>

          <option value=age>LeeftijdAge</option></select>");






define("_SELECTCOUNTRY","<select name=country size=1>

<option value=AU>Australia</option>

<option value=NZ>New Zealand</option>

<option value=>----------------------------------</option>

<option value=>- Bitte w&auml;hlen -</option>

<option selected value=DE>Deutschland</option>

<option value=AT>&Ouml;sterreich</option>

<option value=CH>Schweiz</option>

<option value=LI>Liechtenstein</option>

<option value=AF>Afghanistan</option>

<option value=AL>Albania</option>

<option value=DZ>Algeria</option>

<option value=AS>American Samoa</option>

<option value=AD>Andorra</option>

<option value=AO>Angola</option>

<option value=AI>Anguilla</option>

<option value=AQ>Antarctica</option>

<option value=AG>Antigua And Barbuda</option>

<option value=AR>Argentina</option>

<option value=AM>Armenia</option>

<option value=AW>Aruba</option>

<option value=AZ>Azerbaijan</option>

<option value=BS>Bahamas</option>

<option value=BH>Bahrain</option>

<option value=BD>Bangladesh</option>

<option value=BB>Barbados</option>

<option value=BY>Belarus</option>

<option value=BE>Belgium</option>

<option value=BZ>Belize</option>

<option value=BJ>Benin</option>

<option value=BM>Bermuda</option>

<option value=BT>Bhutan</option>

<option value=BO>Bolivia</option>

<option value=BA>Bosnia And Herzegowina</option>

<option value=BW>Botswana</option>

<option value=BV>Bouvet Island</option>

<option value=BR>Brazil</option>

<option value=IO>British Indian Ocean Territory</option>

<option value=BN>Brunei Darussalam</option>

<option value=BG>Bulgaria</option>

<option value=BF>Burkina Faso</option>

<option value=BI>Burundi</option>

<option value=KH>Cambodia</option>

<option value=CM>Cameroon</option>

<option value=CA>Canada</option>

<option value=CV>Cape Verde</option>

<option value=KY>Cayman Islands</option>

<option value=CF>Central African Republic</option>

<option value=TD>Chad</option>

<option value=CL>Chile</option>

<option value=CN>China</option>

<option value=CX>Christmas Island</option>

<option value=CC>Cocos (Keeling) Islands</option>

<option value=CO>Colombia</option>

<option value=KM>Comoros</option>

<option value=CG>Congo</option>

<option value=CK>Cook Islands</option>

<option value=CR>Costa Rica</option>

<option value=CI>Cote D' Ivoire</option>

<option value=HR>Croatia</option>

<option value=CU>Cuba</option>

<option value=CY>Cyprus</option>

<option value=CZ>Czech Republic</option>

<option value=DK>Denmark</option>

<option value=DE>Deutschland</option>

<option value=DJ>Djibouti</option>

<option value=DM>Dominica</option>

<option value=DO>Dominican Republic</option>

<option value=TP>East Timor</option>

<option value=EC>Ecuador</option>

<option value=EG>Egypt</option>

<option value=SV>El Salvador</option>

<option value=GQEquatorial Guinea</option>

<option value=ER>Eritrea</option>

<option value=ES>Espana</option>

<option value=EE>Estonia</option>

<option value=ET>Ethiopia</option>

<option value=FK>Falkland Islands</option>

<option value=FO>Faroe Islands</option>

<option value=FJ>Fiji</option>

<option value=FI>Finland</option>

<option value=FR>France</option>

<option value=FX>France, Metropolitan</option>

<option value=GF>French Guiana</option>

<option value=PF>French Polynesia</option>

<option value=TF>French Southern Territories</option>

<option value=GA>Gabon</option>

<option value=GM>Gambia</option>

<option value=GE>Giorgia</option>

<option value=DE>Germany</option>

<option value=GH>Ghana</option>

<option value=GI>Gibraltar</option>

<option value=GR>Greece</option>

<option value=GL>Greenland</option>

<option value=GD>Grenada</option>

<option value=GP>Guadeloupe</option>

<option value=GU>Guam</option>

<option value=GT>Guatemala</option>

<option value=GN>Guinea</option>

<option value=GW>Guinea-Bissau</option>

<option value=GY>Guyana</option>

<option value=HT>Haiti</option>

<option value=HM>Heard And Nc Donald Islands</option>

<option value=HN>Honduras</option>

<option value=HU>Hungary</option>

<option value=IS>Iceland</option>

<option value=IN>India</option>

<option value=ID>Indonesia</option>

<option value=IR>Iran</option>

<option value=IQ>Iraq</option>

<option value=IE>Ireland</option>

<option value=IL>Israel</option>

<option value=IT>Italy</option>

<option value=JM>Jamaica</option>

<option value=JP>Japan</option>

<option value=JO>Jordan</option>

<option value=KZ>Kazakhstan</option>

<option value=KE>Kenya</option>

<option value=KI>Kiribati</option>

<option value=KP>North Korea (People's Republic Of Korea)</option>

<option value=KR>South Korea (Republic Of Korea)</option>

<option value=KW>Kuwait</option>

<option value=KG>Kyrgyzstan</option>

<option value=LA>Lao People's Republic</option>

<option value=LV>Latvia</option>

<option value=LB>Lebanon</option>

<option value=LS>Lesotho</option>

<option value=LR>Liberia</option>

<option value=LY>Libyan Arab Jamahiriya</option>

<option value=LI>Liechtenstein</option>

<option value=LT>Lithunia</option>

<option value=LU>Luxembourg</option>

<option value=MO>Macau</option>

<option value=MK>Macedonia</option>

<option value=MG>Madagascar</option>

<option value=MW>Malawi</option>

<option value=MY>Malaysia</option>

<option value=MV>Maldives</option>

<option value=ML>Mali</option>

<option value=MT>Malta</option>

<option value=MH>Marshall Islands</option>

<option value=MQ>Martinique</option>

<option value=MR>Mauritania</option>

<option value=MU>Mauritius</option>

<option value=YT>Mayotte</option>

<option value=MX>Mexico</option>

<option value=FM>Micronesia</option>

<option value=MD>Moldova</option>

<option value=MC>Monaco</option>

<option value=MN>Mongolia</option>

<option value=MS>Montserrat</option>

<option value=MA>Morocco</option>

<option value=MZ>Mozambique</option>

<option value=MM>Myanmar</option>

<option value=NA>Namibia</option>

<option value=NR>Nauru</option>

<option value=NP>Nepal</option>

<option value=NL>Netherlands</option>

<option value=AN>Netherlands Antilles</option>

<option value=NC>New Caledonia</option>

<option value=NI>Nicaragua</option>

<option value=NE>Niger</option>

<option value=NG>Nigeria</option>

<option value=NU>Niue</option>

<option value=NF>Norfolk Island</option>

<option value=MP>Northern Mariana Islands</option>

<option value=NO>Norway</option>

<option value=AT>&Ouml;sterreich</option>

<option value=OM>Oman</option>

<option value=PK>Pakistan</option>

<option value=PW>Palau</option>

<option value=PA>Panama</option>

<option value=PG>Papua New Guinea</option>

<option value=PY>Paraguay</option>

<option value=PE>Peru</option>

<option value=PH>Philippines</option>

<option value=PN>Pitcairn</option>

<option value=PL>Poland</option>

<option value=PT>Portugal</option>

<option value=PR>Puerto Rico</option>

<option value=QA>Qatar</option>

<option value=RE>Reunion</option>

<option value=RO>Romania</option>

<option value=RU>Ran Federation</option>

<option value=RW>Rwanda</option>

<option value=KN>Saint Kitts And Nevis</option>

<option value=LCSaint Lucia</option>

<option value=VC>Saint Vincent And The Grenadines</option>

<option value=WS>Samoa</option>

<option value=SM>San Marino</option>

<option value=ST>Sao Tome And Principe</option>

<option value=SA>Saudi Arabia</option>

<option value=CH>Schweiz</option>

<option value=SN>Senegal</option>

<option value=SCSeychelles</option>

<option value=SL>Siearra Leone</option>

<option value=SG>Singapore</option>

<option value=SK>Slovakia</option>

<option value=SI>Slovenia</option>

<option value=SB>Solomon Islands</option>

<option value=SO>Somalia</option>

<option value=ZA>South Africa</option>

<option value=GS>South Georgia And The South Sandwich Islands</option>

<option value=ES>Spain</option>

<option value=LK>Sri Lanka</option>

<option value=SH>St. Helena</option>

<option value=PM>St. Pierre And Miquelon</option>

<option value=SD>Sudan</option>

<option value=SR>Suriname</option>

<option value=SJ>Svalbard And Jan Mayen Islands</option>

<option value=SZ>Swaziland</option>

<option value=SE>Sweden</option>

<option value=SY>Syrian Arab Republic</option>

<option value=TW>Taiwan</option>

<option value=TJ>Tajikistan</option>

<option value=TZ>Tanzania</option>

<option value=TH>Thailand</option>

<option value=TG>Togo</option>

<option value=TK>Tokelau</option>

<option value=TO>Tonga</option>

<option value=TT>Trinidad And Tobago</option>

<option value=TN>Tunisia</option>

<option value=TR>Turkey</option>

<option value=TM>Turkmenistan</option>

<option value=TC>Turks And Caicos Islands</option>

<option value=TVTuvalu</option>

<option value=UG>Uganda</option>

<option value=UA>Ukraine</option>

<option value=AE>United Arab Emirates</option>

<option value=GB>United Kingdom</option>

<option value=UY>Uruguay</option>

<option value=US>U.S.A</option>

<option value=UM>U.S. Minor Outlying Islands</option>

<option value=UZ>Uzbekistan</option>

<option value=VU>Vanuatu</option>

<option value=VA>Vatican City State</option>

<option value=VE>Venezuela</option>

<option value=VN>Viet Nam</option>

<option value=VG>Virgin Islands (British)</option>

<option value=VI>Virgin Islands (US)</option>

<option value=WF>Wallis And Futuna Islands</option>

<option value=EH>Western Sahara</option>

<option value=YE>Yemen</option>

<option value=ZR>Zaire</option>

<option value=ZM>Zambia</option>

<option value=ZW>Zimbabwe</option>

<option value=ZZ>Anderes Land (nicht angezeigt)</option>

</select> ");









?>
