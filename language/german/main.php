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
# Lanuage:			German														#
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
define("ADDDIRECTFRIENDS","Zu Directfriends hinzufügen");
define("_menu3","Haupt Configuration");
define("_TEXTLOGO","Logo für Friendfinder: ");
define("_CLA_MODIFCATEGORYIMAGE","Bildname:" );
define("_CLA_CATEGORYIMAGENAME","Bildname:" );
define("_CLA_MODIFSEXIMAGE","Bildname:" );
define("_CLA_SEXIMAGENAME","Bildname:" );
define("_TEXTTOPIC","Überschrift: ");
define("_TEXTICON","Icon das auf der index.php angezeigt werden soll");
define("_TEXTCANUSEREDIT","Usern erlauben ihr Profil zu ändern: ");
define("_TEXTCANUSERDELETE","Usern erlauben ihr Profil zu löschen: ");
define("_TEXTPICUPLOAD","Usern erlauben Bilder hochzuladen: ");
define("_TEXTSEARCHFORCOUNTRY","Sollen User auch nach dem Land suchen können: ");
define("_TEXTIMAGESIZEHEIGHT","Maximale Höhe der hochzuladenden Bilder (in Pixel)");
define("_TEXTIMAGESIZEWIGHT","Maximale Breite der hochzuladenden Bilder (in Pixel)");
define("_TEXTUSEGENERATEIMAGE","Benutze generateimage zur Größenanpassung ");
define("_TEXTGIMAXWIGHT","Breite für generateimage (in Pixel)");
//new since 3.05
define("_TEXTANONYMUSCANTMAIL","Nur registrierte User können eMails schreiben.");
define("_TEXTANONYMUSSEARCH","Darf Anonymus Profile suchen?");
define("_TEXTANONYMUSMAIL","Darf Anonymus eMails schicken");
define("_TEXTMAILTOADMIN","Soll eine eMail geschickt werden, wenn ein neues Profil erstellt wurde");
define("_TEXTADMINEMAIL","eMailadresse an die die neuen Profile gesendet werden soll");
define("_TEXTFOOTERMESSAGE","Nachrichtenfooter der an jede ausgehende eMail angehängt wird");
define("_SELECTNOMATTER","egal");
//old stuff

define("_TEXTINDEX","Herzlich willkommen zum Friendfinder von ".$xoopsConfig['sitename'].", hier findest du bestimmt deinen Partner");
define("_TEXTINDEXADD","Anzeige aufgeben");
define("_TEXTINDEXSEARCH","Anzeige suchen");
define("_TEXTINDEXUPDATE","Anzeige updaten");
define("_TEXTDELETEUSER","Anzeige löschen");

//adminpages
define("_editdel","Eintrag löschen / bearbeiten / aktivieren");
define("_activatedsuccessfully","Die Anzeige wurde erfolgreich aktiviert.");
define("_Smiliese","Smilies bearbeiten");
define("_Badwords","Badwords");
define("_pref","Allgemeine Konfiguration");
define("_TEXTEMAIL","Email Adresse");

//select.php

define("_CLA_SAVMOD","Speichern");
define("_CLA_DEL","Löschen");
define("_CLA_CATSMOD","Die Daten wurden erfolgreich geändert.");
define("_CLA_CATDEL","Die Daten wurden erfolgreich gelöscht");
define("_CLA_CATADD","Die Daten wurden übernommen");

define("_CLA_ADDSTATE","Region hinzufügen");
define("_CLA_STATENAME","Name der Region");
define("_CLA_ADD","Hinzufügen");
define("_CLA_STATE","Region");
define("_CLA_MODIFSTATE","Region bearbeiten");


define("_CLA_ADDSEX","Geschlecht hinzufügen");
define("_CLA_SEXNAME","Name des Geschlechts");
define("_CLA_MODIFSEX","Geschlecht bearbeiten");
define("_CLA_SEX","Geschlecht");

define("_CLA_ADDCATEGORY","Kategorie hinzufügen");
define("_CLA_CATEGORYNAME","Name der Kategorie");
define("_CLA_MODIFCATEGORY","Kategorie bearbeiten");
define("_CLA_CATEGORY","Kategorie");
define("_CLA_MODIFCAT","Kategorie bearbeiten");


//pref.php
define("_TEXTDATEFORMAT","Datumsformat:");
define("_TEXTIMAGESIZE","Bildergröße in byte:");
define("_TEXTHEIGHTUNIT","Größeneinheit:");
define("_TEXTWEIGHTUNIT","Gewichtseinheit:");
define("_TEXTAUTOACTIVE","Anzeige automatisch aktivieren:");
define("_PREFBUTTON","Speichern");
define("_ttmmjjjj","TT.MM.JJJJ");
define("_jjjjmmtt","JJJJ.MM:TT");
define("_CONFSAVE","Die Konfiguration wurde erfolgreich gespeichert.");
//view-all.php

define("_ID","ID: ");
define("_UNAME","Benutzername: ");
define("_TEXTCATEGORY","Kategorie:");
define("_SEX", "Geschlecht: ");
define("_NAME", "Name: ");
define("_COUNTRY","Land: ");
define("_REGION", "PLZ: ");
define("_CITY", "Stadt: ");
define("_HOBBY", "Hobby: ");
define("_PARTNER", "Partner: ");
define("_PIC","Bild: ");
define("_DESCRIPTION","Beschreibung: ");
define("_backtoadmin","Zurück zur Administration");
define("_deletet","Der Eintrag wurde erfolgreich gelöscht...<P> Klicken Sie <A HREF=./view-all.php>hier</A> um zum Friendfinder zurückzukehren...");
define("_activate","aktivieren");
define("_ENTRIES","Einträge");
define("_TEXTSTATUS","Anzeige aktiv:");
define("_editen","Bearbeiten");
define("_delen","löschen");
define("_ff_yes","ja");
define("_ff_no","nein");

//delete.php
define("_TEXTUSERDELETED","Deine Anzeige wurde erfolgreich gelöscht");
define("_TEXTDELETEBUTTON","Anzeige löschen");
define("_TEXTWANTTODELETE","Möchtest du deine Anzeige wirklich löschen???");

// for email.php
define("_TEXTEMAILSENDER","Dein Name:");
define("_TEXTEMAILSENDERADDRESS","Deine eMailadresse:");
define("_TEXTEMAILMESSAGE","Deine Nachricht:");
define("_TEXTEMAILBUTTON","eMail senden");
define("_TEXTTHANKSMAIL","Danke für deine eMail, wir hoffen du bekommst eine positive Rückmeldung.");
define("_TEXTPLEASECHOOSEMEMBER","Bitte wähle ein Mitglied dem du eine eMail schreiben willst");
define("_TEXTMAILSUBJECT","Antwort von $name auf deine Anzeige bei ".$xoopsConfig['sitename']."");


// Variables for the add.php page
define("_TEXTNOXOOPSUSER","Nur registrierte / angemeldete Besucher können Anzeigen aufgeben/ändern oder löschen!<br><br>");
define("_CLA_REGISTER","Bitte melde dich an oder registriere dich.<br>");
define("_CLA_CONECT","stelle die Verbindung her");
define("_CLA_OR","oder");
define("_CLA_IFAREMEMBER","wenn Sie schon angemeldet sind");
define("_TEXTADDSEARCH","Eine/n Partner/in suchen");
define("_TEXTADDSUCCESSFUL","Vielen Dank für deinen Eintrag!!!!");
define("_TEXTSEARCH","Eine/n Partner/in suchen");
define("_TEXTADDBUTTON","Anzeige eintragen");
define("_TEXTSEX","Ich bin: ");
define("_CLA_SELECTCAT","Bitte auswählen");
define("_TEXTREALNAME","Dein echter Name: ");
define("_TEXTCOUNTRY","In welchem Land lebst du: ");
define("_TEXTDESCRIPTION","Dein Text: ");
define("_TEXTTANZ","Hobby: ");
define("_TEXTPSEX", "Du suchst eine/n: ");
define("_TEXTCITY","Dein Wohnort: ");
define("_TEXTHEIGHT","Größe: ");
define("_TEXTWEIGHT","Gewicht: ");
define("_TEXTBIRTHDAY","Dein Geburtsdatum: ");
define("_TEXTUPLOAD","Foto: (nur jpg/gif bis ".$picsize." kb)");
define("_USEREXISTS","Du hast schon eine Anzeige eingetragen. Du kannst nur eine eintragen.");
define("_TEXTCITYMISSING","Du hast vergessen das Feld Ort auszufüllen");
define("_TEXTYEARMISSING","Du hast vergessen dein Geburtsjahr einzutragen");
define("_FILEFORMAT","Als format ist nur jpg und gif erlaubt");
define("_US_NEWUSERREGAT","Neuer Friendfinder Eintrag von: ".$user."");
define("_US_HASJUSTREG","Ein Benutzer hat ein Profil im Friendfinder erstellt:

Benutzer:                    ".$user."
Echter Name:                 ".$name."
Geschlecht:                  ".$sex."
eMail Adresse:               ".$email."
Land:                        ".$country."
Region:                      ".$state."
Stadt:                       ".$city."
Partner:                     ".$partner."
Hobby:                       ".$hobby."
Größe:                       ".$height."
Gewicht:                     ".$weight."
Geburtsdatum:                ".$day.".".$month.".".$year."
Beschreibung:                ".$comment."

Um diese Anzeige zu aktivieren logge dich in deinem Xoops System ein und schalte dien Eintrag frei.");

define("_TEXTSEXMISSING","Bitte wähle dein Geschlecht aus.");
define("_TEXTSTATEMISSING","Bitte wähle deine Region aus.");
define("_TEXTPARTNERMISSING","Bitte wähle deinen Partner aus.");
define("_TEXTCATEGORYMISSING","Bitte wähle eine Kategorie aus.");

//These are the variables for the search.php
define("_TEXTSEARCHUNSUCCESSFUL","Deine Suche war leider nicht erfolgreich");
define("_TEXTSEARCHBUTTON","Partner/in suchen");
define("_TEXTSEARCHSORT","Sortiert nach: ");
define("_AGEFROM","von");
define("_AGETILL", "bis");

//These are the variables for the view.php
define("_TEXTVIEWREALNAME","Ich heisse: ");
define("_TEXTVIEWEMAIL","eMail: ");
define("_TEXTVIEWCOUNTRY","Ich komme aus: ");
define("_TEXTREGION","PLZ Region: ");
define("_TEXTVIEWDESCRIPTION","Beschreibung: ");
define("_TEXTVIEWCITY","Ich wohne in: ");
define("_TEXTAGE","Alter: ");
define("_TEXTVIEWEMAILSEND","Einfach hier klicken");

//Member index site
define("_TEXTPROFILEUPDATED","Deine Anzeige wurde erfolgreich aktualisiert");
define("_TEXTMEMBERCHANGEPIC","Ändere dein Foto");
define("_TEXTMEMBERBUTTON","Anzeige updaten");


//member pic site
define("_TEXTPICCURRENT","Dein aktuelles Bild");
define("_TEXTPICBUTTON","Foto updaten");
define("_TEXTUPLOADSUCCESS","Dein Bild wurde erfolgreich hochgeladen.");


  //add.php

define("_SELECTSORT"," <select name=sort size=1>
          <option value=date selected>Eingabedatum</option>
          <option value=state>Postleitzahl</option>
          <option value=city>Ort</option>
          <option value=age>Alter</option></select>");
          
          define("_SELECTCOUNTRY","<select name=country size=1>
<option value=>- Bitte w&auml;hlen -</option>
<option selected value=DE>Deutschland</option>
<option value=AT>&Ouml;sterreich</option>
<option value=CH>Schweiz</option>
<option value=LI>Liechtenstein</option>
<option value=>----------------------------------</option>
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
<option value=AU>Australia</option>
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
<option value=NZ>New Zealand</option>
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
