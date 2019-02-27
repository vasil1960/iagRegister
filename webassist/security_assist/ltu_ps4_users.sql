CREATE TABLE IF NOT EXISTS `ps4_users` (
  `UserID` int(11) NOT NULL auto_increment,
  `UserEmail` varchar(500) default NULL,
  `UserPassword` varchar(500) default NULL,
  `UserFirstName` varchar(50) default NULL,
  `UserLastName` varchar(50) default NULL,
  `UserCity` varchar(90) default NULL,
  `UserState` varchar(50) default NULL,
  `UserZip` varchar(12) default NULL,
  `UserEmailVerified` tinyint(1) default '0',
  `UserRegistrationDate` timestamp NULL default CURRENT_TIMESTAMP,
  `UserVerificationCode` varchar(20) default NULL,
  `UserIP` varchar(50) default NULL,
  `UserPhone` varchar(20) default NULL,
  `UserFax` varchar(20) default NULL,
  `UserCountry` varchar(20) default NULL,
  `UserAddress` varchar(100) default NULL,
  `UserAddress2` varchar(50) default NULL,
  `UserGroupID` int(11) NOT NULL default '1',
  PRIMARY KEY  (`UserID`)
)