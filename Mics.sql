/*
SQLyog Ultimate v8.53 
MySQL - 5.7.12 : Database - micsdb
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`micsdb` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `micsdb`;

/*Table structure for table `addaccounttable` */

DROP TABLE IF EXISTS `addaccounttable`;

CREATE TABLE `addaccounttable` (
  `AddAccountId` int(6) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(60) DEFAULT NULL,
  `MiddleName` varchar(60) DEFAULT NULL,
  `LastName` varchar(60) DEFAULT NULL,
  `Division` varchar(60) DEFAULT NULL,
  `ContactNumber` int(11) DEFAULT NULL,
  `OfficeLocation` varchar(60) DEFAULT NULL,
  `Username` varchar(60) DEFAULT NULL,
  `Password` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`AddAccountId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `addaccounttable` */

insert  into `addaccounttable`(`AddAccountId`,`FirstName`,`MiddleName`,`LastName`,`Division`,`ContactNumber`,`OfficeLocation`,`Username`,`Password`) values (1,'Jobert','Lipura','Dellava','Developers',2147483647,'5th Floor','raijin','nataraki');

/*Table structure for table `addformtable` */

DROP TABLE IF EXISTS `addformtable`;

CREATE TABLE `addformtable` (
  `AddFormId` int(6) NOT NULL AUTO_INCREMENT,
  `ImagePath` varchar(60) DEFAULT NULL,
  `EntryTitle` varchar(60) DEFAULT NULL,
  `EntryDescription` varchar(100) DEFAULT NULL,
  `Resulotion` varchar(200) DEFAULT NULL,
  `DateOfEntry` date DEFAULT NULL,
  `EditDescription` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`AddFormId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `addformtable` */

insert  into `addformtable`(`AddFormId`,`ImagePath`,`EntryTitle`,`EntryDescription`,`Resulotion`,`DateOfEntry`,`EditDescription`) values (1,NULL,'Hardware','Broken Keyboard','Buy Another','2007-04-06',NULL);

/*Table structure for table `categorytable` */

DROP TABLE IF EXISTS `categorytable`;

CREATE TABLE `categorytable` (
  `SubCategoryId` int(6) NOT NULL AUTO_INCREMENT,
  `NameOfCategory` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`SubCategoryId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `categorytable` */

/*Table structure for table `editformtable` */

DROP TABLE IF EXISTS `editformtable`;

CREATE TABLE `editformtable` (
  `EditId` int(6) NOT NULL AUTO_INCREMENT,
  `ImagePath` varchar(60) DEFAULT NULL,
  `EntryTitle` varchar(60) DEFAULT NULL,
  `EntryDescription` varchar(100) DEFAULT NULL,
  `Resolution` varchar(200) DEFAULT NULL,
  `DateOfEntry` date DEFAULT NULL,
  `EditDescription` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`EditId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `editformtable` */

/*Table structure for table `problemtable` */

DROP TABLE IF EXISTS `problemtable`;

CREATE TABLE `problemtable` (
  `ProblemId` int(6) NOT NULL AUTO_INCREMENT,
  `ProblemName` varchar(60) DEFAULT NULL,
  `AddFormId` int(6) DEFAULT NULL,
  PRIMARY KEY (`ProblemId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `problemtable` */

/*Table structure for table `subcategorytable` */

DROP TABLE IF EXISTS `subcategorytable`;

CREATE TABLE `subcategorytable` (
  `SubCategoryId` int(6) NOT NULL AUTO_INCREMENT,
  `NameOfSubCategory` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`SubCategoryId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `subcategorytable` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
