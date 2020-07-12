#################################################################################
# Friend Finder for Xoops 1.3.x and Xoops 2.xx Version 3.1 beta                 #
#                                                                               #
# 			Copyright 2003 by eagle81																								#
#																																								#
# Manuel Caballero	 	friendfinder@dancepartner.net															#
# Module Homepage:		http://www.dancepartner.net																#
#																																								#
# Please report bugs and new feature request at modcentral.com friendfinder			#
# forum or via mail frienfinder@dancepartner.net  															#
#																																								#
# Copyright for this langfile																										#
# Lanuage:			Language name																										#
# Name:					your name and email																							#
# Homepage:			your Homepage																										#
#																																								#
#                                                                               #
# Last modification:            2002-02-22																			#
#                                                                               #
# Initialy this script is based on phpMeet from                                 #
# Jeremy Ross 									webmaster@phprank.com              							#
# Script design  : PhpMeet  		Copyright 2002 -                              	#
# Created 15/01/02              Last Modified 15/01/02                          #
# Scripts Home                  http://www.jrscripts.com                        #
#																																								#
# First Xoops Versions from:                   																	#
#                                                                               #
# Xoops-RC2 French Version  :   jokerman@free.fr                                #
# Web Home                  :   http://www.webetfric.com                        #
#                                                                               #
# Xoops-RC2 English Version :   webmaster@modscentral.com                    		#
# Web Home                  :   http://www.modscentral.com                      #
#################################################################################
# phpMyAdmin MySQL-Dump
# version 2.4.0rc2
# http://phpwizard.net/phpMyAdmin/
# http://www.phpmyadmin.net/ (download page)
#
# Host: localhost
# Erstellungszeit: 23. Februar 2003 um 17:30
# Server Version: 3.23.55
# PHP-Version: 4.3.0
# --------------------------------------------------------

#
# Tabellenstruktur für Tabelle `friendfinder`
#

CREATE TABLE friendfinder (
  id int(9) NOT NULL auto_increment,
  uid int(9) NOT NULL default '0',
  user varchar(20) NOT NULL default '',
  active int(10) NOT NULL default '0',
  sex varchar(20) NOT NULL default '',
  name varchar(50) NOT NULL default '',
  email varchar(70) NOT NULL default '',
  city varchar(99) NOT NULL default '',
  state varchar(99) NOT NULL default '',
  country varchar(99) NOT NULL default '',
  hobby text NOT NULL,
  partner varchar(50) NOT NULL default '',
  category varchar(5) NOT NULL default '1',
  height varchar(20) NOT NULL default '',
  weight varchar(20) NOT NULL default '',
  birth varchar(20) NOT NULL default '0',
  pic text NOT NULL,
  Description text NOT NULL,
  imgname varchar(100) NOT NULL default '',
  imgtime varchar(50) NOT NULL default '',
  date varchar(50) NOT NULL default '00-00-0000',
  topic varchar(100) NOT NULL default '',
  UNIQUE KEY id (id)
) TYPE=MyISAM;

# --------------------------------------------------------

#
# Tabellenstruktur für Tabelle `friendfinder_category`
#

CREATE TABLE friendfinder_category (
  catid int(11) NOT NULL auto_increment,
  cattitle varchar(50) NOT NULL default '',
  catdescription text NOT NULL,
  PRIMARY KEY  (catid)
) TYPE=MyISAM;

#
# Daten für Tabelle `friendfinder_category`
#

INSERT INTO friendfinder_category VALUES (1, 'blinddate', 'blinddate.gif');
INSERT INTO friendfinder_category VALUES (2, 'one-night-stand', 'seitensprung.gif');
INSERT INTO friendfinder_category VALUES (3, 'lessure-time', 'freizeit.gif');

# --------------------------------------------------------

#
# Tabellenstruktur für Tabelle `friendfinder_sex`
#

CREATE TABLE friendfinder_sex (
  sid int(11) NOT NULL auto_increment,
  sextitle varchar(50) NOT NULL default '',
  sexdescription text NOT NULL,
  PRIMARY KEY  (sid)
) TYPE=MyISAM;

#
# Daten für Tabelle `friendfinder_sex`
#

INSERT INTO friendfinder_sex VALUES (1, 'male', 'male.gif');
INSERT INTO friendfinder_sex VALUES (2, 'female', 'female.gif');
INSERT INTO friendfinder_sex VALUES (3, 'couple', 'couple.gif');
# --------------------------------------------------------

#
# Tabellenstruktur für Tabelle `friendfinder_state`
#

CREATE TABLE friendfinder_state (
  cid int(11) NOT NULL auto_increment,
  title varchar(50) NOT NULL default '',
  cdescription text NOT NULL,
  PRIMARY KEY  (cid)
) TYPE=MyISAM;


#  This was changed to smoking or not smoking
# Daten für Tabelle `friendfinder_state`
#

INSERT INTO friendfinder_state VALUES (1, 'yes', '');
INSERT INTO friendfinder_state VALUES (2, 'no', '');
INSERT INTO friendfinder_state VALUES (3, 'quitting', '');
