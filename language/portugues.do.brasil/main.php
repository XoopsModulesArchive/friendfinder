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
# Lanuage:			Engilsh														#
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
//
//variables for the index.php
//
include(XOOPS_ROOT_PATH."/modules/friendfinder/cache/config.php");
global $dateformat, $autoactive, $imagesize, $heightunit, $weightunit, $footermsgtxt;
$picsize=round ($imagesize/1024,0);
//
//new since 3.06
define("ADDDIRECTFRIENDS","Adicionar aos amigos diretos");
define("_menu3","Configuração principal");
define("_TEXTLOGO","Logo para o Friendfinder: ");
define("_CLA_MODIFCATEGORYIMAGE","Nome da figura:" );
define("_CLA_CATEGORYIMAGENAME","Nome da figura:" );
define("_CLA_MODIFSEXIMAGE","Nome da figura:" );
define("_CLA_SEXIMAGENAME","Nome da figura:" );
define("_TEXTTOPIC","Tópico: ");
define("_TEXTICON","Ícone que será mostrado em index.php");
define("_TEXTCANUSEREDIT","Permitir aos usuários que editem seus perfis: ");
define("_TEXTCANUSERDELETE","Permitir aos usuários que apaguem seus perfis: ");
define("_TEXTPICUPLOAD","Permitir aos usuários que efetuem upload de figuras: ");
define("_TEXTSEARCHFORCOUNTRY","O usuários devem se capaz de definir e procurar seus países: ");
define("_TEXTIMAGESIZEHEIGHT","Altura máxima para figuras provenientes de uploads (em pixel)");
define("_TEXTIMAGESIZEWIGHT","Largura máxima para figuras provenientes de uploads (em pixel)");
define("_TEXTUSEGENERATEIMAGE","Use generateimage para redimensionar as figuras (necessário ter a bibilioteca GD)");
define("_TEXTGIMAXWIGHT","Largura para generateimage (em pixel)");
//
//
//new since 3.05
define("_TEXTANONYMUSCANTMAIL","Somente usuários registrados podem redigir e-mails");
define("_TEXTANONYMUSSEARCH","Permitir aos anônimos procurar por perfis");
define("_TEXTANONYMUSMAIL","Permitir aos anônimos escrevem e-mails aos donos dos perfis");
define("_TEXTMAILTOADMIN","Enviar e-mail para novos perfis");
define("_TEXTADMINEMAIL","Digite o e-mail para onde o novo perfil deverá ser enviado");
define("_TEXTFOOTERMESSAGE","Digite a mensagem de rodapé qie será adicionada em todos seus e-mails");
define("_SELECTNOMATTER","Não se preocupe");
//
//
// old stuff
define("_TEXTINDEX","Bem vindo ao Friendfinder no site ".$xoopsConfig['sitename'].",<br> aqui você poderá achar o seu parceiro ideal");
define("_TEXTINDEXADD","Enviar perfil");
define("_TEXTINDEXSEARCH","Procurar por um(a) parceiro(a)");
define("_TEXTINDEXUPDATE","Editar seu perfil");
define("_TEXTDELETEUSER","Remover perfil");
//
//adminpages
//
define("_editdel","Editar/remover/ativar registro");
define("_activatedsuccessfully","O perfil foi ativado com sucesso.");
define("_Smiliese","Editar smilies");
define("_Badwords","Palavrões");
define("_pref","Configuração");
define("_TEXTEMAIL","Endereço de e-mail");
//
//select.php
//
define("_CLA_SAVMOD","Salvar");
define("_CLA_DEL","Remover");
define("_CLA_CATSMOD","Seus dados foram alterados com sucesso.");
define("_CLA_CATDEL","Seus dados foram apagados.");
define("_CLA_CATADD","Seus dados foram alterados.");
//
define("_CLA_ADDSTATE","Adicionar região");
define("_CLA_STATENAME","Nome da região");
define("_CLA_ADD","Adicionar");
define("_CLA_STATE","Região");
define("_CLA_MODIFSTATE","Editar região");
define("_CLA_SELECTCAT","Escolha");
//
define("_CLA_ADDSEX","Adicionar sexo");
define("_CLA_SEXNAME","Nome do sexo");
define("_CLA_MODIFSEX","Editar sexo");
define("_CLA_SEX","Sexo");
//
define("_CLA_ADDCATEGORY","Adicionar Categoria");
define("_CLA_CATEGORYNAME","Nome Categoria");
define("_CLA_MODIFCATEGORY","Editar Categoria");
define("_CLA_CATEGORY","Categoria");
define("_CLA_MODIFCAT","Editar Categoria");
//
//pref.php
//
define("_TEXTDATEFORMAT","Formato da Data:");
define("_TEXTIMAGESIZE","Tam. da figura em bytes:");
define("_TEXTHEIGHTUNIT","Unidade da altura:");
define("_TEXTWEIGHTUNIT","Unidade da largura:");
define("_TEXTAUTOACTIVE","Ativação automática dos perfis:");
define("_PREFBUTTON","Salvar");
define("_ttmmjjjj","DD.MM.YYYY");
define("_jjjjmmtt","YYYY.MM:DD");
define("_CONFSAVE","Sua configuração foi salva com sucesso");
//
//view-all.php
//
define("_ID","ID: ");
define("_UNAME","Nomde de Usuário: ");
define("_TEXTCATEGORY","Categoria:");
define("_SEX", "Sexo: ");
define("_NAME", "Nome: ");
define("_COUNTRY","País: ");
define("_REGION", "Estado: ");
define("_CITY", "Cidade: ");
define("_HOBBY", "Hobby: ");
define("_PARTNER", "Parceiro: ");
define("_PIC","Fig.: ");
define("_DESCRIPTION","Descrição: ");
define("_backtoadmin","Retornar à página de administração");
define("_deletet","O perfil foi apagado com sucesso...<P> Clique <A HREF=./view-all.php>here</A> para retornar ao Friendfinder...");
define("_activate","Ativar");
define("_ENTRIES","Perfis");
define("_TEXTSTATUS","Perfis ativos:");
define("_editen","Editar");
define("_delen","Remover");
define("_ff_yes","Sim");
define("_ff_no","Não");
//
//delete.php
//
define("_TEXTUSERDELETED","Seu perfil foi apagado com sucesso");
define("_TEXTDELETEBUTTON","Remover perfil");
define("_TEXTWANTTODELETE","Você realmente quer remover seu perfil?");
//
// for email.php
//
define("_TEXTEMAILSENDER","Seu nome:");
define("_TEXTEMAILSENDERADDRESS","Seu e-mail:");
define("_TEXTEMAILMESSAGE","Sua mensagem:");
define("_TEXTEMAILBUTTON","Enviar E-mail");
define("_TEXTTHANKSMAIL","Obrigado pelo seu e-mail, nós esperamos que você obtenha uma resposta positiva.");
define("_TEXTPLEASECHOOSEMEMBER","Por favor, escolha um usuário que você gostaria de enviar um e-mail");
define("_TEXTMAILSUBJECT","Responder de $name para seu perfil no site ".$xoopsConfig['sitename']."");
//
// Variables for the add.php page
//
define("_TEXTNOXOOPSUSER","Somente usuários registrados ou logados podem enviar/ editar um perfil!<br><br>");
define("_CLA_REGISTER","Por favor, registre-se ou efetue seu login.<br>");
define("_CLA_CONECT","Criar uma conexão");
define("_CLA_OR","ou");
define("_CLA_IFAREMEMBER","Se você já estiver logado");
define("_TEXTADDSEARCH","Procurar por um(a) parceiro(a)");
define("_TEXTADDSUCCESSFUL","Obrigado pelas informações");
define("_TEXTSEARCH","Procurar por um(a) parceiro(a)");
define("_TEXTADDBUTTON","Enviar perfil");
define("_TEXTSEX","Eu sou: ");
define("_TEXTREALNAME","Seu nome verdadeiro: ");
define("_TEXTCOUNTRY","Seu país: ");
define("_TEXTDESCRIPTION","Sua descrição: ");
define("_TEXTTANZ","Hobby: ");
define("_TEXTPSEX", "Você está procurando por um(a): ");
define("_TEXTCITY","Sua cidade: ");
define("_TEXTHEIGHT","Altura: ");
define("_TEXTWEIGHT","Peso: ");
define("_TEXTBIRTHDAY","Data de nascimento: ");
define("_TEXTUPLOAD","Fig: (somente jpg/gif máx. ".$picsize." Kb) ");
define("_USEREXISTS","Você já criou um perfil. Você só pode criar um único.");
define("_TEXTCITYMISSING","Você esqueceu de preencher sua cidade");
define("_TEXTYEARMISSING","Você esqueceu de preencher sua data de nascimento");
define("_FILEFORMAT","Somente gif ou jpg são permitidas como formato gráfico");
define("_US_NEWUSERREGAT","Novo perfil do FriendFinder de: ".$user."");
define("_US_HASJUSTREG","Um usuário enviou este perfil para o FriendFinder:
//
Nome de usuário:             ".$user."
Nome real                    ".$name."
Sexo:                        ".$sex."
E-Mail:                      ".$email."
País:                        ".$country."
Estado:                      ".$state."
Cidade:                      ".$city."
Parceiro:                    ".$partner."
Hobbies:                     ".$hobby."
Altura:                      ".$height."
Peso:                        ".$weight."
Data de nascimento:          ".$day.".".$month.".".$year."
Descrição:                   ".$comment."
//
Para ativar este perfil efetue seu login como Administrador.");
//
define("_TEXTSEXMISSING","Por favor escolha seu sexo.");
define("_TEXTSTATEMISSING","Por favor escolha sua região");
define("_TEXTPARTNERMISSING","Por favor escolha seu(sua) parceiro(a).");
define("_TEXTCATEGORYMISSING","Por favor escolha sua categoria.");
//
//These are the variables for the search.php
//
define("_TEXTSEARCHUNSUCCESSFUL","Não localizamos nada através de sua solicitação!");
define("_TEXTSEARCHBUTTON","Procurar parceiro");
define("_TEXTSEARCHSORT","Ordenado por: ");
define("_AGEFROM","de");
define("_AGETILL", "até");
//
//These are the variables for the view.php
//
define("_TEXTVIEWREALNAME","Meu nome é: ");
define("_TEXTVIEWEMAIL","E-mail: ");
define("_TEXTVIEWCOUNTRY","Eu venho de: ");
define("_TEXTREGION","Estado: ");
define("_TEXTVIEWDESCRIPTION","Descrição: ");
define("_TEXTVIEWCITY","Minha cidade é: ");
define("_TEXTAGE","Idade: ");
define("_TEXTVIEWEMAILSEND","Clique aqui para enviar E-mail");
//
//Member index site
//
define("_TEXTPROFILEUPDATED","Seu perfil foi atualizado com sucesso.");
define("_TEXTMEMBERCHANGEPIC","Alterar sua figura");
define("_TEXTMEMBERBUTTON","Atualizar perfil");
//
//member pic site
//
define("_TEXTPICCURRENT","Sua figura atual");
define("_TEXTPICBUTTON","Figura para atualização");
define("_TEXTUPLOADSUCCESS","Sua figura foi carregada com sucesso.");
//
//add.php
//
define("_SELECTSORT"," <select name=sort size=?>//
          <option value=date selected>Data</optio?>          <option value=state>Estado</optio?>          <option value=city>Cidade</optio?>          <option value=age>Idade</option></select>");
//
//
define("_SELECTCOUNTRY","<select name=country size=?>//
<option value=AU>Australia</optio?><option value=NZ>New Zealand</optio?><option value=>----------------------------------</optio?><option value=>- Bitte w&auml;hlen -</optio?><option selected value=DE>Deutschland</optio?><option value=AT>&Ouml;sterreich</optio?><option value=CH>Schweiz</optio?><option value=LI>Liechtenstein</optio?><option value=AF>Afghanistan</optio?><option value=AL>Albania</optio?><option value=DZ>Algeria</optio?><option value=AS>American Samoa</optio?><option value=AD>Andorra</optio?><option value=AO>Angola</optio?><option value=AI>Anguilla</optio?><option value=AQ>Antarctica</optio?><option value=AG>Antigua And Barbuda</optio?><option value=AR>Argentina</optio?><option value=AM>Armenia</optio?><option value=AW>Aruba</optio?><option value=AZ>Azerbaijan</optio?><option value=BS>Bahamas</optio?><option value=BH>Bahrain</optio?><option value=BD>Bangladesh</optio?><option value=BB>Barbados</optio?><option value=BY>Belarus</optio?><option value=BE>Belgium</optio?><option value=BZ>Belize</optio?><option value=BJ>Benin</optio?><option value=BM>Bermuda</optio?><option value=BT>Bhutan</optio?><option value=BO>Bolivia</optio?><option value=BA>Bosnia And Herzegowina</optio?><option value=BW>Botswana</optio?><option value=BV>Bouvet Island</optio?><option value=BR>Brasil</optio?><option value=IO>British Indian Ocean Territory</optio?><option value=BN>Brunei Darussalam</optio?><option value=BG>Bulgaria</optio?><option value=BF>Burkina Faso</optio?><option value=BI>Burundi</optio?><option value=KH>Cambodia</optio?><option value=CM>Cameroon</optio?><option value=CA>Canada</optio?><option value=CV>Cape Verde</optio?><option value=KY>Cayman Islands</optio?><option value=CF>Central African Republic</optio?><option value=TD>Chad</optio?><option value=CL>Chile</optio?><option value=CN>China</optio?><option value=CX>Christmas Island</optio?><option value=CC>Cocos (Keeling) Islands</optio?><option value=CO>Colombia</optio?><option value=KM>Comoros</optio?><option value=CG>Congo</optio?><option value=CK>Cook Islands</optio?><option value=CR>Costa Rica</optio?><option value=CI>Cote D' Ivoire</optio?><option value=HR>Croatia</optio?><option value=CU>Cuba</optio?><option value=CY>Cyprus</optio?><option value=CZ>Czech Republic</optio?><option value=DK>Denmark</optio?><option value=DE>Deutschland</optio?><option value=DJ>Djibouti</optio?><option value=DM>Dominica</optio?><option value=DO>Dominican Republic</optio?><option value=TP>East Timor</optio?><option value=EC>Ecuador</optio?><option value=EG>Egypt</optio?><option value=SV>El Salvador</optio?><option value=GQEquatorial Guinea</optio?><option value=ER>Eritrea</optio?><option value=ES>Espana</optio?><option value=EE>Estonia</optio?><option value=ET>Ethiopia</optio?><option value=FK>Falkland Islands</optio?><option value=FO>Faroe Islands</optio?><option value=FJ>Fiji</optio?><option value=FI>Finland</optio?><option value=FR>France</optio?><option value=FX>France, Metropolitan</optio?><option value=GF>French Guiana</optio?><option value=PF>French Polynesia</optio?><option value=TF>French Southern Territories</optio?><option value=GA>Gabon</optio?><option value=GM>Gambia</optio?><option value=GE>Giorgia</optio?><option value=DE>Germany</optio?><option value=GH>Ghana</optio?><option value=GI>Gibraltar</optio?><option value=GR>Greece</optio?><option value=GL>Greenland</optio?><option value=GD>Grenada</optio?><option value=GP>Guadeloupe</optio?><option value=GU>Guam</optio?><option value=GT>Guatemala</optio?><option value=GN>Guinea</optio?><option value=GW>Guinea-Bissau</optio?><option value=GY>Guyana</optio?><option value=HT>Haiti</optio?><option value=HM>Heard And Nc Donald Islands</optio?><option value=HN>Honduras</optio?><option value=HU>Hungary</optio?><option value=IS>Iceland</optio?><option value=IN>India</optio?><option value=ID>Indonesia</optio?><option value=IR>Iran</optio?><option value=IQ>Iraq</optio?><option value=IE>Ireland</optio?><option value=IL>Israel</optio?><option value=IT>Italy</optio?><option value=JM>Jamaica</optio?><option value=JP>Japan</optio?><option value=JO>Jordan</optio?><option value=KZ>Kazakhstan</optio?><option value=KE>Kenya</optio?><option value=KI>Kiribati</optio?><option value=KP>North Korea (People's Republic Of Korea)</optio?><option value=KR>South Korea (Republic Of Korea)</optio?><option value=KW>Kuwait</optio?><option value=KG>Kyrgyzstan</optio?><option value=LA>Lao People's Republic</optio?><option value=LV>Latvia</optio?><option value=LB>Lebanon</optio?><option value=LS>Lesotho</optio?><option value=LR>Liberia</optio?><option value=LY>Libyan Arab Jamahiriya</optio?><option value=LI>Liechtenstein</optio?><option value=LT>Lithunia</optio?><option value=LU>Luxembourg</optio?><option value=MO>Macau</optio?><option value=MK>Macedonia</optio?><option value=MG>Madagascar</optio?><option value=MW>Malawi</optio?><option value=MY>Malaysia</optio?><option value=MV>Maldives</optio?><option value=ML>Mali</optio?><option value=MT>Malta</optio?><option value=MH>Marshall Islands</optio?><option value=MQ>Martinique</optio?><option value=MR>Mauritania</optio?><option value=MU>Mauritius</optio?><option value=YT>Mayotte</optio?><option value=MX>Mexico</optio?><option value=FM>Micronesia</optio?><option value=MD>Moldova</optio?><option value=MC>Monaco</optio?><option value=MN>Mongolia</optio?><option value=MS>Montserrat</optio?><option value=MA>Morocco</optio?><option value=MZ>Mozambique</optio?><option value=MM>Myanmar</optio?><option value=NA>Namibia</optio?><option value=NR>Nauru</optio?><option value=NP>Nepal</optio?><option value=NL>Netherlands</optio?><option value=AN>Netherlands Antilles</optio?><option value=NC>New Caledonia</optio?><option value=NI>Nicaragua</optio?><option value=NE>Niger</optio?><option value=NG>Nigeria</optio?><option value=NU>Niue</optio?><option value=NF>Norfolk Island</optio?><option value=MP>Northern Mariana Islands</optio?><option value=NO>Norway</optio?><option value=AT>&Ouml;sterreich</optio?><option value=OM>Oman</optio?><option value=PK>Pakistan</optio?><option value=PW>Palau</optio?><option value=PA>Panama</optio?><option value=PG>Papua New Guinea</optio?><option value=PY>Paraguay</optio?><option value=PE>Peru</optio?><option value=PH>Philippines</optio?><option value=PN>Pitcairn</optio?><option value=PL>Poland</optio?><option value=PT>Portugal</optio?><option value=PR>Puerto Rico</optio?><option value=QA>Qatar</optio?><option value=RE>Reunion</optio?><option value=RO>Romania</optio?><option value=RU>Ran Federation</optio?><option value=RW>Rwanda</optio?><option value=KN>Saint Kitts And Nevis</optio?><option value=LCSaint Lucia</optio?><option value=VC>Saint Vincent And The Grenadines</optio?><option value=WS>Samoa</optio?><option value=SM>San Marino</optio?><option value=ST>Sao Tome And Principe</optio?><option value=SA>Saudi Arabia</optio?><option value=CH>Schweiz</optio?><option value=SN>Senegal</optio?><option value=SCSeychelles</optio?><option value=SL>Siearra Leone</optio?><option value=SG>Singapore</optio?><option value=SK>Slovakia</optio?><option value=SI>Slovenia</optio?><option value=SB>Solomon Islands</optio?><option value=SO>Somalia</optio?><option value=ZA>South Africa</optio?><option value=GS>South Georgia And The South Sandwich Islands</optio?><option value=ES>Spain</optio?><option value=LK>Sri Lanka</optio?><option value=SH>St. Helena</optio?><option value=PM>St. Pierre And Miquelon</optio?><option value=SD>Sudan</optio?><option value=SR>Suriname</optio?><option value=SJ>Svalbard And Jan Mayen Islands</optio?><option value=SZ>Swaziland</optio?><option value=SE>Sweden</optio?><option value=SY>Syrian Arab Republic</optio?><option value=TW>Taiwan</optio?><option value=TJ>Tajikistan</optio?><option value=TZ>Tanzania</optio?><option value=TH>Thailand</optio?><option value=TG>Togo</optio?><option value=TK>Tokelau</optio?><option value=TO>Tonga</optio?><option value=TT>Trinidad And Tobago</optio?><option value=TN>Tunisia</optio?><option value=TR>Turkey</optio?><option value=TM>Turkmenistan</optio?><option value=TC>Turks And Caicos Islands</optio?><option value=TVTuvalu</optio?><option value=UG>Uganda</optio?><option value=UA>Ukraine</optio?><option value=AE>United Arab Emirates</optio?><option value=GB>United Kingdom</optio?><option value=UY>Uruguay</optio?><option value=US>U.S.A</optio?><option value=UM>U.S. Minor Outlying Islands</optio?><option value=UZ>Uzbekistan</optio?><option value=VU>Vanuatu</optio?><option value=VA>Vatican City State</optio?><option value=VE>Venezuela</optio?><option value=VN>Viet Nam</optio?><option value=VG>Virgin Islands (British)</optio?><option value=VI>Virgin Islands (US)</optio?><option value=WF>Wallis And Futuna Islands</optio?><option value=EH>Western Sahara</optio?><option value=YE>Yemen</optio?><option value=ZR>Zaire</optio?><option value=ZM>Zambia</optio?><option value=ZW>Zimbabwe</optio?><option value=ZZ>Anderes Land (nicht angezeigt)</optio?></select> ");
//
?>