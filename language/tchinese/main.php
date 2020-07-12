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
define("ADDDIRECTFRIENDS","�s�W��͸��");
define("_menu3","�D�n�]�w");
define("_TEXTLOGO","��ͼҲ�Logo: ");
define("_CLA_MODIFCATEGORYIMAGE","����:" );
define("_CLA_CATEGORYIMAGENAME","����:" );
define("_CLA_MODIFSEXIMAGE","����:" );
define("_CLA_SEXIMAGENAME","�ʧO����:" );
define("_TEXTTOPIC","�D�D: ");
define("_TEXTICON","����Icon");
define("_TEXTCANUSEREDIT","���\�ϥΪ̽s��ӤH���: ");
define("_TEXTCANUSERDELETE","���\�ϥΪ̧R���ӤH���: ");
define("_TEXTPICUPLOAD","���\�ϥΪ̤W������: ");
define("_TEXTSEARCHFORCOUNTRY","���\�ϥΪ̷̨Ӱ�a�j�M���: ");
define("_TEXTIMAGESIZEHEIGHT","���\�W�����ɳ̰�����(pixel)");
define("_TEXTIMAGESIZEWIGHT","���\�W�����ɳ̼e�e��(pixel)");
define("_TEXTUSEGENERATEIMAGE","�ϥΦ۰ʽվ�Ϥ��j�p�\��(���Ұ�GD���) ");
define("_TEXTGIMAXWIGHT","�۰ʽվ�Ϥ��e�׳]�w(pixel)");
//new since 3.05
define("_TEXTANONYMUSCANTMAIL","�u���\���U�̥i�H�gEmail�|��");
define("_TEXTANONYMUSSEARCH","���\�ΦW�̷j�M���");
define("_TEXTANONYMUSMAIL","���\�ΦW�̼gEmail���|��");
define("_TEXTMAILTOADMIN","�i�HEMail���s�[�J�|��");
define("_TEXTADMINEMAIL","��JeMail");
define("_TEXTFOOTERMESSAGE","��JeMail�U�����`��");
define("_SELECTNOMATTER","�L�ŦX���");
//old stuff
define("_TEXTINDEX","�w��Ө�".$xoopsConfig['sitename']."��ͤѦa,<br>

�o�̥i�H���A���P�n�I");

define("_TEXTINDEXADD","���ѧA�����");

define("_TEXTINDEXSEARCH","�M��P�n");

define("_TEXTINDEXUPDATE","�s��A�����");

define("_TEXTDELETEUSER","�R���A�����");



//adminpages

define("_editdel","�s��/�R��/�Ұʥ\��");

define("_activatedsuccessfully","��ƱҰʧ����I");

define("_Smiliese","�s�����");

define("_Badwords","�����y�y�L�o�]�w");

define("_pref","�@��]�w");

define("_TEXTEMAIL","EMail");

//select.php

define("_CLA_SAVMOD","�x�s");
define("_CLA_DEL","�R��");
define("_CLA_CATSMOD","��Ƨ�s�����I");
define("_CLA_CATDEL","��ƧR�������I");
define("_CLA_CATADD","����x�s�����I");

define("_CLA_ADDSTATE","�s�W�a��");
define("_CLA_STATENAME","�a�ϦW��");
define("_CLA_ADD","�s�W");
define("_CLA_STATE","�a��");
define("_CLA_MODIFSTATE","�s��a��");
define("_CLA_SELECTCAT","�п��");

define("_CLA_ADDSEX","�s�W�ʧO");
define("_CLA_SEXNAME","�ʧO�W��");
define("_CLA_MODIFSEX","�s��ʧO");
define("_CLA_SEX","�ʧO");

define("_CLA_ADDCATEGORY","�s�W�����ؿ�");
define("_CLA_CATEGORYNAME","�����ؿ��W��");
define("_CLA_MODIFCATEGORY","�s������ؿ�");
define("_CLA_CATEGORY","�����ؿ�");
define("_CLA_MODIFCAT","�s������ؿ�");



//pref.php

define("_TEXTDATEFORMAT","����榡�G");

define("_TEXTIMAGESIZE","�W�ǹϤ�����j�pbyte�G");

define("_TEXTHEIGHTUNIT","�����榡�G");

define("_TEXTWEIGHTUNIT","�魫�榡�G");

define("_TEXTAUTOACTIVE","�۰ʱҰʷ|���v���G");

define("_PREFBUTTON","�x�s");

define("_ttmmjjjj","DD.MM.YYYY");

define("_jjjjmmtt","YYYY.MM:DD");

define("_CONFSAVE","�x�s����");

//view-all.php



define("_ID","�s���G");

define("_UNAME","�ϥΪ̦W�١G");

define("_TEXTCATEGORY","�����ؿ��G");

define("_SEX", "�ʧO�G");

define("_NAME", "�W�١G");

define("_COUNTRY","��a�G");

define("_REGION", "�{�G");

define("_CITY", "�����G");

define("_HOBBY", "����G");

define("_PARTNER", "�P�n�G");

define("_PIC","�ϮסG");

define("_DESCRIPTION","�y�z�G");

define("_backtoadmin","�^��޲z����");

define("_deletet","��ƧR������<P>�Ы�<A HREF=./view-all.php>�o��</A>�^���ͤѦa");

define("_activate","�Ұ�");

define("_ENTRIES","�ӤH���");

define("_TEXTSTATUS","�ӤH��ƱҰʡG");

define("_editen","�s��");

define("_delen","�R��");

define("_ff_yes","�O");

define("_ff_no","�_");



//delete.php

define("_TEXTUSERDELETED","�A���ӤH��ƧR������");

define("_TEXTDELETEBUTTON","�R���ӤH���");

define("_TEXTWANTTODELETE","�A�T�w�n�R���A���ӤH���");



// for email.php

define("_TEXTEMAILSENDER","�A���W�r�G");

define("_TEXTEMAILSENDERADDRESS","�A��Email�G");

define("_TEXTEMAILMESSAGE","�A���T���G");

define("_TEXTEMAILBUTTON","�H�XEmail");

define("_TEXTTHANKSMAIL","���§A��Email�A�ڭ̧Ʊ�A�̦��}�n�����ʡC");

define("_TEXTPLEASECHOOSEMEMBER","�п�ܦP�n�ñH�XEmail");

define("_TEXTMAILSUBJECT","�A���� $name ���^�H ".$xoopsConfig['sitename']."");





// Variables for the add.php page

define("_TEXTNOXOOPSUSER","�u���|���i�H���ѩνs��/�R���ӤH��ơI<br><br>");

define("_CLA_REGISTER","�е��U�εn�J�C<br>");

define("_CLA_CONECT","�إ����Y");

define("_CLA_OR","or");

define("_CLA_IFAREMEMBER","�p�G�A�w�g�n�J");

define("_TEXTADDSEARCH","�M��P�n");

define("_TEXTADDSUCCESSFUL","���§A���ѻP");

define("_TEXTSEARCH","�M��P�n");

define("_TEXTADDBUTTON","���ѭӤH���");

define("_TEXTSEX","�ڬO�G");

define("_TEXTREALNAME","�u��m�W�G");

define("_TEXTCOUNTRY","�A����a�G");

define("_TEXTDESCRIPTION","�ӤH�y�z�G");

define("_TEXTTANZ","�A������G");

define("_TEXTPSEX", "�A���M�`��H�G");

define("_TEXTCITY","�A�Ҧb����");

define("_TEXTHEIGHT","�����G");

define("_TEXTWEIGHT","�魫�G");

define("_TEXTBIRTHDAY","�ͤ�G");

define("_TEXTUPLOAD","�Ϥ��G(�� jpg/gif max. ".$picsize." kb) ");

define("_USEREXISTS","�A�w�g�إߧA���ӤH��ơI�A�u��إߤ@���I");

define("_TEXTCITYMISSING","�A�ѰO��g�Ҧb����");

define("_TEXTYEARMISSING","�A�ѰO��g�ͤ�");

define("_FILEFORMAT","�u��W��gif��jpg�榡");

define("_US_NEWUSERREGAT","�s�P�n".$user." �[�J");
define("_US_HASJUSTREG","�ثe���@��P�n�[�J�G

�W�١G                       ".$user."
�u��W�r�G                   ".$name."
�ʧO�G                       ".$sex."
EMailaddress:                ".$email."
��a�G                       ".$country."
�{�G                         ".$state."
�����G                       ".$city."
�P�n�G                       ".$partner."
����G                       ".$hobby."
�����G                       ".$height."
�魫�G                       ".$weight."
�ͤ�G	                     ".$day.".".$month.".".$year."
�y�z�G                       ".$comment."

�жi�J�޲z�����ҰʭӤH��ơC");

define("_TEXTSEXMISSING","�п�ܧA���ʧO�C");
define("_TEXTSTATEMISSING","�п�ܧA���a�ϡC");
define("_TEXTPARTNERMISSING","�п�ܧA���P�n�C");
define("_TEXTCATEGORYMISSING","�п�ܧA���ؿ��C");





//These are the variables for the search.php

define("_TEXTSEARCHUNSUCCESSFUL","Y�ثe�S���ŦX�A���n�D��ơI");

define("_TEXTSEARCHBUTTON","�M��P�n");

define("_TEXTSEARCHSORT","�ƧǡG");

define("_AGEFROM","�q");

define("_AGETILL", "��");



//These are the variables for the view.php

define("_TEXTVIEWREALNAME","�ڪ��W�١G");

define("_TEXTVIEWEMAIL","Email: ");

define("_TEXTVIEWCOUNTRY","�ڱq�G");

define("_TEXTREGION","�{�G");

define("_TEXTVIEWDESCRIPTION","�y�z�G");

define("_TEXTVIEWCITY","�����G");

define("_TEXTAGE","�~�֡G");

define("_TEXTVIEWEMAILSEND","�����HEmail");



//Member index site

define("_TEXTPROFILEUPDATED","��s��Ƨ����C");

define("_TEXTMEMBERCHANGEPIC","��s�Ϯ�");

define("_TEXTMEMBERBUTTON","��s");





//member pic site

define("_TEXTPICCURRENT","�ثe�Ϥ�");

define("_TEXTPICBUTTON","��s");

define("_TEXTUPLOADSUCCESS","��s����");




  //add.php


define("_SELECTSORT"," <select name=sort size=1>

          <option value=date selected>���</option>

          <option value=state>�{</option>

          <option value=city>����</option>

          <option value=age>�~��</option></select>");






define("_SELECTCOUNTRY","<select name=country size=1>

<option value=>- �п�ܧA����a -</option>
<option value=CH>��h</option>
<option value=NZ>�æ��� New Zealand</option>
<option value=TT> �d���F�Φ��ڭ�</option>
<option value=TR> �g�ը�</option>
<option value=TC> �g�J���ζ}�촵�s�q</option>
<option value=TM> �g�w��</option>
<option value=US> ����</option>
<option value=UM> ����~�q</option>
<option value=VI> ���ݺ����ʸs�q</option>
<option value=AS> �����ļ���</option>
<option value=MR> �T�Q�𥧨�</option>
<option value=TW"  selected  > �x�W</option>
<option value=UK> �^��</option>
<option value=CN> ����j��</option>
<option value=IO> �^�ݦL��</option>
<option value=VG> �^�ݺ����ʸs�q</option>
<option value=GH> �{��</option>
<option value=HK> ����S�O��F��</option>
<option value=BT> ����</option>
<option value=CF> ���D</option>
<option value=DK> ����</option>
<option value=EC> �̥ʦh</option>
<option value=ER> �̧Q����</option>
<option value=PG> �ڥ��ȯôX����</option>
<option value=BR> �ڦ�</option>
<option value=BB> �ڨ��h</option>
<option value=PY> �کԦc</option>
<option value=BH> �ڪL</option>
<option value=BS> �ګ��� </option>
<option value=PA> �ڮ���</option>
<option value=PK> �ڰ򴵩Z</option>
<option value=JP> �饻</option>
<option value=BE> ��Q�� </option>
<option value=GW> ���</option>
<option value=JM> ���R�[</option>
<option value=IL> �H��C</option>
<option value=CA> �[���j</option>
<option value=GA> �[�^</option>
<option value=MP> �_�����w��</option>
<option value=KP> �_��</option>
<option value=QA> �d�F</option>
<option value=CC> �i�i���s�q</option>
<option value=CU> �j��</option>
<option value=SZ> �v������</option>
<option value=NE> ����</option>
<option value=NI> ���[�ԥ�</option>
<option value=NP> ���y��</option>
<option value=BF> ���N�Ǫk��</option>
<option value=BV> ���®q</option>
<option value=GT> �ʦa����</option>
<option value=WF> �˧Q���M�֧��Ǹs�q</option>
<option value=GM> �̤��</option>
<option value=BY> �իXù��</option>
<option value=PN> �֯S�d</option>
<option value=LT> �߳��{</option>
<option value=IQ> ��ԧJ</option>
<option value=IR> ���</option>
<option value=IS> �B�q</option>
<option value=LI> �C�䴰���n</option>
<option value=HU> �I���Q</option>
<option value=ID> �L��</option>
<option value=IN> �L��</option>
<option value=DJ> �N���a</option>
<option value=KI> �N���ڴ�</option>
<option value=KG> �N���N��</option>
<option value=TV> �R�˾|</option>
<option value=DM> �h�̥��J</option>
<option value=DO> �h�����[</option>
<option value=TG> �h��</option>
<option value=AG> �w�a�d�Τڥ��F</option>
<option value=AI> �w�c��</option>
<option value=AO> �w����</option>
<option value=AD> �w�D��</option>
<option value=TK> ���J�Ҹs�q</option>
<option value=BM> �ʼ}�F</option>
<option value=ET> ������</option>
<option value=ES> ��Z��</option>
<option value=HR> �Jù�J���</option>
<option value=SJ> �N���Υ������s�q</option>
<option value=LY> �Q���</option>
<option value=HN> �����Դ�</option>
<option value=GR> ��þ</option>
<option value=SA> �F�Q�a���ԧB</option>
<option value=BN> �Z��</option>
<option value=BZ> ������</option>
<option value=BJ> ���n</option>
<option value=GQ> ���D�X����</option>
<option value=ZW> ���ګ�</option>
<option value=AM> �Ȭ�����</option>
<option value=AZ> �ȶ���M</option>
<option value=TZ> �Z�|����</option>
<option value=NG> �`�ΧQ��</option>
<option value=VE> �e�����</option>
<option value=BD> �s�[��</option>
<option value=ZM> �|���</option>
<option value=PW> ���[</option>
<option value=LV> �Բ����</option>
<option value=TO> �F�[</option>
<option value=TP> �F�ҨZ</option>
<option value=BA> �i�h���Ȼ��������</option>
<option value=BW> �i����</option>
<option value=PR> �i�h���U</option>
<option value=PL> �i��</option>
<option value=FR> �k��</option>
<option value=TF> �k��n���a</option>
<option value=FO> �kù�s�q</option>
<option value=GF> �k�ݦc�Ȩ�</option>
<option value=PF> �k�ݬ��������</option>
<option value=GI> ����ù��</option>
<option value=KE> �֨�</option>
<option value=FI> ����</option>
<option value=AE> ���ԧB�p�X�j����</option>
<option value=AR> ���ڧ�</option>
<option value=OM> ����</option>
<option value=AF> ���I��</option>
<option value=AW> ������</option>
<option value=DZ> �����ΧQ��</option>
<option value=AL> �����ڥ���</option>
<option value=BG> �O�[�Q��</option>
<option value=RU> �Xù���p��</option>
<option value=ZA> �n�D</option>
<option value=GS> �n��v�ȤΫn�T���v�s�q</option>
<option value=YU> �n���Ԥ�</option>
<option value=AQ> �n���j��</option>
<option value=KZ> ���ħJ</option>
<option value=KH> �Z�H��</option>
<option value=CK> �_�J�s�q</option>
<option value=TD> �d�w</option>
<option value=BO> ���Q����</option>
<option value=KW> ��¯S</option>
<option value=TN> �𥧦��</option>
<option value=JO> ����</option>
<option value=CG> ��G</option>
<option value=CD> ��G���D�@�M��</option>
<option value=CO> ���ۤ��</option>
<option value=CR> �����j���[</option>
<option value=GP> ���w����</option>
<option value=EG> �J��</option>
<option value=NO> ����</option>
<option value=GL> �泮��</option>
<option value=GD> ��稺�F</option>
<option value=TH> ����</option>
<option value=BI> �����a</option>
<option value=HT> ���a</option>
<option value=UG> �Q�z�F</option>
<option value=UA> �Q�J��</option>
<option value=UY> �Q�Ԧc</option>
<option value=UZ> �Q���O�J���Z</option>
<option value=RE> �d����</option>
<option value=PE> ���|�@�M��</option>
<option value=SO> �����Q��</option>
<option value=SB> ��ù���s�q</option>
<option value=NZ> �æ���</option>
<option value=NU> �ë®q</option>
<option value=NA> �Ǧ̤��</option>
<option value=MQ> ���B���J�q</option>
<option value=ML> ���Q</option>
<option value=MY> ���Ӧ��</option>
<option value=MK> ����y</option>
<option value=MW> ���ԫ�</option>
<option value=YT> �����S�q</option>
<option value=MH> ���к��s�q</option>
<option value=MG> ���F�[���[</option>
<option value=MT> �����L</option>
<option value=MV> �����a��</option>
<option value=FM> �K�Jù������p��</option>
<option value=CZ> ���J�@�M��</option>
<option value=SY> �ԧQ��</option>
<option value=VA> ��ұ^</option>
<option value=MZ> ���T��J</option>
<option value=AN> ���ݦw���C��</option>
<option value=NL> ����</option>
<option value=CM> �س���</option>
<option value=GE> ��v��</option>
<option value=GN> �X����</option>
<option value=FJ> ����</option>
<option value=LK> �������d</option>
<option value=SK> ������J</option>
<option value=SI> ����������</option>
<option value=CL> ���Q</option>
<option value=PH> ��߻�</option>
<option value=CI> �H������</option>
<option value=VN> �V�n</option>
<option value=KY> �}�Ҹs�q</option>
<option value=SN> �뤺�[��</option>
<option value=SC> ��u��</option>
<option value=TJ> ��N�J</option>
<option value=AT> ���a�Q</option>
<option value=EE> �R�F����</option>
<option value=IE> �R����</option>
<option value=SG> �s�[�Y</option>
<option value=NC> �s�ب��h���ȸs�q</option>
<option value=SL> ��l�s</option>
<option value=CH> ��h</option>
<option value=SE> ���</option>
<option value=VU> �U����</option>
<option value=IT> �q�j�Q</option>
<option value=PM> �t�Ǯq</option>
<option value=VC> �t��ˤή�稺�B</option>
<option value=ST> �t�h�����L���</option>
<option value=KN> �t�J�����h�֤Υ�����</option>
<option value=SM> �t���Q��</option>
<option value=SH> �t���Ǯ��q</option>
<option value=CX> �t�Ϯq</option>
<option value=LC> �t�S���</option>
<option value=YE> ����</option>
<option value=KM> ����</option>
<option value=PT> �����</option>
<option value=FK> �֧J���s�q</option>
<option value=CV> ���w��</option>
<option value=MN> �X�j</option>
<option value=MS> �X�S��ԯS�q</option>
<option value=GY> �\�ȯ�</option>
<option value=HM> ���w�q</option>
<option value=LA> �d��</option>
<option value=DE> �w��</option>
<option value=MA> ������</option>
<option value=MC> ���ǭ�</option>
<option value=MD> �����h��</option>
<option value=MU> �Ҩ��贵</option>
<option value=MM> �q�l</option>
<option value=LB> ���ڹ�</option>
<option value=MX> �����</option>
<option value=AU> �D�j�Q��</option>
<option value=MO> �D���S�O��F��</option>
<option value=RW> �c�w�F</option>
<option value=LU> �c�˳�</option>
<option value=NF> �պ֧J�q</option>
<option value=NR> �վ|</option>
<option value=LR> �����</option>
<option value=LS> �����</option>
<option value=CY> �ɴ��Ǵ�</option>
<option value=KR> ����</option>
<option value=SV> �ĺ��˦h</option>
<option value=WS> �ļ���</option>
<option value=RO> ù������</option>
<option value=GU> ���q</option>
<option value=SD> Ĭ��</option>
<option value=SR> Ĭ�Q�n</option>

</select> ");









?>
