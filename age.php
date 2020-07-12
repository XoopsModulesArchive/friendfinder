<?
/* ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** **
**          A L T E R S B E R E C H E N U G           **
**                   Version 1.1                      **
**                (C) Stefan Giehl                    **
**       Email: webmaster@feuerwehr-eisingen.de       **
**                                                    **
** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** */
#################################################################################
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
# Lanuage:			Language name												#
# Name:				your name and email											#
# Homepage:			your Homepage												#
#																				#
#                                                                               #
# Last modification:            2002-02-22										#
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

function getage($birth) {
/* String auf Längengültigkeit überprüfen */
if(strlen($birth) != 10) {
die ("Das übergebene Datum hat nicht die vorgegebene Länge");
}
/* Auslesen der Daten aus übergebenem String */
if(
(substr($birth,2,1) == "." || substr($birth,2,1) == "-") &&
(substr($birth,5,1) == "." || substr($birth,5,1) == "-")) {
// Deutsch
$day = substr($birth,0,2);
$month = substr($birth,3,2);
$year = substr($birth,6,4);
}
elseif(
(substr($birth,4,1) == "." || substr($birth,4,1) == "-") &&
(substr($birth,7,1) == "." || substr($birth,7,1) == "-")) {
// Englisch
$day = substr($birth,8,2);
$month = substr($birth,5,2);
$year = substr($birth,0,4);
}
else {
die ("Falsches Datumsformat!");
}

/* Überprüfung auf Gültigkeit: */
if($day > 31) {
die ("Ein Monat kann nicht mehr als 31 Tage haben");
}
if($month > 12) {
die ("Ein Jahr hat nicht mehr als 12 Monate");
}

/* Differenz der Jahresangaben */
$alter = date("Y") - $year;

/* Berücksichtigung des Monats */
if((date("m") - $month) < 0) {
$alter--;
}

/* Berücksichtigung des Tages */
if((date("m") - $month) == 0 && (date("d") - $day) < 0) {
$alter--;
}

if($alter < 0) {
die ("Datum liegt in der Zukunft!!");
}

return $alter;
}

/* ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** **
**               Hinweise zum Anwenden                **
**              ***********************               **
**                                                    **
**  Die Funktion lässt sich wie jede andere Funktion  **
**  aufrufen; Der Funktion muss ein String übergeben  **
**  werden; Der übergebene String muss entweder im    **
**  deutschen oder im englischen Datumsformat stehen. **
**  Zurückgegeben wird das berechnete Alter;          **
**  Bsp:  $age = getage($birth);                      **
**  Hier wird das Alter einer Person berechnet die im **
**  String ($birth) angegebenen Datum geboren wurde.  **
**                                                    **
**  Fragen, Verbesserungen, Änderungsvorschläge ????  **
**                   Mail an mich!!                   **
** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** */
?>
