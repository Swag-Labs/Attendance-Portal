
DROP DATABASE IF EXISTS `attendance`;
CREATE DATABASE IF NOT EXISTS`attendance`;
USE  attendance;

--
-- Table structure for table Employess
--
DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(60) NOT NULL,
  `name` varchar(50) NOT NULL,
  `create_time` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `approved` TINYINT(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (id)
) ;

--
-- Table structure for table Attendance
--
DROP TABLE IF EXISTS `user_attandance`;
CREATE TABLE IF NOT EXISTS `user_attandance` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `employee_id` bigint(20)  NOT NULL,
  `create_time` TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
  `logout_time` TIMESTAMP DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `count` int(10) NOT NULL DEFAULT 1,
  KEY `employee_id` (`employee_id`),
  CONSTRAINT `employee_id` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  PRIMARY KEY (id)
) ;
