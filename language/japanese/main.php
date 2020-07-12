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
# Lanuage:			Japanese													#
# Name:				elf webmaster@elf.no-ip.org									#
# Homepage:			http://elf.no-ip.org/										#
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

define("_TEXTINDEX","�褦���� ".$xoopsConfig['sitename']." �ѥե��ɥե���������ء�<br>
�����ǵ����ˤԤä���ʥѡ��ȥʡ��򸫤Ĥ��Ƥ���������");
define("_TEXTINDEXADD","�ץ�ե���������");
define("_TEXTINDEXSEARCH","�ѡ��ȥʡ��θ���");
define("_TEXTINDEXUPDATE","�ץ�ե�������Խ�");
define("_TEXTDELETEUSER","�ץ�ե�������");

//adminpages
define("_editdel","����ȥ꡼ͭ�������Խ������");
define("_activatedsuccessfully","�ץ�ե������ͭ�������������ޤ�����");
define("_Smiliese","���ޥ����Խ�");
define("_Badwords","�ػ��Ѹ�");
define("_pref","��������");
define("_TEXTEMAIL","�᡼�륢�ɥ쥹");

//select.php
define("_CLA_SAVMOD","��¸");
define("_CLA_DEL","���");
define("_CLA_CATSMOD","�ǡ������ѹ����������ޤ�����");
define("_CLA_CATDEL","�ǡ����κ�����������ޤ�����");
define("_CLA_CATADD","�ǡ�������¸���ޤ�����");

define("_CLA_ADDSTATE","�ϰ���ɲ�");
define("_CLA_STATENAME","�ϰ�̾");
define("_CLA_ADD","�ɲ�");
define("_CLA_STATE","�ϰ�");
define("_CLA_MODIFSTATE","�Խ�");
define("_CLA_SELECTCAT","���򤷤Ʋ�����");

define("_CLA_ADDSEX","���̤��ɲ�");
define("_CLA_SEXNAME","����̾");
define("_CLA_MODIFSEX","�Խ�");
define("_CLA_SEX","����");
 
define("_CLA_ADDCATEGORY","���ƥ�����ɲ�");
define("_CLA_CATEGORYNAME","���ƥ���̾");
define("_CLA_MODIFCATEGORY","���ƥ�����Խ�");
define("_CLA_CATEGORY","���ƥ���");
define("_CLA_MODIFCAT","���ƥ�����Խ�");

//pref.php
define("_TEXTDATEFORMAT","���եե����ޥå�:");
define("_TEXTIMAGESIZE","����������(ñ��:�Х���):");
define("_TEXTHEIGHTUNIT","��Ĺ��ñ��:");
define("_TEXTWEIGHTUNIT","�νŤ�ñ��:");
define("_TEXTAUTOACTIVE","�ץ�ե�����μ�ưͭ����:");
define("_PREFBUTTON","��¸");
define("_ttmmjjjj","��.��.ǯ");
define("_jjjjmmtt","ǯ.��:��");
define("_CONFSAVE","�������¸���ޤ�����");
//view-all.php

define("_ID","ID: ");
define("_UNAME","�桼����̾: ");
define("_TEXTCATEGORY","���ƥ���:");
define("_SEX", "����: ");
define("_NAME", "̾��: ");
define("_COUNTRY","����: ");
define("_REGION", "�ϰ�: ");
define("_CITY", "�ϰ�: ");
define("_HOBBY", "��̣: ");
define("_PARTNER", "�ѡ��ȥʡ�: ");
define("_PIC","����: ");
define("_DESCRIPTION","���ʾҲ�: ");
define("_backtoadmin","�������̤���롣");
define("_deletet","�ץ�ե�����κ�����������ޤ�����<P> Click <a href=./view-all.php>����</A>�򥯥�å������Xoops�ե��ɥե�������������ޤ���");
define("_activate","ͭ����");
define("_ENTRIES","�ץ�ե�����");
define("_TEXTSTATUS","�ץ�ե������ͭ��:");
define("_editen","�Խ�");
define("_delen","���");
define("_ff_yes","�Ϥ�");
define("_ff_no","������");

//delete.php
define("_TEXTUSERDELETED","�����Υץ�ե�����κ�����������ޤ�����");
define("_TEXTDELETEBUTTON","�ץ�ե�������");
define("_TEXTWANTTODELETE","�����������˥ץ�ե�����������ޤ���?");

// for email.php
define("_TEXTEMAILSENDER","������̾��:");
define("_TEXTEMAILSENDERADDRESS","�����Υ᡼�륢�ɥ쥹:");
define("_TEXTEMAILMESSAGE","�����Υ�å�����:");
define("_TEXTEMAILBUTTON","�᡼������");
define("_TEXTTHANKSMAIL","�᡼�뤢�꤬�Ȥ��������ޤ������ʤ�������ֻ����ԤäƤ��ޤ���");
define("_TEXTPLEASECHOOSEMEMBER","���ʤ����᡼��򤷤�����������Ǥ���������");
define("_TEXTMAILSUBJECT","Reply from $name to your profile at ".$xoopsConfig['sitename']."");


// Variables for the add.php page
define("_TEXTNOXOOPSUSER","��Ͽ��������桼���Τߤ��ץ�ե��������ơ��Խ������������ޤ�!<br><br>");
define("_CLA_REGISTER","��Ͽ�⤷���ϥ����󤷤Ʋ�������<br>");
define("_CLA_CONECT","���ͥ������κ���");
define("_CLA_OR","or");
define("_CLA_IFAREMEMBER","�⤷���˥����󤷤Ƥ������");
define("_TEXTADDSEARCH","�ѡ��ȥʸ���");
define("_TEXTADDSUCCESSFUL","����ȥꤢ�꤬�Ȥ��������ޤ���");
define("_TEXTSEARCH","�ѡ��ȥʡ�����");
define("_TEXTADDBUTTON","�ץ�ե���������");
define("_TEXTSEX","����: ");
define("_TEXTREALNAME","��������̾: ");
define("_TEXTCOUNTRY","�����ι���: ");
define("_TEXTDESCRIPTION","���ʾҲ�: ");
define("_TEXTTANZ","��̣: ");
define("_TEXTPSEX", "õ���Ƥ��륿����: ");
define("_TEXTCITY","�����εｻ��: ");
define("_TEXTHEIGHT","��Ĺ: ");
define("_TEXTWEIGHT","�ν�: ");
define("_TEXTBIRTHDAY","������: ");
define("_TEXTUPLOAD","����: (JPEG��GIF�����Τߤ�".$picsize."����Х��ȤޤǤ��礭��)");
define("_USEREXISTS","���˥ץ�ե������������Ƥ��ޤ����ץ�ե������1�Ĥ����������뤳�Ȥ��Ǥ��ޤ���");
define("_TEXTCITYMISSING","���Ҥ������Ƥ��ޤ���");
define("_TEXTYEARMISSING","�������������Ƥ��ޤ���");
define("_FILEFORMAT","������JPEG��GIF�����Τ����ѽ���ޤ���");
define("_US_NEWUSERREGAT","$user����ο������ץ�ե�����");
define("_US_HASJUSTREG","�桼�������ץ�ե������ե��ɥե������������Ƥ��ޤ����� :

�桼��̾:            ".$user."
��̾:                ".$name."
����:                ".$sex."
�᡼�륢�ɥ쥹:      ".$email."
����:                ".$country."
�ϰ�:                ".$state."
�Ի�:                ".$city."
�ѡ��ȥʡ�:          ".$partner."
��̣:                ".$hobby."
��Ĺ:                ".$height."
�ν�:                ".$weight."
������:              ".$year.".".$month.".".$day."
���ʾҲ�:            ".$comment."

�����Ԥ������󤷤ƥץ�ե������ͭ�������ޤ���");

define("_TEXTSEXMISSING","���̤����򤷤Ʋ�������");
define("_TEXTSTATEMISSING","�ϰ�����򤷤Ʋ�������");
define("_TEXTPARTNERMISSING","�ѡ��ȥʡ������򤷤Ʋ�������");
define("_TEXTCATEGORYMISSING","���ƥ�������򤷤Ʋ�������");

//These are the variables for the search.php
define("_TEXTSEARCHUNSUCCESSFUL","�����θ����˳�������ǡ�����������ޤ���Ǥ���!");
define("_TEXTSEARCHBUTTON","�ѡ��ȥʡ�����");
define("_TEXTSEARCHSORT","ɽ����: ");
define("_AGEFROM","����ǯ��");
define("_AGETILL", "�ǹ�ǯ��");

//These are the variables for the view.php
define("_TEXTVIEWREALNAME","���̾����: ");
define("_TEXTVIEWEMAIL","�᡼�륢�ɥ쥹��: ");
define("_TEXTVIEWCOUNTRY","��Ϥ����ǾҲ������ޤ���: ");
define("_TEXTREGION","��ƻ�ܸ�: ");
define("_TEXTVIEWDESCRIPTION","���ʾҲ�: ");
define("_TEXTVIEWCITY","�䤬����Ǥ����Ի�: ");
define("_TEXTAGE","ǯ��: ");
define("_TEXTVIEWEMAILSEND","�����򥯥�å�����ȥ᡼����������ޤ���");

//Member index site
define("_TEXTPROFILEUPDATED","�����Υץ�ե�����ι������������ޤ�����");
define("_TEXTMEMBERCHANGEPIC","�����β������ѹ�");
define("_TEXTMEMBERBUTTON","�ץ�ե����빹��");


//member pic site
define("_TEXTPICCURRENT","�����θ��ߤβ���");
define("_TEXTPICBUTTON","�����ι���");
define("_TEXTUPLOADSUCCESS","�����β����ι������������ޤ�����");

define("_SELECTSORT"," <select name=sort size=1>
          <option value=date selected>����</option>
          <option value=state>��ƻ�ܸ�</option>
          <option value=city>�ϰ�</option>
          <option value=age>ǯ��</option></select>");

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
