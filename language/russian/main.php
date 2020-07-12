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
# Lanuage:			Russian														#
# Name:				Vladimir Dmitrijev webmaster@xoops.ru						#
# Homepage:			http://www.xoops.ru											#
#																				#
#                                                                               #
# Last modification:            2003-02-15										#
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
define("ADDDIRECTFRIENDS","Добавить Друзей");
define("_menu3","Главная Конфигурация");
define("_TEXTLOGO","Лого для Friendfinder: ");
define("_CLA_MODIFCATEGORYIMAGE","Название Картинки:" );
define("_CLA_CATEGORYIMAGENAME","Название Картинки:" );
define("_CLA_MODIFSEXIMAGE","Название Картинки:" );
define("_CLA_SEXIMAGENAME","Название Картинки:" );
define("_TEXTTOPIC","Тема: ");
define("_TEXTICON","Иконка, которая будет показываться на index.php");
define("_TEXTCANUSEREDIT","Разрешить Пользователям редактировать Профиль: ");
define("_TEXTCANUSERDELETE","Разрешить Пользователям удалять Профиль: ");
define("_TEXTPICUPLOAD","Разрешить Пользователям загружать свои Картинки: ");
define("_TEXTSEARCHFORCOUNTRY","Можно ли Пользователей настроить или Искать по стране проживания: ");
define("_TEXTIMAGESIZEHEIGHT","Максимально-допустимая Высота загружаемых Картинок (в пикселях)");
define("_TEXTIMAGESIZEWIGHT","Максимально-допустимая Ширина загружаемых Картинок (в пикселях)");
define("_TEXTUSEGENERATEIMAGE","Использовать Генерирование для изменения размеров Картинок (нужна библиотека GD) ");
define("_TEXTGIMAXWIGHT","Ширина генерированнной Картинки (в пикселях)");
//new since 3.05
define("_TEXTANONYMUSCANTMAIL","Только зарегистрированные Пользователи могут посылать e-mail");
define("_TEXTANONYMUSSEARCH","Разрешить Гостям Искать по Профилям");
define("_TEXTANONYMUSMAIL","Разрешить Гостям посылать e-Mail хозяину Профиля");
define("_TEXTMAILTOADMIN","Послать e-Mail для нового Профиля");
define("_TEXTADMINEMAIL","Введите e-Mail адрес нового Профиля");
define("_TEXTFOOTERMESSAGE","Введите Нижний Текст Сообщения, которое Вы хотели бы добавлять в  каждый e-Mail");
define("_SELECTNOMATTER","Не Обращать Внимания");
//old stuff
define("_TEXTINDEX","Добро Пожаловать на <b>Поиск Друга</b> сайта ".$xoopsConfig['sitename'].",<br>здесь вы сможете найти себе отличного Партнёра");

define("_TEXTINDEXADD","Добавить Профиль");

define("_TEXTINDEXSEARCH","Найти Партнёра");

define("_TEXTINDEXUPDATE","Редактировать Ваш Профиль");

define("_TEXTDELETEUSER","Удалить Профиль");



//adminpages

define("_editdel","Редактировать/удалить/активировать Вход");

define("_activatedsuccessfully","Активирование Профиля прошло успешно!");

define("_Smiliese","Редактировать Смайлики");

define("_Badwords","Плохие Слова");

define("_pref","Конфигурация");

define("_TEXTEMAIL","E-mail адрес");

define("_CLA_SAVMOD","Сохранить");
define("_CLA_DEL","Удалить");
define("_CLA_CATSMOD","Изменение Ваших Данных прошло успешно.");
define("_CLA_CATDEL","Удаление Ваших Данных прошло успешно.");
define("_CLA_CATADD","Ваши Данные были сохранены");

define("_CLA_ADDSTATE","Добавить регион");
define("_CLA_STATENAME","Название региона");
define("_CLA_ADD","добавить");
define("_CLA_STATE","Регион");
define("_CLA_MODIFSTATE","Редактировать регион");
define("_CLA_SELECTCAT","Выберите, пожалуйста");


define("_CLA_ADDSEX","Добавить пол");
define("_CLA_SEXNAME","Название пола");
define("_CLA_MODIFSEX","Редактировать пол");
define("_CLA_SEX","Пол");

define("_CLA_ADDCATEGORY","Добавить Категорию");
define("_CLA_CATEGORYNAME","Название Категории");
define("_CLA_MODIFCATEGORY","Редактировать Категорию");
define("_CLA_CATEGORY","Категория");
define("_CLA_MODIFCAT","Редактировать Категорию");



//pref.php

define("_TEXTDATEFORMAT","Формат Даты:");

define("_TEXTIMAGESIZE","Размер Картинки в Байтах:");

define("_TEXTHEIGHTUNIT","Высота:");

define("_TEXTWEIGHTUNIT","Вес:");

define("_TEXTAUTOACTIVE","АвтоАктивирование Профилей:");

define("_PREFBUTTON","Сохранить");

define("_ttmmjjjj","DD.MM.YYYY");

define("_jjjjmmtt","YYYY.MM:DD");

define("_CONFSAVE","Ваша Конфигурация была сохранена");

//view-all.php



define("_ID","ID: ");

define("_UNAME","Ник: ");

define("_TEXTCATEGORY","Категория:");

define("_SEX", "Пол: ");

define("_NAME", "Имя: ");

define("_COUNTRY","Страна: ");

define("_REGION", "Штат: ");

define("_CITY", "Город: ");

define("_HOBBY", "Хобби: ");

define("_PARTNER", "Партнёр: ");

define("_PIC","Картинка: ");

define("_DESCRIPTION","Описание: ");

define("_backtoadmin","Вернуться на страницу Администрирования");

define("_deletet","Удаление Профиля прошло успешно...<P> Нажмите <A HREF=./view-all.php><b>Здесь</b></A>, чтобы вернуться на <b>Поиск Друга</b>...");

define("_activate","активировать");

define("_ENTRIES","Всего Профилей - ");

define("_TEXTSTATUS","Профиль Активирован:");

define("_editen","редактировать");

define("_delen","удалить");

define("_ff_yes","да");

define("_ff_no","нет");



//delete.php

define("_TEXTUSERDELETED","Удаление Вашего Профиля прошло успешно");

define("_TEXTDELETEBUTTON","Удалить Профиль");

define("_TEXTWANTTODELETE","Вы действительно хотите удалить этот Профиль");



// for email.php

define("_TEXTEMAILSENDER","Ваше Имя:");

define("_TEXTEMAILSENDERADDRESS","Ваш E-mail адрес:");

define("_TEXTEMAILMESSAGE","Ваше Сообщение:");

define("_TEXTEMAILBUTTON","отправить E-mail");

define("_TEXTTHANKSMAIL","Спасибо за Ваш Email. Мы надеемся, что Вы получите положительный Ответ.");

define("_TEXTPLEASECHOOSEMEMBER","Выберите, пожалуйста, Пользователя, которому хотите послать E-mail");

define("_TEXTMAILSUBJECT","Прислано для Вас от $name с сайта  ".$xoopsConfig['sitename']."");





// Variables for the add.php page

define("_TEXTNOXOOPSUSER","Только зарегистрированные или вошедшие в систему Пользователи могут присылать/редактировать или удалять Профиль!<br><br>");

define("_CLA_REGISTER","Зарегистрируйтесь, пожалуйста, или войдите в систему.<br>");

define("_CLA_CONECT","создать соединение");

define("_CLA_OR","или");

define("_CLA_IFAREMEMBER","если Вы уже вошли в систему");

define("_TEXTADDSEARCH","Искать Партнёра");

define("_TEXTADDSUCCESSFUL","Добро Пожаловать");

define("_TEXTSEARCH","Поиск партнёра");

define("_TEXTADDBUTTON","Добавить Профиль");

define("_TEXTSEX","Пол: ");

define("_TEXTREALNAME","Ваше настоящее Имя: ");

define("_TEXTCOUNTRY","Ваша Страна: ");

define("_TEXTDESCRIPTION","Опишите Себя: ");

define("_TEXTTANZ","Хобби: ");

define("_TEXTPSEX", "Вы ищете: ");

define("_TEXTCITY","Ваш Город: ");

define("_TEXTHEIGHT","Рост: ");

define("_TEXTWEIGHT","Вес: ");

define("_TEXTBIRTHDAY","Дата Рождения: ");

define("_TEXTUPLOAD","Фото: (только jpg/gif макс. ".$picsize." kb) ");

define("_USEREXISTS","Вы уже создали Профиль. Вы можете иметь только Один Профиль.");

define("_TEXTCITYMISSING","Вы забыли написать Вашу Страну");

define("_TEXTYEARMISSING","Вы забыли написать Дату Рождения");

define("_FILEFORMAT","Разрешены графические форматы - только gif или jpg");

define("_US_NEWUSERREGAT","Новый Профиль Friendfinder для: ".$user."");
define("_US_HASJUSTREG","Пользователь с этим Профилем зарегистрирован на friendfinder :

Ник:                        ".$user."
Настоящее Имя:              ".$name."
Пол:                        ".$sex."
E-Mail:                     ".$email."
Страна:                     ".$country."
Штат:                       ".$state."
Город:                      ".$city."
Партнёр:                    ".$partner."
Увлечения:                  ".$hobby."
Рост:                       ".$height."
Вес:                        ".$weight."
Дата Рождения:              ".$day.".".$month.".".$year."
Описание:                   ".$comment."

Чтобы Активировать Профиль, войдите в систему, как Админ.");

define("_TEXTSEXMISSING","Укажите, пожалуйста, Ваш пол.");
define("_TEXTSTATEMISSING","Укажите, пожалуйста, Ваш регион");
define("_TEXTPARTNERMISSING","Укажите, пожалуйста, Вашего Партнёра.");
define("_TEXTCATEGORYMISSING","Укажите, пожалуйста, Вашу Категорию.");




//These are the variables for the search.php

define("_TEXTSEARCHUNSUCCESSFUL","На Ваш Запрос, к сожалению, ни одни данные не подходят!");

define("_TEXTSEARCHBUTTON","Искать Партнёра");

define("_TEXTSEARCHSORT","Отсортировать по: ");

define("_AGEFROM","от");

define("_AGETILL", "до");



//These are the variables for the view.php

define("_TEXTVIEWREALNAME","Меня зовут: ");

define("_TEXTVIEWEMAIL","E-mail: ");

define("_TEXTVIEWCOUNTRY","Я из: ");

define("_TEXTREGION","Штат: ");

define("_TEXTVIEWDESCRIPTION","Описание: ");

define("_TEXTVIEWCITY","Я живу в городе: ");

define("_TEXTAGE","Возраст: ");

define("_TEXTVIEWEMAILSEND","Нажмите здесь, чтобы послать E-mail");



//Member index site

define("_TEXTPROFILEUPDATED","Обновление Вашего Профиля прошло успешно!");

define("_TEXTMEMBERCHANGEPIC","Поменять Вашу Картинку");

define("_TEXTMEMBERBUTTON","Обновить Профиль");





//member pic site

define("_TEXTPICCURRENT","Ваша Текущая Картинка");

define("_TEXTPICBUTTON","Обновить Картинку");

define("_TEXTUPLOADSUCCESS","Загрузка Вашей Картинки прошла успешно!");



define("_SELECTSORT"," <select name=sort size=1>

          <option value=date selected>Дата</option>

          <option value=state>Штат</option>

          <option value=city>Город</option>

          <option value=age>Возраст</option></select>");


  //add.php

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

<option value=RU>Russian Federation</option>

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
