DROP TABLE IF EXISTS `active`;
CREATE TABLE IF NOT EXISTS `active` (
  `restaurantID` int(11) NOT NULL,
  KEY `fk_foreign_key` (`restaurantID`));
  
DROP TABLE IF EXISTS `favorites`;
CREATE TABLE IF NOT EXISTS `favorites` (
  `restaurantID` int(11) NOT NULL,
  KEY `fk_foreign_key2` (`restaurantID));
  
 CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`username` varchar(50) NOT NULL,
`password` varchar(50) NOT NULL,
`trn_date` datetime NOT NULL,
`partner` varchar(50) NULL,
PRIMARY KEY (`id`)
);
