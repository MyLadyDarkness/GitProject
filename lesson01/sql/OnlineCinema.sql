/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50720
Source Host           : localhost:3306
Source Database       : OnlineCinema

Target Server Type    : MYSQL
Target Server Version : 50720
File Encoding         : 65001

Date: 2018-10-06 12:19:58
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `Authors`
-- ----------------------------
DROP TABLE IF EXISTS `Authors`;
CREATE TABLE `Authors` (
  `Authors_Id` varchar(255) NOT NULL,
  `Authors_Name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Authors_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of Authors
-- ----------------------------
INSERT INTO `Authors` VALUES ('1', 'Egor Petrov');
INSERT INTO `Authors` VALUES ('2', 'Ylia Sergeeva');
INSERT INTO `Authors` VALUES ('3', 'Fedor Sviridov');
INSERT INTO `Authors` VALUES ('4', 'Vasya Pupkin');
INSERT INTO `Authors` VALUES ('5', 'Ivan Nepomnu');

-- ----------------------------
-- Table structure for `Films`
-- ----------------------------
DROP TABLE IF EXISTS `Films`;
CREATE TABLE `Films` (
  `Film_Name` varchar(255) DEFAULT NULL,
  `Film_Year` varchar(255) DEFAULT NULL,
  `Film_Id` varchar(255) NOT NULL,
  `Film_Author` varchar(255) NOT NULL,
  PRIMARY KEY (`Film_Id`),
  KEY `Film_Author` (`Film_Author`),
  CONSTRAINT `Film_Author` FOREIGN KEY (`Film_Author`) REFERENCES `Authors` (`Authors_Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of Films
-- ----------------------------
INSERT INTO `Films` VALUES ('Odin doma 1', '1998', '1', '2');
INSERT INTO `Films` VALUES ('Love', '2017', '2', '5');
INSERT INTO `Films` VALUES ('Leto', '2012', '3', '4');
INSERT INTO `Films` VALUES ('Love', '2005', '4', '1');
INSERT INTO `Films` VALUES ('Avtovokzal', '1984', '5', '3');

-- ----------------------------
-- Table structure for `FilmsGenres`
-- ----------------------------
DROP TABLE IF EXISTS `FilmsGenres`;
CREATE TABLE `FilmsGenres` (
  `Film_Id` varchar(255) NOT NULL,
  `Genre_Id` varchar(255) NOT NULL,
  KEY `FilmId` (`Film_Id`),
  KEY `GenreId` (`Genre_Id`),
  CONSTRAINT `FilmId` FOREIGN KEY (`Film_Id`) REFERENCES `Films` (`Film_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `GenreId` FOREIGN KEY (`Genre_Id`) REFERENCES `Genres` (`Genre_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of FilmsGenres
-- ----------------------------
INSERT INTO `FilmsGenres` VALUES ('1', '1');
INSERT INTO `FilmsGenres` VALUES ('2', '2');
INSERT INTO `FilmsGenres` VALUES ('3', '3');
INSERT INTO `FilmsGenres` VALUES ('4', '4');
INSERT INTO `FilmsGenres` VALUES ('5', '5');

-- ----------------------------
-- Table structure for `Genres`
-- ----------------------------
DROP TABLE IF EXISTS `Genres`;
CREATE TABLE `Genres` (
  `Genre_id` varchar(255) NOT NULL,
  `Genre_Name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Genre_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of Genres
-- ----------------------------
INSERT INTO `Genres` VALUES ('1', 'Comedy');
INSERT INTO `Genres` VALUES ('2', 'Drama');
INSERT INTO `Genres` VALUES ('3', 'Family');
INSERT INTO `Genres` VALUES ('4', 'Anime');
INSERT INTO `Genres` VALUES ('5', 'Western');
