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
# Lanuage:			Tchinese													#
# Name:				liya liya@wanderer.com.tw 									#
# Homepage:			http://tw.xoops.org											#
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
define("ADDDIRECTFRIENDS","新增交友資料");
define("_menu3","主要設定");
define("_TEXTLOGO","交友模組Logo: ");
define("_CLA_MODIFCATEGORYIMAGE","圖檔:" );
define("_CLA_CATEGORYIMAGENAME","圖檔:" );
define("_CLA_MODIFSEXIMAGE","圖檔:" );
define("_CLA_SEXIMAGENAME","性別圖檔:" );
define("_TEXTTOPIC","主題: ");
define("_TEXTICON","首頁Icon");
define("_TEXTCANUSEREDIT","允許使用者編輯個人資料: ");
define("_TEXTCANUSERDELETE","允許使用者刪除個人資料: ");
define("_TEXTPICUPLOAD","允許使用者上載圖檔: ");
define("_TEXTSEARCHFORCOUNTRY","允許使用者依照國家搜尋資料: ");
define("_TEXTIMAGESIZEHEIGHT","允許上載圖檔最高高度(pixel)");
define("_TEXTIMAGESIZEWIGHT","允許上載圖檔最寬寬度(pixel)");
define("_TEXTUSEGENERATEIMAGE","使用自動調整圖片大小功能(須啟動GD函數) ");
define("_TEXTGIMAXWIGHT","自動調整圖片寬度設定(pixel)");
//new since 3.05
define("_TEXTANONYMUSCANTMAIL","只允許註冊者可以寫Email會員");
define("_TEXTANONYMUSSEARCH","允許匿名者搜尋資料");
define("_TEXTANONYMUSMAIL","允許匿名者寫Email給會員");
define("_TEXTMAILTOADMIN","可以EMail給新加入會員");
define("_TEXTADMINEMAIL","輸入eMail");
define("_TEXTFOOTERMESSAGE","輸入eMail下面的注解");
define("_SELECTNOMATTER","無符合資料");
//old stuff
define("_TEXTINDEX","歡迎來到".$xoopsConfig['sitename']."交友天地,<br>

這裡可以找到你的同好！");

define("_TEXTINDEXADD","提供你的資料");

define("_TEXTINDEXSEARCH","尋找同好");

define("_TEXTINDEXUPDATE","編輯你的資料");

define("_TEXTDELETEUSER","刪除你的資料");



//adminpages

define("_editdel","編輯/刪除/啟動功能");

define("_activatedsuccessfully","資料啟動完成！");

define("_Smiliese","編輯表情圖");

define("_Badwords","不雅語句過濾設定");

define("_pref","一般設定");

define("_TEXTEMAIL","EMail");

//select.php

define("_CLA_SAVMOD","儲存");
define("_CLA_DEL","刪除");
define("_CLA_CATSMOD","資料更新完成！");
define("_CLA_CATDEL","資料刪除完成！");
define("_CLA_CATADD","資料儲存完成！");

define("_CLA_ADDSTATE","新增地區");
define("_CLA_STATENAME","地區名稱");
define("_CLA_ADD","新增");
define("_CLA_STATE","地區");
define("_CLA_MODIFSTATE","編輯地區");
define("_CLA_SELECTCAT","請選擇");

define("_CLA_ADDSEX","新增性別");
define("_CLA_SEXNAME","性別名稱");
define("_CLA_MODIFSEX","編輯性別");
define("_CLA_SEX","性別");

define("_CLA_ADDCATEGORY","新增分類目錄");
define("_CLA_CATEGORYNAME","分類目錄名稱");
define("_CLA_MODIFCATEGORY","編輯分類目錄");
define("_CLA_CATEGORY","分類目錄");
define("_CLA_MODIFCAT","編輯分類目錄");



//pref.php

define("_TEXTDATEFORMAT","日期格式：");

define("_TEXTIMAGESIZE","上傳圖片限制大小byte：");

define("_TEXTHEIGHTUNIT","身高格式：");

define("_TEXTWEIGHTUNIT","體重格式：");

define("_TEXTAUTOACTIVE","自動啟動會員權限：");

define("_PREFBUTTON","儲存");

define("_ttmmjjjj","DD.MM.YYYY");

define("_jjjjmmtt","YYYY.MM:DD");

define("_CONFSAVE","儲存完成");

//view-all.php



define("_ID","編號：");

define("_UNAME","使用者名稱：");

define("_TEXTCATEGORY","分類目錄：");

define("_SEX", "性別：");

define("_NAME", "名稱：");

define("_COUNTRY","國家：");

define("_REGION", "州：");

define("_CITY", "城市：");

define("_HOBBY", "興趣：");

define("_PARTNER", "同好：");

define("_PIC","圖案：");

define("_DESCRIPTION","描述：");

define("_backtoadmin","回到管理介面");

define("_deletet","資料刪除完畢<P>請按<A HREF=./view-all.php>這裡</A>回到交友天地");

define("_activate","啟動");

define("_ENTRIES","個人資料");

define("_TEXTSTATUS","個人資料啟動：");

define("_editen","編輯");

define("_delen","刪除");

define("_ff_yes","是");

define("_ff_no","否");



//delete.php

define("_TEXTUSERDELETED","你的個人資料刪除完畢");

define("_TEXTDELETEBUTTON","刪除個人資料");

define("_TEXTWANTTODELETE","你確定要刪除你的個人資料");



// for email.php

define("_TEXTEMAILSENDER","你的名字：");

define("_TEXTEMAILSENDERADDRESS","你的Email：");

define("_TEXTEMAILMESSAGE","你的訊息：");

define("_TEXTEMAILBUTTON","寄出Email");

define("_TEXTTHANKSMAIL","謝謝你的Email，我們希望你們有良好的互動。");

define("_TEXTPLEASECHOOSEMEMBER","請選擇同好並寄出Email");

define("_TEXTMAILSUBJECT","你收到 $name 的回信 ".$xoopsConfig['sitename']."");





// Variables for the add.php page

define("_TEXTNOXOOPSUSER","只有會員可以提供或編輯/刪除個人資料！<br><br>");

define("_CLA_REGISTER","請註冊或登入。<br>");

define("_CLA_CONECT","建立關係");

define("_CLA_OR","or");

define("_CLA_IFAREMEMBER","如果你已經登入");

define("_TEXTADDSEARCH","尋找同好");

define("_TEXTADDSUCCESSFUL","謝謝你的參與");

define("_TEXTSEARCH","尋找同好");

define("_TEXTADDBUTTON","提供個人資料");

define("_TEXTSEX","我是：");

define("_TEXTREALNAME","真實姓名：");

define("_TEXTCOUNTRY","你的國家：");

define("_TEXTDESCRIPTION","個人描述：");

define("_TEXTTANZ","你的興趣：");

define("_TEXTPSEX", "你正尋常對象：");

define("_TEXTCITY","你所在城市");

define("_TEXTHEIGHT","身高：");

define("_TEXTWEIGHT","體重：");

define("_TEXTBIRTHDAY","生日：");

define("_TEXTUPLOAD","圖片：(限 jpg/gif max. ".$picsize." kb) ");

define("_USEREXISTS","你已經建立你的個人資料！你只能建立一次！");

define("_TEXTCITYMISSING","你忘記填寫所在城市");

define("_TEXTYEARMISSING","你忘記填寫生日");

define("_FILEFORMAT","只能上傳gif或jpg格式");

define("_US_NEWUSERREGAT","新同好".$user." 加入");
define("_US_HASJUSTREG","目前有一位同好加入：

名稱：                       ".$user."
真實名字：                   ".$name."
性別：                       ".$sex."
EMailaddress:                ".$email."
國家：                       ".$country."
州：                         ".$state."
城市：                       ".$city."
同好：                       ".$partner."
興趣：                       ".$hobby."
身高：                       ".$height."
體重：                       ".$weight."
生日：	                     ".$day.".".$month.".".$year."
描述：                       ".$comment."

請進入管理介面啟動個人資料。");

define("_TEXTSEXMISSING","請選擇你的性別。");
define("_TEXTSTATEMISSING","請選擇你的地區。");
define("_TEXTPARTNERMISSING","請選擇你的同好。");
define("_TEXTCATEGORYMISSING","請選擇你的目錄。");





//These are the variables for the search.php

define("_TEXTSEARCHUNSUCCESSFUL","Y目前沒有符合你的要求資料！");

define("_TEXTSEARCHBUTTON","尋找同好");

define("_TEXTSEARCHSORT","排序：");

define("_AGEFROM","從");

define("_AGETILL", "到");



//These are the variables for the view.php

define("_TEXTVIEWREALNAME","我的名稱：");

define("_TEXTVIEWEMAIL","Email: ");

define("_TEXTVIEWCOUNTRY","我從：");

define("_TEXTREGION","州：");

define("_TEXTVIEWDESCRIPTION","描述：");

define("_TEXTVIEWCITY","城市：");

define("_TEXTAGE","年齡：");

define("_TEXTVIEWEMAILSEND","按此寄Email");



//Member index site

define("_TEXTPROFILEUPDATED","更新資料完成。");

define("_TEXTMEMBERCHANGEPIC","更新圖案");

define("_TEXTMEMBERBUTTON","更新");





//member pic site

define("_TEXTPICCURRENT","目前圖片");

define("_TEXTPICBUTTON","更新");

define("_TEXTUPLOADSUCCESS","更新完成");




  //add.php


define("_SELECTSORT"," <select name=sort size=1>

          <option value=date selected>日期</option>

          <option value=state>州</option>

          <option value=city>城市</option>

          <option value=age>年齡</option></select>");






define("_SELECTCOUNTRY","<select name=country size=1>

<option value=>- 請選擇你的國家 -</option>
<option value=CH>瑞士</option>
<option value=NZ>紐西蘭 New Zealand</option>
<option value=TT> 千里達及托巴哥</option>
<option value=TR> 土耳其</option>
<option value=TC> 土克斯及開科斯群島</option>
<option value=TM> 土庫曼</option>
<option value=US> 美國</option>
<option value=UM> 美國外島</option>
<option value=VI> 美屬維爾京群島</option>
<option value=AS> 美屬薩摩亞</option>
<option value=MR> 茅利塔尼亞</option>
<option value=TW"  selected  > 台灣</option>
<option value=UK> 英國</option>
<option value=CN> 中國大陸</option>
<option value=IO> 英屬印度</option>
<option value=VG> 英屬維爾京群島</option>
<option value=GH> 迦納</option>
<option value=HK> 香港特別行政區</option>
<option value=BT> 不丹</option>
<option value=CF> 中非</option>
<option value=DK> 丹麥</option>
<option value=EC> 厄瓜多</option>
<option value=ER> 厄利垂亞</option>
<option value=PG> 巴布亞紐幾內亞</option>
<option value=BR> 巴西</option>
<option value=BB> 巴貝多</option>
<option value=PY> 巴拉圭</option>
<option value=BH> 巴林</option>
<option value=BS> 巴哈馬 </option>
<option value=PA> 巴拿馬</option>
<option value=PK> 巴基斯坦</option>
<option value=JP> 日本</option>
<option value=BE> 比利時 </option>
<option value=GW> 比索</option>
<option value=JM> 牙買加</option>
<option value=IL> 以色列</option>
<option value=CA> 加拿大</option>
<option value=GA> 加彭</option>
<option value=MP> 北馬里安納</option>
<option value=KP> 北韓</option>
<option value=QA> 卡達</option>
<option value=CC> 可可斯群島</option>
<option value=CU> 古巴</option>
<option value=SZ> 史瓦濟蘭</option>
<option value=NE> 尼日</option>
<option value=NI> 尼加拉瓜</option>
<option value=NP> 尼泊爾</option>
<option value=BF> 布吉納法索</option>
<option value=BV> 布威島</option>
<option value=GT> 瓜地馬拉</option>
<option value=WF> 瓦利斯和福杜納群島</option>
<option value=GM> 甘比亞</option>
<option value=BY> 白俄羅斯</option>
<option value=PN> 皮特康</option>
<option value=LT> 立陶宛</option>
<option value=IQ> 伊拉克</option>
<option value=IR> 伊朗</option>
<option value=IS> 冰島</option>
<option value=LI> 列支敦斯登</option>
<option value=HU> 匈牙利</option>
<option value=ID> 印尼</option>
<option value=IN> 印度</option>
<option value=DJ> 吉布地</option>
<option value=KI> 吉里巴斯</option>
<option value=KG> 吉爾吉斯</option>
<option value=TV> 吐瓦魯</option>
<option value=DM> 多米尼克</option>
<option value=DO> 多明尼加</option>
<option value=TG> 多哥</option>
<option value=AG> 安地卡及巴布達</option>
<option value=AI> 安圭拉</option>
<option value=AO> 安哥拉</option>
<option value=AD> 安道爾</option>
<option value=TK> 托克勞群島</option>
<option value=BM> 百慕達</option>
<option value=ET> 衣索比亞</option>
<option value=ES> 西班牙</option>
<option value=HR> 克羅埃西亞</option>
<option value=SJ> 冷岸及央麥恩群島</option>
<option value=LY> 利比亞</option>
<option value=HN> 宏都拉斯</option>
<option value=GR> 希臘</option>
<option value=SA> 沙烏地阿拉伯</option>
<option value=BN> 汶萊</option>
<option value=BZ> 貝里斯</option>
<option value=BJ> 貝南</option>
<option value=GQ> 赤道幾內亞</option>
<option value=ZW> 辛巴威</option>
<option value=AM> 亞美尼亞</option>
<option value=AZ> 亞塞拜然</option>
<option value=TZ> 坦尚尼亞</option>
<option value=NG> 奈及利亞</option>
<option value=VE> 委內瑞拉</option>
<option value=BD> 孟加拉</option>
<option value=ZM> 尚比亞</option>
<option value=PW> 帛琉</option>
<option value=LV> 拉脫維亞</option>
<option value=TO> 東加</option>
<option value=TP> 東帝汶</option>
<option value=BA> 波士尼亞赫塞哥維納</option>
<option value=BW> 波札那</option>
<option value=PR> 波多黎各</option>
<option value=PL> 波蘭</option>
<option value=FR> 法國</option>
<option value=TF> 法國南方領地</option>
<option value=FO> 法羅群島</option>
<option value=GF> 法屬圭亞那</option>
<option value=PF> 法屬玻里尼西亞</option>
<option value=GI> 直布羅陀</option>
<option value=KE> 肯亞</option>
<option value=FI> 芬蘭</option>
<option value=AE> 阿拉伯聯合大公國</option>
<option value=AR> 阿根廷</option>
<option value=OM> 阿曼</option>
<option value=AF> 阿富汗</option>
<option value=AW> 阿路巴</option>
<option value=DZ> 阿爾及利亞</option>
<option value=AL> 阿爾巴尼亞</option>
<option value=BG> 保加利亞</option>
<option value=RU> 俄羅斯聯邦</option>
<option value=ZA> 南非</option>
<option value=GS> 南喬治亞及南三明治群島</option>
<option value=YU> 南斯拉夫</option>
<option value=AQ> 南極大陸</option>
<option value=KZ> 哈薩克</option>
<option value=KH> 柬埔寨</option>
<option value=CK> 柯克群島</option>
<option value=TD> 查德</option>
<option value=BO> 玻利維亞</option>
<option value=KW> 科威特</option>
<option value=TN> 突尼西亞</option>
<option value=JO> 約旦</option>
<option value=CG> 剛果</option>
<option value=CD> 剛果民主共和國</option>
<option value=CO> 哥倫比亞</option>
<option value=CR> 哥斯大黎加</option>
<option value=GP> 哥德普洛</option>
<option value=EG> 埃及</option>
<option value=NO> 挪威</option>
<option value=GL> 格陵蘭</option>
<option value=GD> 格瑞那達</option>
<option value=TH> 泰國</option>
<option value=BI> 浦隆地</option>
<option value=HT> 海地</option>
<option value=UG> 烏干達</option>
<option value=UA> 烏克蘭</option>
<option value=UY> 烏拉圭</option>
<option value=UZ> 烏茲別克斯坦</option>
<option value=RE> 留尼旺</option>
<option value=PE> 祕魯共和國</option>
<option value=SO> 索馬利亞</option>
<option value=SB> 索羅門群島</option>
<option value=NZ> 紐西蘭</option>
<option value=NU> 紐威島</option>
<option value=NA> 納米比亞</option>
<option value=MQ> 馬丁尼克島</option>
<option value=ML> 馬利</option>
<option value=MY> 馬來西亞</option>
<option value=MK> 馬其頓</option>
<option value=MW> 馬拉威</option>
<option value=YT> 馬約特島</option>
<option value=MH> 馬紹爾群島</option>
<option value=MG> 馬達加斯加</option>
<option value=MT> 馬爾他</option>
<option value=MV> 馬爾地夫</option>
<option value=FM> 密克羅尼西亞聯邦</option>
<option value=CZ> 捷克共和國</option>
<option value=SY> 敘利亞</option>
<option value=VA> 梵帝崗</option>
<option value=MZ> 莫三比克</option>
<option value=AN> 荷屬安替列斯</option>
<option value=NL> 荷蘭</option>
<option value=CM> 喀麥隆</option>
<option value=GE> 喬治亞</option>
<option value=GN> 幾內亞</option>
<option value=FJ> 斐濟</option>
<option value=LK> 斯里蘭卡</option>
<option value=SK> 斯洛伐克</option>
<option value=SI> 斯洛維尼亞</option>
<option value=CL> 智利</option>
<option value=PH> 菲律賓</option>
<option value=CI> 象牙海岸</option>
<option value=VN> 越南</option>
<option value=KY> 開曼群島</option>
<option value=SN> 塞內加爾</option>
<option value=SC> 塞席爾</option>
<option value=TJ> 塔吉克</option>
<option value=AT> 奧地利</option>
<option value=EE> 愛沙尼亞</option>
<option value=IE> 愛爾蘭</option>
<option value=SG> 新加坡</option>
<option value=NC> 新喀里多尼亞群島</option>
<option value=SL> 獅子山</option>
<option value=CH> 瑞士</option>
<option value=SE> 瑞典</option>
<option value=VU> 萬那杜</option>
<option value=IT> 義大利</option>
<option value=PM> 聖匹島</option>
<option value=VC> 聖文森及格瑞那丁</option>
<option value=ST> 聖多美普林西比</option>
<option value=KN> 聖克里斯多福及尼維斯</option>
<option value=SM> 聖馬利諾</option>
<option value=SH> 聖赫勒拿島</option>
<option value=CX> 聖誕島</option>
<option value=LC> 聖露西亞</option>
<option value=YE> 葉門</option>
<option value=KM> 葛摩</option>
<option value=PT> 葡萄牙</option>
<option value=FK> 福克蘭群島</option>
<option value=CV> 維德角</option>
<option value=MN> 蒙古</option>
<option value=MS> 蒙特色拉特島</option>
<option value=GY> 蓋亞納</option>
<option value=HM> 赫德島</option>
<option value=LA> 寮國</option>
<option value=DE> 德國</option>
<option value=MA> 摩洛哥</option>
<option value=MC> 摩納哥</option>
<option value=MD> 摩爾多瓦</option>
<option value=MU> 模里西斯</option>
<option value=MM> 緬甸</option>
<option value=LB> 黎巴嫩</option>
<option value=MX> 墨西哥</option>
<option value=AU> 澳大利亞</option>
<option value=MO> 澳門特別行政區</option>
<option value=RW> 盧安達</option>
<option value=LU> 盧森堡</option>
<option value=NF> 諾福克島</option>
<option value=NR> 諾魯</option>
<option value=LR> 賴比瑞亞</option>
<option value=LS> 賴索托</option>
<option value=CY> 賽普勒斯</option>
<option value=KR> 韓國</option>
<option value=SV> 薩爾瓦多</option>
<option value=WS> 薩摩亞</option>
<option value=RO> 羅馬尼亞</option>
<option value=GU> 關島</option>
<option value=SD> 蘇丹</option>
<option value=SR> 蘇利南</option>

</select> ");









?>
