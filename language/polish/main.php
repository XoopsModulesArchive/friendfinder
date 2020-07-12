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
# Lanuage:			Polish														#
# Name:				arthur exoops@dadude.com									#
# Homepage:			http://www.dadude.com										#
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
global $dateformat, $autoactive, $imagesize, $heightunit, $weightunit, $footermsgtxt, $meta;

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
//new since 3.04
define("_TEXTANONYMUSCANTMAIL","Tylko zarejestrowani u�ytkownicy mog� wysy�a� poczt�");
define("_TEXTANONYMUSSEARCH","Pozw�l anonimowym u�ytkownikom szuka� profili");
define("_TEXTANONYMUSMAIL","Pozw�l anonimowym u�ytkownikom sla� eMaile do w�a�cicieli profili");
define("_TEXTMAILTOADMIN","Czy wys�a� eMail dla nowych profili");
define("_TEXTADMINEMAIL","Podaj adres na kt�ry wysy�a� nowe profile");
define("_TEXTFOOTERMESSAGE","Wpisz wiadomo��, kt�ra b�dzie umieszczona na ko�cu ka�dego eMaila");
define("_SELECTNOMATTER","Nie wa�ne");


// old stuff
define("_TEXTINDEX","Witaj w Xoops friendfinder na ".$xoopsConfig['sitename'].",<br>

Tutaj znajdziesz idealn� osob�");

define("_TEXTINDEXADD","Umie�� sw�j profil");

define("_TEXTINDEXSEARCH","Szukaj partnera(ki)");

define("_TEXTINDEXUPDATE","Edytuj sw�j profil");

define("_TEXTDELETEUSER","Skasuj profil");



//adminpages

define("_editdel","Edytuj/ skasuj/zatwierd� profil");

define("_activatedsuccessfully","Profil pomy�lnie aktywowany.");

define("_Smiliese","Edytuj minki");

define("_Badwords","Z�e s�owa");

define("_pref","Konfiguracja");

define("_TEXTEMAIL","adres eMail");

//select.php

define("_CLA_SAVMOD","Zapisz");
define("_CLA_DEL","Skasuj");
define("_CLA_CATSMOD","Twoje dane zosta�y zmienione.");
define("_CLA_CATDEL","Twoje dane zosta�y skasowane.");
define("_CLA_CATADD","Twoje dane zosta�y zapisane");

define("_CLA_ADDSTATE","Dodaj region");
define("_CLA_STATENAME","Nazwa regionu");
define("_CLA_ADD","dodaj");
define("_CLA_STATE","Region");
define("_CLA_MODIFSTATE","Edytuj region");
define("_CLA_SELECTCAT","Wybierz");

define("_CLA_ADDSEX","Dodaj p�e�");
define("_CLA_SEXNAME","Nazwa p�ci");
define("_CLA_MODIFSEX","Edytuj p�e�");
define("_CLA_SEX","P�e�");

define("_CLA_ADDCATEGORY","Dodaj kategori�");
define("_CLA_CATEGORYNAME","Nazwa kategorii");
define("_CLA_MODIFCATEGORY","Edytuj kategori�");
define("_CLA_CATEGORY","Kategoria");
define("_CLA_MODIFCAT","Edytuj kategori�");



//pref.php

define("_TEXTDATEFORMAT","Format daty:");

define("_TEXTIMAGESIZE","PRozmiar obrazka w bajtach:");

define("_TEXTHEIGHTUNIT","Jednostka wysoko�ci:");

define("_TEXTWEIGHTUNIT","Jednoska wagi:");

define("_TEXTAUTOACTIVE","Autoaktywacja prfili:");

define("_PREFBUTTON","Zapisz");

define("_ttmmjjjj","DD.MM.RRRR");

define("_mmttjjjj","MM.DD.RRRR");

define("_jjjjmmtt","RRRR.MM:DD");

define("_CONFSAVE","Twoja konfiguracja zosta�a zapisana");

//view-all.php



define("_ID","ID: ");

define("_UNAME","Nazwa U�ytkownika: ");

define("_TEXTCATEGORY","Kategoria:");

define("_SEX", "P�e�: ");

define("_NAME", "Imi�: ");

define("_COUNTRY","Kraj: ");

define("_REGION", "Region: ");

define("_CITY", "Miasto: ");

define("_HOBBY", "Hobby: ");

define("_PARTNER", "Partner: ");

define("_PIC","Obrazek: ");

define("_DESCRIPTION","Opis: ");

define("_backtoadmin","Wr�� ro administracji");

define("_deletet","Profil zosta� skasowany...<P> Kliknij <A HREF=./view-all.php>tutaj</A> by wr�ci� do Xoops Friendfinder...");

define("_activate","uaktywnij");

define("_ENTRIES","Profile");

define("_TEXTSTATUS","Profil aktywny:");

define("_editen","edytuj");

define("_delen","skasuj");

define("_ff_yes","tak");

define("_ff_no","nie");



//delete.php

define("_TEXTUSERDELETED","Tw�j profil zosta� skasowany");

define("_TEXTDELETEBUTTON","Skasuj profil");

define("_TEXTWANTTODELETE","Czy na pewno chcesz skasowa� sw�j profil");



// for email.php

define("_TEXTEMAILSENDER","Imi�:");

define("_TEXTEMAILSENDERADDRESS","Tw�j adres eMail:");

define("_TEXTEMAILMESSAGE","Twoja wiadomo��:");

define("_TEXTEMAILBUTTON","wy�lij eMail");

define("_TEXTTHANKSMAIL","Dzi�ki za tw�j eMail, mamy nadziej�, �e dostaniesz pomy�ln� odpowied�.");

define("_TEXTPLEASECHOOSEMEMBER","Wybierz odbiorc� eMaila");

define("_TEXTMAILSUBJECT","Odpowied� od $name na twoje og�oszenie w ".$xoopsConfig['sitename']."");





// Variables for the add.php page

define("_TEXTNOXOOPSUSER","Tylko zalogowani u�ytkownicy mog� zamieszcza�/edytowa� lub kasowa� profil!<br><br>");

define("_CLA_REGISTER","Zarejestruj lub zaloguj si�.<br>");

define("_CLA_CONECT","stw�rz po��czenie");

define("_CLA_OR","lub");

define("_CLA_IFAREMEMBER","je�li jeste� ju� zalogowany(a)");

define("_TEXTADDSEARCH","Szukaj partnera(ki)");

define("_TEXTADDSUCCESSFUL","Dzi�ki za Twoje zg�oszenie");

define("_TEXTSEARCH","Szukaj partnera(ki)");

define("_TEXTADDBUTTON","Zamie�� profil");

define("_TEXTSEX","Jestem: ");

define("_TEXTREALNAME","Twoje prawdziwe imi� i nazwisko: ");

define("_TEXTCOUNTRY","Tw�j kraj: ");

define("_TEXTDESCRIPTION","Tw�j opis: ");

define("_TEXTTANZ","Hobby: ");

define("_TEXTPSEX", "Szukasz: ");

define("_TEXTCITY","Twoje miasto: ");

define("_TEXTHEIGHT","Wzrost: ");

define("_TEXTWEIGHT","Waga: ");

define("_TEXTBIRTHDAY","Data urodzenia: ");

define("_TEXTUPLOAD","Obrazek: (tylko jpg/gif, max. ".$picsize." Kb) ");

define("_USEREXISTS","Ju� isnieje Tw�j profil. Mo�na mie� tylko jeden.");

define("_TEXTCITYMISSING","Nie poda�e(a)� miasta");

define("_TEXTYEARMISSING","Nie poda�e(a)� daty urodzenia");

define("_FILEFORMAT","Mo�emy u�y� tylko obrazk�w w formacie gif lub jpg");

define("_US_NEWUSERREGAT","Nowy profil Friendfinder od: ".$user."");
define("_US_HASJUSTREG","U�ytkoznik zamie�ci� profil w friendfinder :

U�ytkownik:                  ".$user."
Prawdziwe imi� i nazwisko:   ".$name."
P�e�:                        ".$sex."
Adres eMail:                 ".$email."
Kraj:                        ".$country."
Region:                      ".$state."
Miasto:                      ".$city."
Partner:                     ".$partner."
Hobby:                       ".$hobby."
Wzrost:                      ".$height."
Waga:                        ".$weight."
Data urodzenia:              ".$day.".".$month.".".$year."
Opis:                        ".$comment."

Zaloguj si� jako Administrator aby uaktywni� profil.");

define("_TEXTSEXMISSING","Podaj swoj� p�e�.");
define("_TEXTSTATEMISSING","Wybierz sw�j region");
define("_TEXTPARTNERMISSING","Jakiego partnera(ki) szukasz?");
define("_TEXTCATEGORYMISSING","Wybierz kategori�.");





//These are the variables for the search.php

define("_TEXTSEARCHUNSUCCESSFUL","Niestety nie znale�li�my nikogo!");

define("_TEXTSEARCHBUTTON","Szukaj");

define("_TEXTSEARCHSORT","Kolejno�� Sortowania: ");

define("_AGEFROM","od");

define("_AGETILL", "do");



//These are the variables for the view.php

define("_TEXTVIEWREALNAME","Nazywam si�: ");

define("_TEXTVIEWEMAIL","eMail: ");

define("_TEXTVIEWCOUNTRY","Pochodz� z: ");

define("_TEXTREGION","Region: ");

define("_TEXTVIEWDESCRIPTION","Opis: ");

define("_TEXTVIEWCITY","Mieszkam w: ");

define("_TEXTAGE","Wiek: ");

define("_TEXTVIEWEMAILSEND","Kliknij tu by wys�a� eMail");



//Member index site

define("_TEXTPROFILEUPDATED","Profil zosta� zapisany pomy�nie.");

define("_TEXTMEMBERCHANGEPIC","Zmie� swoje zdj�cie");

define("_TEXTMEMBERBUTTON","Od�wierz profil");





//member pic site

define("_TEXTPICCURRENT","Obecne zdj�cie");

define("_TEXTPICBUTTON","Zmie� zdj�cie");

define("_TEXTUPLOADSUCCESS","Zdj�cie zmienione.");




  //add.php


define("_SELECTSORT"," <select name=sort size=1>

          <option value=date selected>Data</option>

          <option value=state>Region</option>

          <option value=city>Miasto</option>

          <option value=age>Wiek</option></select>");






define("_SELECTCOUNTRY","<select name=country size=1>

<option value=>----------------------------------</option>

<option value=>- Prosz� wybra� -</option>

<option value=AU>Australia</option>

<option value=AT>Austria</option>

<option value=CH>Szwajcaria</option>

<option value=LI>Liechtenstein</option>

<option value=AF>Afganistan</option>

<option value=AL>Albania</option>

<option value=DZ>Algieria</option>

<option value=AS>Samoa</option>

<option value=AD>Andorra</option>

<option value=AO>Angola</option>

<option value=AI>Anguilla</option>

<option value=AQ>Antarktyka</option>

<option value=AG>Antigua i Barbuda</option>

<option value=AR>Argentyna</option>

<option value=AM>Armenia</option>

<option value=AW>Aruba</option>

<option value=AZ>Azerbaijan</option>

<option value=BS>Bahama</option>

<option value=BH>Bahrain</option>

<option value=BD>Bangladesz</option>

<option value=BB>Barbados</option>

<option value=BY>Bia�oru�</option>

<option value=BE>Belgia</option>

<option value=BZ>Belize</option>

<option value=BJ>Benin</option>

<option value=BM>Bermudy</option>

<option value=BT>Bhutan</option>

<option value=BO>Boliwia</option>

<option value=BA>Bo�nia i Hercegowina</option>

<option value=BW>Botswana</option>

<option value=BV>Wyspa Bouvet</option>

<option value=BR>Brazylia</option>

<option value=IO>Brytyjskie Terytorium Oceanu Indyjskiego</option>

<option value=BN>Brunei Darussalam</option>

<option value=BG>Bu�garia</option>

<option value=BF>Burkina Faso</option>

<option value=BI>Burundi</option>

<option value=KH>Kamob�a</option>

<option value=CM>Kamerun</option>

<option value=CA>Kanada</option>

<option value=CV>Cape Verde</option>

<option value=KY>Wyspy Cayman</option>

<option value=CF>Republika Centralnej Afryki</option>

<option value=TD>Czad</option>

<option value=CL>Czile</option>

<option value=CN>Chiny</option>

<option value=DM>Dominika</option>

<option value=DJ>D�ibuti</option>

<option value=HR>Chorwacja</option>

<option value=CY>Cypr</option>

<option value=CZ>Republika Czech</option>

<option value=DK>Dania</option>

<option value=EC>Ekwador</option>

<option value=EG>Egipt</option>

<option value=SV>Salwador</option>

<option value=GQ>Gwinea</option>

<option value=ER>Erytrea</option>

<option value=ES>Hiszpania</option>

<option value=EE>Estonia</option>

<option value=ET>Etjopia</option>

<option value=FK>Falklandy</option>

<option value=FO>Wyspy Faroe</option>

<option value=FJ>Fid�i</option>

<option value=FI>Finlandia</option>

<option value=FR>Francja</option>

<option value=FX>Francja, Metropolitan</option>

<option value=GF>Francuzka Gujana</option>

<option value=PF>Francuzka Polynezja</option>

<option value=TF>Francuzkie Terytoria Po�udniowe</option>

<option value=GA>Gabon</option>

<option value=GM>Gambia</option>

<option value=GE>Gruzja</option>

<option value=DE>Niemcy</option>

<option value=GH>Ghana</option>

<option value=GI>Gibraltar</option>

<option value=GR>Grecja</option>

<option value=GL>Grenlandja</option>

<option value=GD>Grenada</option>

<option value=GP>Guadaloupa</option>

<option value=GU>Guam</option>

<option value=GT>Guatemala</option>

<option value=GN>Gwinja</option>

<option value=GW>Gwineja-Bissau</option>

<option value=GY>Gujana</option>

<option value=HT>Haiti</option>

<option value=HM>Wyspy Heard i Nc Donald</option>

<option value=HN>Honduras</option>

<option value=HU>W�gry</option>

<option value=IS>Islandia</option>

<option value=IN>Indie</option>

<option value=ID>Indonezja</option>

<option value=IR>Iran</option>

<option value=IQ>Irak</option>

<option value=IE>Irlandia</option>

<option value=IL>Izrael</option>

<option value=YE>Jemen</option>

<option value=JM>Jamajka</option>

<option value=JP>Japonia</option>

<option value=JO>Jordan</option>

<option value=KZ>Kazachstan</option>

<option value=KE>Kenja</option>

<option value=KI>Kiribati</option>

<option value=KP>P�nocna Korea (Ludowa Republika Korei)</option>

<option value=KR>Po�udniowa Korea (Republika Korei)</option>

<option value=KW>Kuwejt</option>

<option value=KG>Kyrgizstan</option>

<option value=LA>Ludowa Republika Laosu</option>

<option value=LV>�otwa</option>

<option value=LB>Liban</option>

<option value=LS>Lesotho</option>

<option value=LR>Liberia</option>

<option value=LY>Libijska Arabska Jamahiriya</option>

<option value=LI>Liechtenstein</option>

<option value=LT>Litwa</option>

<option value=LU>Luxemburg</option>

<option value=MO>Makau</option>

<option value=MK>Macedonia</option>

<option value=MG>Madagascar</option>

<option value=MW>Malawi</option>

<option value=MY>Malezja</option>

<option value=MV>Malediwy</option>

<option value=ML>Mali</option>

<option value=MT>Malta</option>

<option value=MH>Wyspy Marshalla</option>

<option value=MQ>Martynika</option>

<option value=MR>Maurytania</option>

<option value=MU>Mauritius</option>

<option value=YT>Mayotte</option>

<option value=MX>Meksyk</option>

<option value=FM>Mikronezja</option>

<option value=MD>Mo�dawa</option>

<option value=MC>Monako</option>

<option value=MN>Mongolia</option>

<option value=MS>Montserrat</option>

<option value=MA>Maroko</option>

<option value=MZ>Mozambik</option>

<option value=MM>Myanmar</option>

<option value=NA>Namibia</option>

<option value=NR>Nauru</option>

<option value=NP>Nepal</option>

<option value=NL>Holandja</option>

<option value=AN>Antilles Holandzkie</option>

<option value=NC>Nowa Kaledonia</option>

<option value=NI>Nikaragua</option>

<option value=NE>Niger</option>

<option value=NG>Nigeria</option>

<option value=NU>Niue</option>

<option value=NF>Wyspy Norfolk</option>

<option value=MP>P�nocne Wyspy Mariana</option>

<option value=NO>Norwegia</option>

<option value=AT>Austria</option>

<option value=OM>Oman</option>

<option value=PK>Pakistan</option>

<option value=PW>Palau</option>

<option value=PA>Panama</option>

<option value=PG>Papua Nowa Gwinea</option>

<option value=PY>Paragwaj</option>

<option value=PE>Peru</option>

<option value=PH>Filipiny</option>

<option value=PN>Pitcairn</option>

<option selected value=PL>Polska</option>

<option value=PT>Portugalia</option>

<option value=PR>Puerto Rico</option>

<option value=QA>Katar</option>

<option value=RE>Reunion</option>

<option value=RO>Romunia</option>

<option value=RU>Federacja Ran</option>

<option value=RW>Rwanda</option>

<option value=KN>Saint Kitts i Nevis</option>

<option value=LC>Saint Lucia</option>

<option value=VC>Saint Vincent i Grenadyny</option>

<option value=WS>Samoa</option>

<option value=SM>San Marino</option>

<option value=ST>Sao Tome i Principe</option>

<option value=SA>Arabia Saudyjska</option>

<option value=CH>Szwajcaria</option>

<option value=SN>Senegal</option>

<option value=SC>Seszele</option>

<option value=SL>Siearra Leone</option>

<option value=SG>Singapur</option>

<option value=SK>S�owacja</option>

<option value=SI>S�owenia</option>

<option value=SB>Wyspy Solomona</option>

<option value=SO>Somalia</option>

<option value=ZA>Po�udniowa Afryka</option>

<option value=GS>Po�udniowa Gruzja i Po�udniowe Wyspy Kanapkowe</option>

<option value=ES>Hiszpania</option>

<option value=LK>Sri Lanka</option>

<option value=SH>Wyspa �w. Heleny</option>

<option value=PM>St. Pierre i Miquelon</option>

<option value=SD>Sudan</option>

<option value=SR>Surinam</option>

<option value=SJ>Wyspy Svalbard i Jan Mayen</option>

<option value=SZ>Swaziland</option>

<option value=SE>Szwecja</option>

<option value=SY>Arabska Republika Syrii</option>

<option value=TW>Tajwan</option>

<option value=TJ>Tad�ykistan</option>

<option value=TZ>Tanzania</option>

<option value=TH>Tajlandia</option>

<option value=TG>Togo</option>

<option value=TK>Tokelau</option>

<option value=TO>Tonga</option>

<option value=TT>Trinidad i Tobago</option>

<option value=TN>Tunezja</option>

<option value=TR>Turcja</option>

<option value=TM>Turkmenistan</option>

<option value=TV>Tuvalu</option>

<option value=UG>Uganda</option>

<option value=UA>Ukraina</option>

<option value=UY>Urugwaj</option>

<option value=US>U.S.A.</option>

<option value=UM>Wyspy w okolicy U.S.A.</option>

<option value=UZ>Uzbekistan</option>

<option value=VU>Vanuatu</option>

<option value=VA>Watykan</option>

<option value=IT>W�ochy</option>

<option value=GB>Wielka Brytania</option>

<option value=TC>Wyspy Turks i Caicos</option>

<option value=VE>Wenezuela</option>

<option value=VN>Wietnam</option>

<option value=TP>Wschodni Timor</option>

<option value=VG>Wyspy Dziewicze (Brytyjskie)</option>

<option value=VI>Wyspy Dziewicze (Ameryka�skie)</option>

<option value=WF>Wyspy Wallis i Futuna</option>

<option value=NZ>Nowa Zelandia</option>

<option value=DE>Niemcy</option>

<option value=DO>Republika Dominika�ska</option>

<option value=CX>Wyspy Bo�ego Narodzenia</option>

<option value=CC>Wyspy Kokosowe (Keelinga)</option>

<option value=CO>Kolombia</option>

<option value=KM>Komory</option>

<option value=CG>Kongo</option>

<option value=CK>Wyspy Cooka</option>

<option value=CR>Kostarika</option>

<option value=CI>Wybrze�e Ko�ci S�oniowej</option>

<option value=CU>Kuba</option>

<option value=EH>Zachodnia Sahara</option>

<option value=ZR>Zair</option>

<option value=ZM>Zambia</option>

<option value=ZW>Zimbabwe</option>

<option value=AE>Zjednoczone Emiraty Arabskie</option>

<option value=ZZ>Inny Kraj</option>

</select> ");

?>
