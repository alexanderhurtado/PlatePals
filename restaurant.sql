DROP TABLE IF EXISTS `active`;
CREATE TABLE IF NOT EXISTS `active` (
  `restaurantID` int(11) NOT NULL,
  KEY `fk_foreign_key` (`restaurantID`);
  
DROP TABLE IF EXISTS `favorites`;
CREATE TABLE IF NOT EXISTS `favorites` (
  `restaurantID` int(11) NOT NULL,
  KEY `fk_foreign_key2` (`restaurantID`);