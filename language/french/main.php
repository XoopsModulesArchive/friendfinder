<?php
#################################################################################
# Friend Finder for Xoops 1.3.x and Xoops 2.xx Version 3.1 beta                 #
#                                                                               #
# 			Copyright 2003 by eagle81					                        #
#													                            #
# Manuel Caballero	 	friendfinder@dancepartner.net				            #
# Module Homepage:		http://www.dancepartner.net				                #
#													                            #
# Please report bugs and new feature request at modcentral.com friendfinder	    #
# forum or via mail frienfinder@dancepartner.net  					            #
#													                            #
# Copyright for this langfile									                #
# Language:			French								                        #
# Name:				alain								                        #
# Homepage:			http://www.sensuel.net						                #
#													                            #
#                                                                               #
# Last modification:            2003-02-14						                #
#                                                                               #
# Initialy this script is based on phpMeet from                                 #
# Jeremy Ross 					webmaster@phprank.com                           #
# Script design  : PhpMeet  	Copyright 2002 -                                #
# Created 15/01/02              Last Modified 15/01/02                          #
# Scripts Home                  http://www.jrscripts.com                        #
#													                            #
# First Xoops Versions from:                   						            #
#                                                                               #
# Xoops-RC2 French Version  :   jokerman@free.fr                                #
# Web Home                  :   http://www.webetfric.com                        #
#                                                                               #
# Xoops-RC2 English Version :   webmaster@modscentral.com                    	#
# Web Home                  :   http://www.modscentral.com                      #
#################################################################################

//variables pour la page index.php

include(XOOPS_ROOT_PATH."/modules/friendfinder/cache/config.php");
global $dateformat, $autoactive, $imagesize, $heightunit, $weightunit, $footermsgtxt;

$picsize=round ($imagesize/1024,0);
//changements par rapport à la version 3.06
define("ADDDIRECTFRIENDS","Ajouter à directfriends");
define("_menu3","Menu de configuration");
define("_TEXTLOGO","Logo pour Friendfinder: ");
define("_CLA_MODIFCATEGORYIMAGE","Nom de la photo:" );
define("_CLA_CATEGORYIMAGENAME","Nom de la photo:" );
define("_CLA_MODIFSEXIMAGE","Nom de la photo:" );
define("_CLA_SEXIMAGENAME","Nom de la photo:" );
define("_TEXTTOPIC","Titre de votre Profil: ");
define("_TEXTICON","Icone qui sera vue à la page index.php");
define("_TEXTCANUSEREDIT","Permettre aux utilisateurs de modifier leur profil: ");
define("_TEXTCANUSERDELETE","Permettre aux utilisateurs de supprimer leur profil: ");
define("_TEXTPICUPLOAD","Permettre aux utilisateurs d'uploader des photos: ");
define("_TEXTSEARCHFORCOUNTRY","Autoriser les utilisateurs à effectuer une recherche par pays: ");
define("_TEXTIMAGESIZEHEIGHT","Hauteur maximale autorisée des photos (en pixel)");
define("_TEXTIMAGESIZEWIGHT","Largeur maximale autorisée des photos (en pixel)");
define("_TEXTUSEGENERATEIMAGE","Employer generateimgae pour redimensionner les photos (GD est nécessaire) ");
define("_TEXTGIMAXWIGHT","Largeur pour generateimage (en pixel)");

//nouveautés par rapport à la version 3.04
define("_TEXTANONYMUSCANTMAIL","Seuls les utilisateurs enregistrés peuvent envoyer des emails");
define("_TEXTANONYMUSSEARCH","Permettre aux anonymes de rechercher des profils");
define("_TEXTANONYMUSMAIL","Permettre aux anonymes d'envoyer des emails au propriétaire du profil");
define("_TEXTMAILTOADMIN","Avertir par email de l'ajout de nouveaux profils");
define("_TEXTADMINEMAIL","Entrez l'email de l'administrateur");
define("_TEXTFOOTERMESSAGE","Placez un message de bas de page qui sera ajouté à chaque email");
define("_SELECTNOMATTER","N'importez pas");


// reprise
define("_TEXTINDEX","Bienvenue à la rubrique friendfinder du site ".$xoopsConfig['sitename'].",<br>

Vous trouverez peut-être votre âme soeur");

define("_TEXTINDEXADD","Proposez votre profil");

define("_TEXTINDEXSEARCH","Chercher un(e) partenaire");

define("_TEXTINDEXUPDATE","Modifier votre profil");

define("_TEXTDELETEUSER","Supprimer votre profil");



//pages d'administration

define("_editdel","Editer/supprimer/activer une entrée");

define("_activatedsuccessfully","Le profil a été activé avec succès.");

define("_Smiliese","Editer les smilies");

define("_Badwords","Mots interdits");

define("_pref","Configuration");

define("_TEXTEMAIL","Adresses email");

//select.php

define("_CLA_SAVMOD","Sauver");
define("_CLA_DEL","Supprimer");
define("_CLA_CATSMOD","Votre compte a été changé avec succès.");
define("_CLA_CATDEL","Votre compte a été supprimé avec succès.");
define("_CLA_CATADD","Votre compte a été sauvé");

define("_CLA_ADDSTATE","Ajouter une région");
define("_CLA_STATENAME","Nom de la région");
define("_CLA_ADD","Ajouter");
define("_CLA_STATE","Région");
define("_CLA_MODIFSTATE","Modifier la région");
define("_CLA_SELECTCAT","Faites un choix");

define("_CLA_ADDSEX","Ajouter un sexe");
define("_CLA_SEXNAME","Nom du sexe");
define("_CLA_MODIFSEX","Modifier un sexe");
define("_CLA_SEX","Sexe");

define("_CLA_ADDCATEGORY","Ajouter une catégorie");
define("_CLA_CATEGORYNAME","Nom de la catégorie");
define("_CLA_MODIFCATEGORY","Modifier la catégorie");
define("_CLA_CATEGORY","Catégorie");
define("_CLA_MODIFCAT","Editer la catégorie");



//pref.php

define("_TEXTDATEFORMAT","Format de la date:");

define("_TEXTIMAGESIZE","Pixel en byte:");

define("_TEXTHEIGHTUNIT","Unité de taille:");

define("_TEXTWEIGHTUNIT","Unité de poids:");

define("_TEXTAUTOACTIVE","Autoactivation des profils:");

define("_PREFBUTTON","Sauver");

define("_ttmmjjjj","DD.MM.YYYY");

define("_jjjjmmtt","YYYY.MM:DD");

define("_CONFSAVE","Votre configuration a été sauvegardée");

//view-all.php



define("_ID","ID: ");

define("_UNAME","Nom d'utilisateur: ");

define("_TEXTCATEGORY","Catégorie:");

define("_SEX", "Sexe: ");

define("_NAME", "Nom: ");

define("_COUNTRY","Pays: ");

define("_REGION", "Département: ");

define("_CITY", "Ville: ");

define("_HOBBY", "Vos Interests: ");

define("_PARTNER", "Partenaire: ");

define("_PIC","Photo: ");

define("_DESCRIPTION","Description: ");

define("_backtoadmin","Retour à la page d'administration");

define("_deletet","Le profil a été supprimé avec succès...<P> Cliquez <A HREF=./view-all.php>ici</A> pour revenir à Friendfinder...");

define("_activate","activer");

define("_ENTRIES","Profils");

define("_TEXTSTATUS","Profil activé:");

define("_editen","modifier");

define("_delen","supprimer");

define("_ff_yes","oui");

define("_ff_no","non");



//delete.php

define("_TEXTUSERDELETED","Votre profil a été supprimé avec succès");

define("_TEXTDELETEBUTTON","Supprimer votre profil");

define("_TEXTWANTTODELETE","Êtes-vous sûr de vouloir supprimer votre profil?");



// page email.php

define("_TEXTEMAILSENDER","Votre nom:");

define("_TEXTEMAILSENDERADDRESS","Votre adresse email:");

define("_TEXTEMAILMESSAGE","Votre message:");

define("_TEXTEMAILBUTTON","Envoyer un email");

define("_TEXTTHANKSMAIL","Merci pour votre email, nous espérons que vous obtiendrez une réponse positive.");

define("_TEXTPLEASECHOOSEMEMBER","Choisissez le destinataire de l'email");

define("_TEXTMAILSUBJECT","Communication de $name suite à votre profil sur ".$xoopsConfig['sitename']."");





// variables pour la page add.php

define("_TEXTNOXOOPSUSER","Seuls les utilisateurs enregistrés peuvent proposer/modifier ou supprimer un profil!<br><br>");

define("_CLA_REGISTER","Merci de vous connecter ou vous enregistrer.<br>");

define("_CLA_CONECT","Créer une connection");

define("_CLA_OR","ou");

define("_CLA_IFAREMEMBER","si vous êtes tout le temps connecté sur");

define("_TEXTADDSEARCH","Recherche d'un partenaire");

define("_TEXTADDSUCCESSFUL","Merci de votre participation");

define("_TEXTSEARCH","Recherche d'un(e) partenaire");

define("_TEXTADDBUTTON","Proposer votre profil");

define("_TEXTSEX","Je suis: ");

define("_TEXTREALNAME","Votre pseudo: ");

define("_TEXTCOUNTRY","Votre pays: ");

define("_TEXTDESCRIPTION","Votre description: ");

define("_TEXTTANZ","Hobbies: ");

define("_TEXTPSEX", "Vous recherchez: ");

define("_TEXTCITY","Votre ville: ");

define("_TEXTHEIGHT","Taille: ");

define("_TEXTWEIGHT","Poids: ");

define("_TEXTBIRTHDAY","Date de naissance: ");

define("_TEXTUPLOAD","Photo: ( uniquement jpg/gif max. ".$picsize." Kb) ");

define("_USEREXISTS","Vous avez déjà un profil. Vous ne pouvez en créer qu'un seul!");

define("_TEXTCITYMISSING","Vous avez oublié d'indiquer votre ville");

define("_TEXTYEARMISSING","Vous avez oublié de renseigner votre date de naissance");

define("_FILEFORMAT","Seuls les formats gif ou jpg sont autorisés");

define("_US_NEWUSERREGAT","Nouveau profil sur Friendfinder  : ".$user."");
define("_US_HASJUSTREG","Un utilisateur a proposé son profil à Friendfinder :

Login:                    ".$user."
Pseudo:                    ".$name."
Sexe:                         ".$sex."
Adresse email:                ".$email."
Pays:                     ".$country."
Etat:                       ".$state."
Ville:                        ".$city."
Choix:                     ".$partner."
Hobbies:                     ".$hobby."
Hauteur:                      ".$height."
Poids:                      ".$weight."
Date de naissance:               ".$day.".".$month.".".$year."
Description:                 ".$comment."

Pour activer ce profil, logguez-vous comme Administrateur.");

define("_TEXTSEXMISSING","Choisissez votre sexe.");
define("_TEXTSTATEMISSING","Choisissez votre région");
define("_TEXTPARTNERMISSING","Choisissez votre partenaire.");
define("_TEXTCATEGORYMISSING","Choisissez votre catégorie.");





//variables pour la page search.php

define("_TEXTSEARCHUNSUCCESSFUL","Aucun profil ne correspond à votre recherche!");

define("_TEXTSEARCHBUTTON","Recherche de partenaire");

define("_TEXTSEARCHSORT","Priorité à: ");

define("_AGEFROM","de");

define("_AGETILL", "jusqu'à");



//variables pour la page view.php

define("_TEXTVIEWREALNAME","Mon nom est: ");

define("_TEXTVIEWEMAIL","Email: ");

define("_TEXTVIEWCOUNTRY","Je viens de: ");

define("_TEXTREGION","Département: ");

define("_TEXTVIEWDESCRIPTION","Description: ");

define("_TEXTVIEWCITY","Ma ville est: ");

define("_TEXTAGE","Age: ");

define("_TEXTVIEWEMAILSEND","Cliquez ici pour mon email");



//page index de friendfinder

define("_TEXTPROFILEUPDATED","Votre profil a été sauvegardé avec succès.");

define("_TEXTMEMBERCHANGEPIC","Changer votre photo");

define("_TEXTMEMBERBUTTON","Mettre à jour votre profil");






//photo des membres

define("_TEXTPICCURRENT","Votre photo actuelle");

define("_TEXTPICBUTTON","Mise à jour de la photo");

define("_TEXTUPLOADSUCCESS","Votre photo a été remplacée avec succès.");




  //add.php


define("_SELECTSORT"," <select name=sort size=1>

          <option value=date selected>Date</option>

          <option value=state>Etat</option>

          <option value=city>Ville</option>

          <option value=age>Age</option></select>");






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
