/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50533
Source Host           : localhost:3306
Source Database       : pandamsg

Target Server Type    : MYSQL
Target Server Version : 50533
File Encoding         : 65001

Date: 2015-03-21 01:00:34
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `customer`
-- ----------------------------
DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(1000) NOT NULL,
  `Pwd` varchar(1000) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID_2` (`ID`),
  KEY `ID` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of customer
-- ----------------------------
INSERT INTO `customer` VALUES ('1', 'admin', '123456');
INSERT INTO `customer` VALUES ('2', 'pandait', '123456');
INSERT INTO `customer` VALUES ('3', 'abc', '123456');
INSERT INTO `customer` VALUES ('4', 'username', '123456');
INSERT INTO `customer` VALUES ('5', 'username', '123456');
INSERT INTO `customer` VALUES ('6', 'lalarola', 'lalarola');

-- ----------------------------
-- Table structure for `messages`
-- ----------------------------
DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `createOn` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of messages
-- ----------------------------
