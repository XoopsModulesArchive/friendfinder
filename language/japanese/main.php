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

define("_TEXTINDEX","ようこそ ".$xoopsConfig['sitename']." 用フレンドファインダーへ。<br>
ここで貴方にぴったりなパートナーを見つけてください。");
define("_TEXTINDEXADD","プロフィールの投稿");
define("_TEXTINDEXSEARCH","パートナーの検索");
define("_TEXTINDEXUPDATE","プロフィールの編集");
define("_TEXTDELETEUSER","プロフィール削除");

//adminpages
define("_editdel","エントリー有効化・編集・削除");
define("_activatedsuccessfully","プロフィールの有効化に成功しました。");
define("_Smiliese","スマイル編集");
define("_Badwords","禁止用語");
define("_pref","基本設定");
define("_TEXTEMAIL","メールアドレス");

//select.php
define("_CLA_SAVMOD","保存");
define("_CLA_DEL","削除");
define("_CLA_CATSMOD","データの変更に成功しました。");
define("_CLA_CATDEL","データの削除に成功しました。");
define("_CLA_CATADD","データを保存しました。");

define("_CLA_ADDSTATE","地域の追加");
define("_CLA_STATENAME","地域名");
define("_CLA_ADD","追加");
define("_CLA_STATE","地域");
define("_CLA_MODIFSTATE","編集");
define("_CLA_SELECTCAT","選択して下さい");

define("_CLA_ADDSEX","性別の追加");
define("_CLA_SEXNAME","性別名");
define("_CLA_MODIFSEX","編集");
define("_CLA_SEX","性別");
 
define("_CLA_ADDCATEGORY","カテゴリの追加");
define("_CLA_CATEGORYNAME","カテゴリ名");
define("_CLA_MODIFCATEGORY","カテゴリの編集");
define("_CLA_CATEGORY","カテゴリ");
define("_CLA_MODIFCAT","カテゴリの編集");

//pref.php
define("_TEXTDATEFORMAT","日付フォーマット:");
define("_TEXTIMAGESIZE","画像サイズ(単位:バイト):");
define("_TEXTHEIGHTUNIT","身長の単位:");
define("_TEXTWEIGHTUNIT","体重の単位:");
define("_TEXTAUTOACTIVE","プロフィールの自動有効化:");
define("_PREFBUTTON","保存");
define("_ttmmjjjj","日.月.年");
define("_jjjjmmtt","年.月:日");
define("_CONFSAVE","設定を保存しました。");
//view-all.php

define("_ID","ID: ");
define("_UNAME","ユーザー名: ");
define("_TEXTCATEGORY","カテゴリ:");
define("_SEX", "性別: ");
define("_NAME", "名前: ");
define("_COUNTRY","国籍: ");
define("_REGION", "地域: ");
define("_CITY", "地域: ");
define("_HOBBY", "趣味: ");
define("_PARTNER", "パートナー: ");
define("_PIC","画像: ");
define("_DESCRIPTION","自己紹介: ");
define("_backtoadmin","管理画面に戻る。");
define("_deletet","プロフィールの削除に成功しました。<P> Click <a href=./view-all.php>ここ</A>をクリックするとXoopsフレンドファインダーに戻ります。");
define("_activate","有効化");
define("_ENTRIES","プロフィール");
define("_TEXTSTATUS","プロフィールの有効:");
define("_editen","編集");
define("_delen","削除");
define("_ff_yes","はい");
define("_ff_no","いいえ");

//delete.php
define("_TEXTUSERDELETED","貴方のプロフィールの削除に成功しました。");
define("_TEXTDELETEBUTTON","プロフィール削除");
define("_TEXTWANTTODELETE","貴方は本当にプロフィールを削除しますか?");

// for email.php
define("_TEXTEMAILSENDER","貴方の名前:");
define("_TEXTEMAILSENDERADDRESS","貴方のメールアドレス:");
define("_TEXTEMAILMESSAGE","貴方のメッセージ:");
define("_TEXTEMAILBUTTON","メール送信");
define("_TEXTTHANKSMAIL","メールありがとうございます。あなたからの返事を待っています。");
define("_TEXTPLEASECHOOSEMEMBER","あなたがメールをしたい相手を選んでください。");
define("_TEXTMAILSUBJECT","Reply from $name to your profile at ".$xoopsConfig['sitename']."");


// Variables for the add.php page
define("_TEXTNOXOOPSUSER","登録・ログインユーザのみがプロフィールの投稿・編集・削除が出来ます!<br><br>");
define("_CLA_REGISTER","登録もしくはログインして下さい。<br>");
define("_CLA_CONECT","コネクションの作成");
define("_CLA_OR","or");
define("_CLA_IFAREMEMBER","もし既にログインしている場合は");
define("_TEXTADDSEARCH","パートナ検索");
define("_TEXTADDSUCCESSFUL","エントリありがとうございます。");
define("_TEXTSEARCH","パートナー検索");
define("_TEXTADDBUTTON","プロフィールの投稿");
define("_TEXTSEX","性別: ");
define("_TEXTREALNAME","貴方の本名: ");
define("_TEXTCOUNTRY","貴方の国籍: ");
define("_TEXTDESCRIPTION","自己紹介: ");
define("_TEXTTANZ","趣味: ");
define("_TEXTPSEX", "探しているタイプ: ");
define("_TEXTCITY","貴方の居住地: ");
define("_TEXTHEIGHT","身長: ");
define("_TEXTWEIGHT","体重: ");
define("_TEXTBIRTHDAY","誕生日: ");
define("_TEXTUPLOAD","画像: (JPEG・GIF形式のみで".$picsize."キロバイトまでの大きさ)");
define("_USEREXISTS","既にプロフィールを作成しています。プロフィールは1つだけ作成することができます。");
define("_TEXTCITYMISSING","国籍を記入していません。");
define("_TEXTYEARMISSING","誕生日記入していません。");
define("_FILEFORMAT","画像はJPEG・GIF形式のみ利用出来ます。");
define("_US_NEWUSERREGAT","$userからの新しいプロフィール");
define("_US_HASJUSTREG","ユーザーがプロフィールをフレンドファインダーに投稿しました。 :

ユーザ名:            ".$user."
本名:                ".$name."
性別:                ".$sex."
メールアドレス:      ".$email."
国籍:                ".$country."
地域:                ".$state."
都市:                ".$city."
パートナー:          ".$partner."
趣味:                ".$hobby."
身長:                ".$height."
体重:                ".$weight."
誕生日:              ".$year.".".$month.".".$day."
自己紹介:            ".$comment."

管理者がログインしてプロフィールを有効化します。");

define("_TEXTSEXMISSING","性別を選択して下さい。");
define("_TEXTSTATEMISSING","地域を選択して下さい。");
define("_TEXTPARTNERMISSING","パートナーを選択して下さい。");
define("_TEXTCATEGORYMISSING","カテゴリを選択して下さい。");

//These are the variables for the search.php
define("_TEXTSEARCHUNSUCCESSFUL","貴方の検索に該当するデーターがありませんでした!");
define("_TEXTSEARCHBUTTON","パートナー検索");
define("_TEXTSEARCHSORT","表示順: ");
define("_AGEFROM","最低年齢");
define("_AGETILL", "最高年齢");

//These are the variables for the view.php
define("_TEXTVIEWREALNAME","私の名前は: ");
define("_TEXTVIEWEMAIL","メールアドレスは: ");
define("_TEXTVIEWCOUNTRY","私はここで紹介を受けました: ");
define("_TEXTREGION","都道府県: ");
define("_TEXTVIEWDESCRIPTION","自己紹介: ");
define("_TEXTVIEWCITY","私が住んでいる都市: ");
define("_TEXTAGE","年齢: ");
define("_TEXTVIEWEMAILSEND","ここをクリックするとメールを送信します。");

//Member index site
define("_TEXTPROFILEUPDATED","貴方のプロフィールの更新に成功しました。");
define("_TEXTMEMBERCHANGEPIC","貴方の画像の変更");
define("_TEXTMEMBERBUTTON","プロフィール更新");


//member pic site
define("_TEXTPICCURRENT","貴方の現在の画像");
define("_TEXTPICBUTTON","画像の更新");
define("_TEXTUPLOADSUCCESS","貴方の画像の更新に成功しました。");

define("_SELECTSORT"," <select name=sort size=1>
          <option value=date selected>日付</option>
          <option value=state>都道府県</option>
          <option value=city>地域</option>
          <option value=age>年齢</option></select>");

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
