/*
MySQL Data Transfer
Source Host: localhost
Source Database: lgdb
Target Host: localhost
Target Database: lgdb
Date: 2014/3/2 22:28:37
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for ligong_application_form
-- ----------------------------
DROP TABLE IF EXISTS `ligong_application_form`;
CREATE TABLE `ligong_application_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `extension` varchar(32) NOT NULL,
  `key_word` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `add_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for ligong_class
-- ----------------------------
DROP TABLE IF EXISTS `ligong_class`;
CREATE TABLE `ligong_class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `session_id` int(11) NOT NULL,
  `speciality_id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for ligong_curriculum
-- ----------------------------
DROP TABLE IF EXISTS `ligong_curriculum`;
CREATE TABLE `ligong_curriculum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  ` session_id` int(11) NOT NULL,
  `speciality_id` int(11) NOT NULL,
  `year` varchar(32) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for ligong_online_classes
-- ----------------------------
DROP TABLE IF EXISTS `ligong_online_classes`;
CREATE TABLE `ligong_online_classes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `add_time` date NOT NULL,
  `introduction` text,
  `key_word` varchar(255) DEFAULT NULL,
  `poster_name` varchar(255) DEFAULT NULL,
  `poster_path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for ligong_online_classes_content
-- ----------------------------
DROP TABLE IF EXISTS `ligong_online_classes_content`;
CREATE TABLE `ligong_online_classes_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `online_classes_id` int(11) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `extension` varchar(32) NOT NULL,
  `add_time` datetime NOT NULL,
  `sort` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for ligong_reservation
-- ----------------------------
DROP TABLE IF EXISTS `ligong_reservation`;
CREATE TABLE `ligong_reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(16) NOT NULL,
  `reservation_curriculum_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for ligong_reservation_curriculum
-- ----------------------------
DROP TABLE IF EXISTS `ligong_reservation_curriculum`;
CREATE TABLE `ligong_reservation_curriculum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` varchar(32) NOT NULL,
  `class_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `deadline` date DEFAULT NULL,
  `total_hours` int(11) NOT NULL,
  `credit` double NOT NULL,
  `max_num` int(11) NOT NULL,
  `current_num` int(11) NOT NULL,
  `from_week` int(11) NOT NULL,
  `end_week` int(11) NOT NULL,
  `weekday` int(11) NOT NULL,
  `from_lesson` int(11) NOT NULL,
  `end_lesson` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for ligong_session
-- ----------------------------
DROP TABLE IF EXISTS `ligong_session`;
CREATE TABLE `ligong_session` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for ligong_speciality
-- ----------------------------
DROP TABLE IF EXISTS `ligong_speciality`;
CREATE TABLE `ligong_speciality` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `session_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for ligong_student_work
-- ----------------------------
DROP TABLE IF EXISTS `ligong_student_work`;
CREATE TABLE `ligong_student_work` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `session_id` int(11) NOT NULL,
  `speciality_id` int(11) NOT NULL,
  `class _id` int(11) NOT NULL,
  `curriculum_id` int(11) NOT NULL,
  `student_id` varchar(16) NOT NULL,
  `year` varchar(32) NOT NULL,
  `title` varchar(255) NOT NULL,
  `add_time` datetime NOT NULL,
  `introduction` tinyint(4) DEFAULT NULL,
  `recommended` int(11) NOT NULL DEFAULT '0',
  `comments` text,
  `type` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for ligong_student_work_content
-- ----------------------------
DROP TABLE IF EXISTS `ligong_student_work_content`;
CREATE TABLE `ligong_student_work_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_work_id` int(11) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `extension` varchar(32) NOT NULL,
  `add_time` datetime NOT NULL,
  `sort` int(11) DEFAULT NULL,
  `cover` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for ligong_students
-- ----------------------------
DROP TABLE IF EXISTS `ligong_students`;
CREATE TABLE `ligong_students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `session_id` int(11) NOT NULL,
  `speciality_id` int(11) NOT NULL,
  `class _id` int(11) NOT NULL,
  `student_id` varchar(16) NOT NULL,
  `name` varchar(64) NOT NULL,
  `password` varchar(32) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `introduction` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for ligong_teachers
-- ----------------------------
DROP TABLE IF EXISTS `ligong_teachers`;
CREATE TABLE `ligong_teachers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records 
-- ----------------------------
