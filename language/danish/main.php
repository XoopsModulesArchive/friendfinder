<?php
#################################################################################
# Friend Finder for Xoops 1.3.x and Xoops 2.xx Version 3.1 beta                 #
#                                                                               #
# 			Copyright 2003 by eagle81					    #
#											    #
# Manuel Caballero	 	friendfinder@dancepartner.net			    #
# Module Homepage:		http://www.dancepartner.net				    #
#											    #
# Please report bugs and new feature request at modcentral.com friendfinder	    #
# forum or via mail frienfinder@dancepartner.net  				    #
#										           #
# Copyright for this langfile							    #
# Lanuage:			Danish							    #
# Name:		       Farsus  farsusxteam@farsus.dk			    #
# Homepage:			http://www.farsus.dk  				    #
#											    #
#                                                                              #
# Last modification:            2003-02-14					    #
#                                                                              #
# Initialy this script is based on phpMeet from                                #
# Jeremy Ross 					webmaster@phprank.com          #
# Script design  : PhpMeet  	Copyright 2002 -                             #
# Created 15/01/02              Last Modified 15/01/02                         #
# Scripts Home                  http://www.jrscripts.com                       #
#											    #
# First Xoops Versions from:                   					    #
#                                                                              #
# Xoops-RC2 French Version  :   jokerman@free.fr                               #
# Web Home                  :   http://www.webetfric.com                       #
#                                                                              #
# Xoops-RC2 English Version :   webmaster@modscentral.com                      #
# Web Home                  :   http://www.modscentral.com                     #
################################################################################


//variables for the index.php
include(XOOPS_ROOT_PATH."/modules/friendfinder/cache/config.php");
global $dateformat, $autoactive, $imagesize, $heightunit, $weightunit, $footermsgtxt;
$picsize=round ($imagesize/1024,0);

//new since 3.06
define("ADDDIRECTFRIENDS","Tilføj til directfriends");
define("_menu3","Hoved konfiguration");
define("_TEXTLOGO","Logo for Friendfinder: ");
define("_CLA_MODIFCATEGORYIMAGE","Billede navn:" );
define("_CLA_CATEGORYIMAGENAME","Billede navn:" );
define("_CLA_MODIFSEXIMAGE","Billede navn:" );
define("_CLA_SEXIMAGENAME","Billede navn:" );
define("_TEXTTOPIC","Emne: ");
define("_TEXTICON","Icon der vil blive vist i index.php");
define("_TEXTCANUSEREDIT","Tillad brugere at rette deres profil: ");
define("_TEXTCANUSERDELETE","Tillad brugere at slette deres profil: ");
define("_TEXTPICUPLOAD","Tillad brugere at uploade Billede: ");
define("_TEXTSEARCHFORCOUNTRY","Skal det være muligt at sætte og søge efter Land: ");
define("_TEXTIMAGESIZEHEIGHT","Maksimum højde på uploaded Billede (i pixel)");
define("_TEXTIMAGESIZEWIGHT","Maksimum bredde på uploaded Billede (i pixel)");
define("_TEXTUSEGENERATEIMAGE","Brug generateimgage til at resize Billede (GD libary er nødvendig) ");
define("_TEXTGIMAXWIGHT","Bredde på generateimage (i pixel)");
//new since 3.05
define("_TEXTANONYMUSCANTMAIL","Kun registerede brugere kan skrive emails");
define("_TEXTANONYMUSSEARCH","Tillad anonymus at søge på profiler");
define("_TEXTANONYMUSMAIL","Tillad anonymus at skrive eMails til profile ejer");
define("_TEXTMAILTOADMIN","Skal eMail sendes til nye profiler");
define("_TEXTADMINEMAIL","Indtast eMail addresse hvor nye profiler skal sendes til");
define("_TEXTFOOTERMESSAGE","Indtast Meddelelse i footer som vil blive tilføjet til ale eMail");
define("_SELECTNOMATTER","Det er lige meget");
//old stuff

define("_TEXTINDEX","Velkommen til Friendfinder søger hos ".$xoopsConfig['sitename'].",<br>

Her kan du måske være heldig at finde den perfekte partner");

define("_TEXTINDEXADD","Tilføj profil");

define("_TEXTINDEXSEARCH","Søg efter en partner");

define("_TEXTINDEXUPDATE","Rette din profil");

define("_TEXTDELETEUSER","Slette profil");



//adminpages

define("_editdel","Rette/ Slette/Aktivere");

define("_activatedsuccessfully","Profile Aktivering Udført.");

define("_Smiliese","Rette smilies");

define("_Badwords","FYords");

define("_pref","Konfiguration");

define("_TEXTEMAIL","E-Post addresse");

//select.php

define("_CLA_SAVMOD","Gemme");
define("_CLA_DEL","Slette");
define("_CLA_CATSMOD","Dine data er Opdateret.");
define("_CLA_CATDEL","Dine data er nu Slettet!!.");
define("_CLA_CATADD","Dine data er nu Gemt!");

define("_CLA_ADDSTATE","Tilføj region");
define("_CLA_STATENAME","Region navn");
define("_CLA_ADD","Tilføj");
define("_CLA_STATE","Region");
define("_CLA_MODIFSTATE","Rette region");
define("_CLA_SELECTCAT","Vælg Venligst");

define("_CLA_ADDSEX","Tilføj Køn");
define("_CLA_SEXNAME","Køn navn");
define("_CLA_MODIFSEX","Rette Køn");
define("_CLA_SEX","Køn");

define("_CLA_ADDCATEGORY","Tilføje Kategorie");
define("_CLA_CATEGORYNAME","Kategorie navn");
define("_CLA_MODIFCATEGORY","Rette Kategorie");
define("_CLA_CATEGORY","Kategorie");
define("_CLA_MODIFCAT","Rette Kategorie");



//pref.php

define("_TEXTDATEFORMAT","Dato format:");

define("_TEXTIMAGESIZE","Pic. størrelse i byte:");

define("_TEXTHEIGHTUNIT","Højde :");

define("_TEXTWEIGHTUNIT","Vægt :");

define("_TEXTAUTOACTIVE","Automatisk af profiler:");

define("_PREFBUTTON","Gemme");

define("_ttmmjjjj","DD.MM.YYYY");

define("_jjjjmmtt","YYYY.MM:DD");

define("_CONFSAVE","Din Konfiguration er blevet Gemt!");

//view-all.php



define("_ID","ID: ");

define("_UNAME","Brugernavn: ");

define("_TEXTCATEGORY","Kategorie:");

define("_SEX", "Køn: ");

define("_NAME", "Navn: ");

define("_COUNTRY","Land: ");

define("_REGION", "Stat: ");

define("_CITY", "By: ");

define("_HOBBY", "Hobby: ");

define("_PARTNER", "Partner: ");

define("_PIC","Pic: ");

define("_DESCRIPTION","Beskrivelse: ");

define("_backtoadmin","Tilbage til administration's siden");

define("_deletet","Profilen er nu Slettet...<P> Tryk <A HREF=./view-all.php>her</A> for at komme tilbage til Xoops Partner Søger...");

define("_activate","aKtivere");

define("_ENTRIES","Profiler");

define("_TEXTSTATUS","Profil aktiv:");

define("_editen","rette");

define("_delen","slette");

define("_ff_yes","ja");

define("_ff_no","nej");



//delete.php

define("_TEXTUSERDELETED","Din Profil er nu Slettet!!");

define("_TEXTDELETEBUTTON","Slette profil");

define("_TEXTWANTTODELETE","Er du sikker på du vil Slette din profil?");



// for email.php

define("_TEXTEMAILSENDER","Dit navn:");

define("_TEXTEMAILSENDERADDRESS","Din E-Post addresse:");

define("_TEXTEMAILMESSAGE","Dit brev:");

define("_TEXTEMAILBUTTON","send E-Post");

define("_TEXTTHANKSMAIL","Tak for din E-Post, vi håber du vil få et positivt svar.");

define("_TEXTPLEASECHOOSEMEMBER","Vælg venligst den bruger, du kune tænke dig at sende E-Post");

define("_TEXTMAILSUBJECT","Svar fra $name til din profil hos ".$xoopsConfig['sitename']."");





// Variables for the add.php page

define("_TEXTNOXOOPSUSER","Kun registerede eller indloggede brugere kan tilføje/rette eller Slette en profile!<br><br>");

define("_CLA_REGISTER","Register venligst eller log in.<br>");

define("_CLA_CONECT","Opret en forbindelse");

define("_CLA_OR","eller");

define("_CLA_IFAREMEMBER","Hvis du allerede er Logget ind");

define("_TEXTADDSEARCH","Søg efter en partner");

define("_TEXTADDSUCCESSFUL","VI takker.");

define("_TEXTSEARCH","Søg efter en partner");

define("_TEXTADDBUTTON","Tilføje profil");

define("_TEXTSEX","Jeg er: ");

define("_TEXTREALNAME","Dit rigtige navn: ");

define("_TEXTCOUNTRY","Dit Land: ");

define("_TEXTDESCRIPTION","Din beskrivelse: ");

define("_TEXTTANZ","Hobby: ");

define("_TEXTPSEX", "Du søger en: ");

define("_TEXTCITY","Din By: ");

define("_TEXTHEIGHT","Højde: ");

define("_TEXTWEIGHT","Vægt: ");

define("_TEXTBIRTHDAY","Fødselsdag: ");

define("_TEXTUPLOAD","Pic: (Kun jpg/gif max. ".$picsize." kb) ");

define("_USEREXISTS","Du har allerede en profile. Og du kan kun oprette en.");

define("_TEXTCITYMISSING","Du har glemt at udfylde din By");

define("_TEXTYEARMISSING","Du har glemt at udfylde din fødselsdato!");

define("_FILEFORMAT","Kun gif or jpg er tilladte grfisk formater");

define("_US_NEWUSERREGAT","Ny Søg Partner profil: ".$user."");
define("_US_HASJUSTREG","En bruger har tilføjet denne profil til partner søgeren  :

Brugernavn:                  ".$user."
Rigtige Navn:                ".$name."
Køn:                         ".$sex."
E-Post addresse:             ".$email."
Land:                        ".$country."
Stat:                        ".$state."
By:                          ".$city."
Partner:                     ".$partner."
Hobby'er:                    ".$hobby."
Højde:                       ".$height."
Vægt:                        ".$weight."
Fødselsdag:               ".$day.".".$month.".".$year."
Description:                 ".$comment."

For at aktivere Denne profil log ind som Administrator.");

define("_TEXTSEXMISSING","Vælg venligst dit køn.");
define("_TEXTSTATEMISSING","Vælg venligst din region");
define("_TEXTPARTNERMISSING","Vælg venligst din partner.");
define("_TEXTCATEGORYMISSING","Vælg venligst din Kategorie.");





//These are the variables for the search.php

define("_TEXTSEARCHUNSUCCESSFUL","Din søgning resulterede desværre ikke i noget!");

define("_TEXTSEARCHBUTTON","Søg partner");

define("_TEXTSEARCHSORT","Ordnet efter: ");

define("_AGEFROM","fra");

define("_AGETILL", "til");



//These are the variables for the view.php

define("_TEXTVIEWREALNAME","Mit navn er: ");

define("_TEXTVIEWEMAIL","E-Post: ");

define("_TEXTVIEWCOUNTRY","jeg kommer fra: ");

define("_TEXTREGION","Stat: ");

define("_TEXTVIEWDESCRIPTION","Beskrivelse: ");

define("_TEXTVIEWCITY","Jeg bor i: ");

define("_TEXTAGE","Alder: ");

define("_TEXTVIEWEMAILSEND","Tryk her for at sende E_post");



//Member index site

define("_TEXTPROFILEUPDATED","Din Profil er Opdateret.");

define("_TEXTMEMBERCHANGEPIC","Skifte dit billede");

define("_TEXTMEMBERBUTTON","Opdatere profil");





//member pic site

define("_TEXTPICCURRENT","Dit nuværende Billede");

define("_TEXTPICBUTTON","Opdateret billede");

define("_TEXTUPLOADSUCCESS","Dit billede er Oploadet.");




  //add.php


define("_SELECTSORT"," <select name=sort size=1>

          <option value=date selected>Dato</option>

          <option value=state>Stat</option>

          <option value=city>By</option>

          <option value=age>Alder</option></select>");






define("_SELECTCOUNTRY","<select name=country size=1>

<option value=AU>Australia</option>

<option value=NZ>New Zealand</option>

<option value=>----------------------------------</option>

<option value=>- Vælg Venligst -</option>

<option selected value=DE>Tyskland</option>

<option value=AT>Østrig</option>

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

<option value=DK>Danmark</option>

<option value=DE>Tyskland</option>

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
