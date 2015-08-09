# Host: localhost  (Version: 5.6.14)
# Date: 2015-08-09 08:55:36
# Generator: MySQL-Front 5.3  (Build 4.214)

/*!40101 SET NAMES latin1 */;

#
# Structure for table "comment_destination"
#

DROP TABLE IF EXISTS `comment_destination`;
CREATE TABLE `comment_destination` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) DEFAULT NULL,
  `destination` varchar(255) DEFAULT NULL,
  `rate` int(11) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "comment_destination"
#

