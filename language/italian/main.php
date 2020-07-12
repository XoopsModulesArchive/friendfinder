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
# Lanuage:			Italian														#
# Name:				mykeys mike@r-o-y-a-l.com									#
# Homepage:			http://www.r-o-y-a-l.com									#
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
define("ADDDIRECTFRIENDS","Aggiunga a Directfriends");
define("_menu3","Configuratione principale");
define("_TEXTLOGO","Logo per Friendfinder: ");
define("_CLA_MODIFCATEGORYIMAGE","Nome di immagine:" );
define("_CLA_CATEGORYIMAGENAME","Nome di immagine:" );
define("_CLA_MODIFSEXIMAGE","Nome di immagine:" );
define("_CLA_SEXIMAGENAME","Nome di immagine:" );
define("_TEXTTOPIC","Titolo: ");
define("_TEXTICON","Icon questo sulla index.php deve essere indicati");
define("_TEXTCANUSEREDIT","Permettere ai Usern mutare il loro profilo: ");
define("_TEXTCANUSERDELETE","Permettere Usern di estinguere il loro profilo: ");
define("_TEXTPICUPLOAD","Ai Membra permettono di caricare le immagini: ");
define("_TEXTSEARCHFORCOUNTRY","Dovrebbero potere cercare utente anche lo stato: ");
define("_TEXTIMAGESIZEHEIGHT","Maximum height for uploaded picture (in pixel)");
define("_TEXTIMAGESIZEWIGHT","Maximum width for uploaded picture (in pixel)");
define("_TEXTUSEGENERATEIMAGE","Use generateimgae to resize pictures (GD libary is needed) ");
define("_TEXTGIMAXWIGHT","Width for generateimage (in pixel)");
//new since 3.05
define("_TEXTANONYMUSCANTMAIL","Solo il Membro puo scrivere!");
define("_TEXTANONYMUSSEARCH","Gli Anonymus profili possono cercare?");
define("_TEXTANONYMUSMAIL","Gli Anonymus smalti possono mandare una E-Mail?");
define("_TEXTMAILTOADMIN","Voi madare una E-Mail, se un nuovo profilo è stato costruito?");
define("_TEXTADMINEMAIL","Voi ricevare una E-mail appena un profilo es stato constuito");
define("_TEXTFOOTERMESSAGE","Il footer del Messago quell'a ognuno uscendo smalto è appeso");
define("_SELECTNOMATTER","ininterrottamente");
//old stuff

define("_TEXTINDEX","Cordialmente benvenuto al Friendfinder di ". $xoopsConfig ['sitename']. ", qui, trovi certamente il tuo partner");
define("_TEXTINDEXADD","La denuncia spediscono");
define("_TEXTINDEXSEARCH","La denuncia cercano");
define("_TEXTINDEXUPDATE","Denuncia updaten");
define("_TEXTDELETEUSER","La denuncia estinguono");

//adminpages
define("_editdel","Registra estinguono / lavorano / attivano");
define("_activatedsuccessfully","La denuncia è stata attivata con successo.");
define("_Smiliese","Gli Smilies lavorano");
define("_Badwords","Badwords");
define("_pref","Configurazione generale");
define("_TEXTEMAIL","Smalto indirizzo");

//select.php

define("_CLA_SAVMOD","Se immagazzinano");
define("_CLA_DEL","Spegnimento");
define("_CLA_CATSMOD","I dati sono stati mutati con successo.");
define("_CLA_CATDEL","I dati sono stati estinti con successo");
define("_CLA_CATADD","I dati sono stati ricevuti");

define("_CLA_ADDSTATE","Regione aggiungono");
define("_CLA_STATENAME","Nome della regione");
define("_CLA_ADD","Se aggiungono");
define("_CLA_STATE","Regione");
define("_CLA_MODIFSTATE","Regione modificare");


define("_CLA_ADDSEX","Sesso aggiungono");
define("_CLA_SEXNAME","Nome del sesso");
define("_CLA_MODIFSEX","Sesso modificare");
define("_CLA_SEX","Sesso");

define("_CLA_ADDCATEGORY","Categoria aggiungono");
define("_CLA_CATEGORYNAME","Nome della Categoria");
define("_CLA_MODIFCATEGORY","Kategorie bearbeiten");
define("_CLA_CATEGORY","Categoria");
define("_CLA_MODIFCAT","Modificare la Kategoria");


//pref.php
define("_TEXTDATEFORMAT","Formato di data:");
define("_TEXTIMAGESIZE","Grandezza dell Il Immagino in byte:");
define("_TEXTHEIGHTUNIT","Unità di grandezza:");
define("_TEXTWEIGHTUNIT","Unità di peso:");
define("_TEXTAUTOACTIVE","Denuncia automaticamente attivano:");
define("_PREFBUTTON","Se immagazzinano");
define("_ttmmjjjj","TT.MM.JJJJ");
define("_jjjjmmtt","JJJJ.MM:TT");
define("_CONFSAVE","La configurazione è stata immagazzinata con successo.");
//view-all.php

define("_ID","ID: ");
define("_UNAME","Nome di utente: ");
define("_TEXTCATEGORY","Categoria:");
define("_SEX", "Sesso: ");
define("_NAME", "Nome: ");
define("_COUNTRY","Stato: ");
define("_REGION", "Codice Postale: ");
define("_CITY", "Città: ");
define("_HOBBY", "Hobby: ");
define("_PARTNER", "Partner: ");
define("_PIC","Foto: ");
define("_DESCRIPTION","Descrizione: ");
define("_backtoadmin","Ritorno all'amministrazione");
define("_deletet","La registrazione è stata estinta con successo... <P> click <A HREF =. / view-all.php> here </ PER>, per ritornare al Friendfinder,...");
define("_activate","se attivano");
define("_ENTRIES","Registrazioni");
define("_TEXTSTATUS","Denuncia attivamente:");
define("_editen","Modificare");
define("_delen","se estinguono");
define("_ff_yes","si");
define("_ff_no","no");

//delete.php
define("_TEXTUSERDELETED","La tua denuncia è stata estinta con successo");
define("_TEXTDELETEBUTTON","La denuncia estinguono");
define("_TEXTWANTTODELETE","Vorresti estinguere realmente la tua denuncia???");

// for email.php
define("_TEXTEMAILSENDER","Il tuo Nome:");
define("_TEXTEMAILSENDERADDRESS","Il tuo E-Mail:");
define("_TEXTEMAILMESSAGE","La tua notizia:");
define("_TEXTEMAILBUTTON","INVIA Una E-MAIL ");
define("_TEXTTHANKSMAIL","Grazie per il tuo E-Mail, speriamo tu ricevi una risposta positiva.");
define("_TEXTPLEASECHOOSEMEMBER","Per favore scegli un membro a quello tu un smalto scrivono voluto");
define("_TEXTMAILSUBJECT","Rispondi di $name sulla tua denuncia presso ". $xoopsConfig ['sitename']."");


// Variables for the add.php page
define("_TEXTNOXOOPSUSER","Ha registrato solo / visitatore annunciato possono le denunce Inserire/Modificare o eliminare!<br><br>");
define("_CLA_REGISTER","Per favore iscrivi o registrati.<br>");
define("_CLA_CONECT","produci l'unione");
define("_CLA_OR","o");
define("_CLA_IFAREMEMBER","se è già annunciata");
define("_TEXTADDSEARCH","Una/Un Amico/Amica cercare");
define("_TEXTADDSUCCESSFUL","Molte grazie per la tua registrazione!!!!");
define("_TEXTSEARCH","Una/Un Amico/Amica cercare");
define("_TEXTADDBUTTON","Una nuova Denunga agungere");
define("_TEXTSEX","Io sono: ");
define("_CLA_SELECTCAT","Scelga per favore");
define("_TEXTREALNAME","Il tuo nome vero: ");
define("_TEXTCOUNTRY","In quale stato vivi: ");
define("_TEXTDESCRIPTION","Il tuo testo: ");
define("_TEXTTANZ","Hobby: ");
define("_TEXTPSEX", "Tu cerchi Una/Uno: ");
define("_TEXTCITY","Il tuo domicilio: ");
define("_TEXTHEIGHT","Grandezza: ");
define("_TEXTWEIGHT","Peso: ");
define("_TEXTBIRTHDAY","La tua data di nascita: ");
define("_TEXTUPLOAD","Foto: (solo jpg/gif fina ".$picsize." kb)");
define("_USEREXISTS","Hai registrato già una denuncia. ");
define("_TEXTCITYMISSING","Hai dimenticato di riempire luogo il campo");
define("_TEXTYEARMISSING","Hai dimenticato di registrare il tuo anno di nascita");
define("_FILEFORMAT","Di formato è permesso solo jpg e gif");
define("_US_NEWUSERREGAT","Friendfinder registrazione Nuovo di: ".$user."");
define("_US_HASJUSTREG","Utente dentro ha costruito un profilo nel Friendfinder:

Utente:                      ".$user."
Nome vero:                   ".$name."
Sesso:                       ".$sex."
eMail:                       ".$email."
Stato:                       ".$country."
Regione:                     ".$state."
Citta:                       ".$city."
Amico:                       ".$partner."
Hobby:                       ".$hobby."
Grandezza:                   ".$height."
Peso:                        ".$weight."
Data di nascita:             ".$day.".".$month.".".$year."
Descrizione:                 ".$comment."

Per attivare questa denuncia ti annuncia nel tuo Xoops sistema un e capisce serve a registrazione libero.");

define("_TEXTSEXMISSING","Per favore scegli il tuo sesso.");
define("_TEXTSTATEMISSING","Per favore scegli la tua regione.");
define("_TEXTPARTNERMISSING","Per favore scegli il tuo partner.");
define("_TEXTCATEGORYMISSING","Per favore scegli una categoria.");

//These are the variables for the search.php
define("_TEXTSEARCHUNSUCCESSFUL","La tua ricerca non era purtroppo di successo");
define("_TEXTSEARCHBUTTON","Ricerca Amibo/Amica");
define("_TEXTSEARCHSORT","Assortite dopo: ");
define("_AGEFROM","da");
define("_AGETILL", "fina");

//These are the variables for the view.php
define("_TEXTVIEWREALNAME","Mi chiamo: ");
define("_TEXTVIEWEMAIL","eMail: ");
define("_TEXTVIEWCOUNTRY","Io sono da:");
define("_TEXTREGION","Codice Postale e Regione: ");
define("_TEXTVIEWDESCRIPTION","Descrizione: ");
define("_TEXTVIEWCITY","Abito in: ");
define("_TEXTAGE","Anni: ");
define("_TEXTVIEWEMAILSEND","Semplicemente qui cliccano");

//Member index site
define("_TEXTPROFILEUPDATED","La tua denuncia è stata aggiornata con successo");
define("_TEXTMEMBERCHANGEPIC","Modificare la tua Foto");
define("_TEXTMEMBERBUTTON","Denuncia updaten ");


//member pic site
define("_TEXTPICCURRENT","La tua Foto attuale");
define("_TEXTPICBUTTON","Foto updaten");
define("_TEXTUPLOADSUCCESS","La tua Foto è stata alto-caricata con successo.");


  //add.php

define("_SELECTSORT"," <select name=sort size=1>
          <option value=date selected>Data di immissione</option>
          <option value=state>Codice Postale</option>
          <option value=city>Cita</option>
          <option value=age>Anni</option></select>");
          
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
<option value=ZZ>Altro stato, non indica,</option>
</select> ");

?>
