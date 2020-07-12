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
# Lanuage:			Spanish														#
# Name:				w4z004 w4z004@xoops.sytes.net								#
# Homepage:			http://www.xoops.sytes.net									#
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
define("_TEXTINDEX","Bienvenido al Friendfinder de ".$xoopsConfig['sitename'].",<br /> Aquí Usted podrá encontrar lo que busca");
define("_TEXTINDEXADD","Enviar perfil");
define("_TEXTINDEXSEARCH","Buscar un amigo");
define("_TEXTINDEXUPDATE","Editar su perfil");
define("_TEXTDELETEUSER","Borrar Perfil");

//adminpages

define("_editdel","Editar/Borrar/Activar ingreso");
define("_activatedsuccessfully","El perfil se activó satisfactoriamente");
define("_Smiliese","Editar caritas");
define("_Badwords","Malas palabras");
define("_pref","Configuración");
define("_TEXTEMAIL","Correo electrónico");

//select.php

define("_CLA_SAVMOD","Guardar");
define("_CLA_DEL","Borrar");
define("_CLA_CATSMOD","Sus datos han sido Cambiados satisfactoriamente");
define("_CLA_CATDEL","Sus datos han sido Borrados satisfactoriamente");
define("_CLA_CATADD","Sus datos han sido Guardados");
define("_CLA_ADDSTATE","gregar región");
define("_CLA_STATENAME","Nombre de la Región");
define("_CLA_ADD","agregar");
define("_CLA_STATE","Región");
define("_CLA_MODIFSTATE","Editar región");
define("_CLA_SELECTCAT","Por favor elija");
define("_CLA_ADDSEX","Agregar Sexo");
define("_CLA_SEXNAME","Sexo");
define("_CLA_MODIFSEX","Editar sexo");
define("_CLA_SEX","Sexo");
define("_CLA_ADDCATEGORY","Agregar Categoría");
define("_CLA_CATEGORYNAME","Nombre de la Categoría");
define("_CLA_MODIFCATEGORY","Editar Categoría");
define("_CLA_CATEGORY","Categoría");
define("_CLA_MODIFCAT","Editar Categoría");

//pref.php

define("_TEXTDATEFORMAT","Formato de fecha:");
define("_TEXTIMAGESIZE","Tamaño en bytes:");
define("_TEXTHEIGHTUNIT","Alto:");
define("_TEXTWEIGHTUNIT","Ancho:");
define("_TEXTAUTOACTIVE","Autoactiacion de perfiles:");
define("_PREFBUTTON","Guardar");
define("_ttmmjjjj","DD.MM.YYYY");
define("_jjjjmmtt","YYYY.MM:DD");
define("_CONFSAVE","Su configuración ha sido guardada");

//view-all.php

define("_ID","ID: ");
define("_UNAME","Nombre de Usuario: ");
define("_TEXTCATEGORY","Categoría:");
define("_SEX", "Sexo: ");
define("_NAME", "Nombre: ");
define("_COUNTRY","Pais: ");
define("_REGION", "Estado: ");
define("_CITY", "Ciudad: ");
define("_HOBBY", "Hobby: ");
define("_PARTNER", "Amigo: ");
define("_PIC","Foto: ");
define("_DESCRIPTION","Descripción: ");
define("_backtoadmin","regresar a la página de Administración");
define("_deletet","El perfil ha sido borrado exitosamente...<P> Presione <A HREF=./view-all.php>AQUI</A> Para regresar...");
define("_activate","activar");
define("_ENTRIES","Perfiles");
define("_TEXTSTATUS","Perfil activo:");
define("_editen","editar");
define("_delen","borrar");
define("_ff_yes","si");
define("_ff_no","no");

//delete.php

define("_TEXTUSERDELETED","Su perfil ha sido borrado satisfactoriamente");
define("_TEXTDELETEBUTTON","Borrar perfil");
define("_TEXTWANTTODELETE","Esta seguro que quiere borrarlo?");

// for email.php

define("_TEXTEMAILSENDER","Su nombre:");
define("_TEXTEMAILSENDERADDRESS","Su correo electrónico:");
define("_TEXTEMAILMESSAGE","Su mensaje:");
define("_TEXTEMAILBUTTON","Enviar Email");
define("_TEXTTHANKSMAIL","Gracias por su email, esperamos una respuesta positiva.");
define("_TEXTPLEASECHOOSEMEMBER","Por favor elija un usuaria al cual le gustaria enviarle un email");
define("_TEXTMAILSUBJECT","Respuesta de $name a su perfil en ".$xoopsConfig['sitename']."");

// Variables for the add.php page

define("_TEXTNOXOOPSUSER","Solo usuarios registrados pueden enviar/editar o borrar un perfil!<br /><br />");
define("_CLA_REGISTER","Por favor registrese o ingrese.<br />");
define("_CLA_CONECT","crear una conexión");
define("_CLA_OR","o");
define("_CLA_IFAREMEMBER","si usted ya ha ingresado");
define("_TEXTADDSEARCH","Buscar un compañero");
define("_TEXTADDSUCCESSFUL","gracias por ingresar");
define("_TEXTSEARCH","Buscar un compañero");
define("_TEXTADDBUTTON","enviar perfil");
define("_TEXTSEX","Yo soy: ");
define("_TEXTREALNAME","Nombre real: ");
define("_TEXTCOUNTRY","Su pais: ");
define("_TEXTDESCRIPTION","Su descripción: ");
define("_TEXTTANZ","Hobby: ");
define("_TEXTPSEX", "esta buscando: ");
define("_TEXTCITY","Su ciudad: ");
define("_TEXTHEIGHT","Altura: ");
define("_TEXTWEIGHT","Peso: ");
define("_TEXTBIRTHDAY","fecha de nacimientp: ");
define("_TEXTUPLOAD","Foto: (solamente jpg/gif max. ".$picsize." kb) ");
define("_USEREXISTS","Usted ya ha creado un perfil, solamente puede crear uno..");
define("_TEXTCITYMISSING","Ha olvidado completar su ciudad");
define("_TEXTYEARMISSING","ha olvidado completar su Fecha de nacimiento");
define("_FILEFORMAT","Solamente gif o jpg están permitidos");
define("_US_NEWUSERREGAT","Nuevo perfil Friendfinder de: ".$user."");
define("_US_HASJUSTREG","Un usuario ha enviado su perfil a friendfinder :

Nombre de usuario:           ".$user."
Nombre Real:                 ".$name."
Sexo:                        ".$sex."
Dirección de Email:          ".$email."
Pais:                        ".$country."
Estado:                      ".$state."
Ciudad:                      ".$city."
Amigo:                       ".$partner."
Hobbies:                     ".$hobby."
Alto:                        ".$height."
Peso:                        ".$weight."
fecha de nacimiento:         ".$day.".".$month.".".$year."
Descripción:                 ".$comment."

Para activar el perfil ingrese como administrador.");

define("_TEXTSEXMISSING","Por favor elija su sexo.");
define("_TEXTSTATEMISSING","Por favor elija su región");
define("_TEXTPARTNERMISSING","Por favor elija su compañero.");
define("_TEXTCATEGORYMISSING","Por favor elija su categoría.");

//These are the variables for the search.php

define("_TEXTSEARCHUNSUCCESSFUL","No hay resultados para esta busqueda!");
define("_TEXTSEARCHBUTTON","Buscar compañero");
define("_TEXTSEARCHSORT","Ordenar por: ");
define("_AGEFROM","desde");
define("_AGETILL", "till");

//These are the variables for the view.php

define("_TEXTVIEWREALNAME","Mi nombre es: ");
define("_TEXTVIEWEMAIL","Email: ");
define("_TEXTVIEWCOUNTRY","Vengo de: ");
define("_TEXTREGION","Estado: ");
define("_TEXTVIEWDESCRIPTION","Descripción: ");
define("_TEXTVIEWCITY","Mi ciudad es: ");
define("_TEXTAGE","Edad: ");
define("_TEXTVIEWEMAILSEND","Presione aquie para email");

//Member index site

define("_TEXTPROFILEUPDATED","Su perfil ha sido actualizado satisfactoriamente.");
define("_TEXTMEMBERCHANGEPIC","Cambiar su foto");
define("_TEXTMEMBERBUTTON","actualizar perfil");

//member pic site

define("_TEXTPICCURRENT","Su foto actual");
define("_TEXTPICBUTTON","Actualizar foto");
define("_TEXTUPLOADSUCCESS","Su foto ha sido subida satisfactoriamente.");

  //add.php

define("_SELECTSORT"," <select name=sort size=1>
          <option value=date selected>Fecha</option>
          <option value=state>Estado</option>
          <option value=city>Ciudad</option>
          <option value=age>Edad</option></select>");

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
