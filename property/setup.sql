CREATE TABLE `adminusers` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
);

INSERT INTO `adminusers` VALUES ('','admin','letmein');

CREATE TABLE `counties` (
  `county_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_name` varchar(50) NOT NULL,
  PRIMARY KEY (`county_id`)
);

INSERT INTO `counties` VALUES ('','Antrim');
INSERT INTO `counties` VALUES ('','Armagh');
INSERT INTO `counties` VALUES ('','Carlow');
INSERT INTO `counties` VALUES ('','Cavan');
INSERT INTO `counties` VALUES ('','Clare');
INSERT INTO `counties` VALUES ('','Cork');
INSERT INTO `counties` VALUES ('','Derry');
INSERT INTO `counties` VALUES ('','Donegal');
INSERT INTO `counties` VALUES ('','Down');
INSERT INTO `counties` VALUES ('','Dublin');
INSERT INTO `counties` VALUES ('','Fermanagh');
INSERT INTO `counties` VALUES ('','Galway');
INSERT INTO `counties` VALUES ('','Kerry');
INSERT INTO `counties` VALUES ('','Kildare');
INSERT INTO `counties` VALUES ('','Kilkenny');
INSERT INTO `counties` VALUES ('','Laois');
INSERT INTO `counties` VALUES ('','Leitrim');
INSERT INTO `counties` VALUES ('','Limerick');
INSERT INTO `counties` VALUES ('','Longford');
INSERT INTO `counties` VALUES ('','Louth');
INSERT INTO `counties` VALUES ('','Mayo');
INSERT INTO `counties` VALUES ('','Meath');
INSERT INTO `counties` VALUES ('','Monaghan');
INSERT INTO `counties` VALUES ('','Offaly');
INSERT INTO `counties` VALUES ('','Roscommon');
INSERT INTO `counties` VALUES ('','Sligo');
INSERT INTO `counties` VALUES ('','Tipperary');
INSERT INTO `counties` VALUES ('','Tyrone');
INSERT INTO `counties` VALUES ('','Waterford');
INSERT INTO `counties` VALUES ('','Westmeath');
INSERT INTO `counties` VALUES ('','Wexford');
INSERT INTO `counties` VALUES ('','Wicklow');


CREATE TABLE `housetype` (
  `housetype_id` int(5) NOT NULL AUTO_INCREMENT,
  `housetype_name` varchar(35) NOT NULL,
  PRIMARY KEY (`housetype_id`)
);


INSERT INTO `housetype` VALUES ('','Apartment');
INSERT INTO `housetype` VALUES ('','Detached');
INSERT INTO `housetype` VALUES ('','Semi-Detached');
INSERT INTO `housetype` VALUES ('','Terraced');


CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_name` varchar(35) NOT NULL,
  `comtact_phone_no` varchar(15) NOT NULL,
  PRIMARY KEY (`contact_id`)
);


INSERT INTO `contact` VALUES ('','Anne Wilson', '0860086086');
INSERT INTO `contact` VALUES ('','John Murray', '0850085085');
INSERT INTO `contact` VALUES ('','Lisa McCabe', '0860086087');
INSERT INTO `contact` VALUES ('','Peter Reilly', '0870086087');
