

DROP TABLE IF EXISTS `myblogdb`.`categories`;
DROP TABLE IF EXISTS `myblogdb`.`comments`;
DROP TABLE IF EXISTS `myblogdb`.`messages`;
DROP TABLE IF EXISTS `myblogdb`.`post_views`;
DROP TABLE IF EXISTS `myblogdb`.`posts`;


CREATE TABLE `myblogdb`.`categories` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`post_count` int(11) NOT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=InnoDB;

CREATE TABLE `myblogdb`.`comments` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`email_address` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`comment` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`date` datetime NOT NULL,
	`post_id` int(11) NOT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=InnoDB;

CREATE TABLE `myblogdb`.`messages` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`email_address` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`website` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`message` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`date` datetime NOT NULL,
	`date_read` datetime DEFAULT NULL,
	`read` tinyint(1) NOT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=InnoDB;

CREATE TABLE `myblogdb`.`post_views` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`post_id` int(11) NOT NULL,
	`date` datetime NOT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=InnoDB;

CREATE TABLE `myblogdb`.`posts` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`slug` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`title` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`content` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`date_published` datetime DEFAULT NULL,
	`created` datetime NOT NULL,
	`modified` datetime NOT NULL,
	`post_view_count` int(11) NOT NULL,
	`comment_count` int(11) NOT NULL,
	`preview` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`image` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`category_id` int(11) NOT NULL,
	`published` tinyint(1) DEFAULT '0' NOT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=InnoDB;

