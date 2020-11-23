/*
SQLyog Ultimate v8.53 
MySQL - 5.5.5-10.1.37-MariaDB : Database - micsdb
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
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
  `ContactNumber` varchar(11) DEFAULT NULL,
  `OfficeLocation` varchar(60) DEFAULT NULL,
  `Username` varchar(60) DEFAULT NULL,
  `Password` varchar(60) DEFAULT '12345678',
  `userlevel` int(1) DEFAULT NULL,
  `active` int(1) DEFAULT NULL,
  `dateofdeactivate` datetime DEFAULT NULL,
  PRIMARY KEY (`AddAccountId`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `addaccounttable` */

insert  into `addaccounttable`(`AddAccountId`,`FirstName`,`MiddleName`,`LastName`,`Division`,`ContactNumber`,`OfficeLocation`,`Username`,`Password`,`userlevel`,`active`,`dateofdeactivate`) values (1,'Christian','Benigno','Bayer','Developers','a','5th Floor','raijin','123',2,0,'2020-11-07 20:33:36'),(2,'Ivy','Laurel','Morales','Admin','none','1st Floor','admin','admin',1,1,NULL);

/*Table structure for table `addformtable` */

DROP TABLE IF EXISTS `addformtable`;

CREATE TABLE `addformtable` (
  `AddFormId` int(6) NOT NULL AUTO_INCREMENT,
  `ImagePath` text,
  `EntryTitle` text,
  `EntryDescription` text,
  `Resolution` text,
  `DateOfEntry` date DEFAULT NULL,
  `Author` varchar(60) DEFAULT NULL,
  `SubCategoryID` int(6) DEFAULT NULL,
  PRIMARY KEY (`AddFormId`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `addformtable` */

/*Table structure for table `categorytable` */

DROP TABLE IF EXISTS `categorytable`;

CREATE TABLE `categorytable` (
  `CategoryId` int(6) NOT NULL AUTO_INCREMENT,
  `NameOfCategory` varchar(60) DEFAULT NULL,
  `acivate` int(1) DEFAULT NULL,
  `dateofdisactivate` datetime DEFAULT NULL,
  PRIMARY KEY (`CategoryId`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `categorytable` */

insert  into `categorytable`(`CategoryId`,`NameOfCategory`,`acivate`,`dateofdisactivate`) values (1,'Hardware',1,NULL),(2,'Software',1,NULL),(3,'Network',1,NULL),(4,'wewGG',0,'2017-04-20 10:13:33'),(5,'Airconditioner',0,'2017-04-20 14:29:39'),(6,'Communication',1,NULL),(7,'Hardware',0,'2020-11-07 20:40:18'),(8,'sdasdasd asda sd asd asda sda sdasd asd asd asd asda sdad ',0,'2020-11-08 07:49:15'),(9,'tae',0,'2020-11-08 07:53:26');

/*Table structure for table `editformtable` */

DROP TABLE IF EXISTS `editformtable`;

CREATE TABLE `editformtable` (
  `EditId` int(6) NOT NULL AUTO_INCREMENT,
  `ImagePath` varchar(60) DEFAULT NULL,
  `EntryTitle` varchar(60) DEFAULT NULL,
  `EntryDescription` varchar(200) DEFAULT NULL,
  `Resolution` text,
  `DateOfEdit` date DEFAULT NULL,
  `Author` varchar(60) DEFAULT NULL,
  `EditDescription` varchar(200) DEFAULT NULL,
  `AddFormId` int(6) DEFAULT NULL,
  PRIMARY KEY (`EditId`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

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
  `CategoryId` int(6) DEFAULT NULL,
  `activate` int(1) DEFAULT '1',
  `datedisactivate` datetime DEFAULT NULL,
  PRIMARY KEY (`SubCategoryId`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

/*Data for the table `subcategorytable` */

insert  into `subcategorytable`(`SubCategoryId`,`NameOfSubCategory`,`CategoryId`,`activate`,`datedisactivate`) values (1,'System Unit',1,1,NULL),(2,'Mouse',1,1,NULL),(3,'Keyboard',1,1,NULL),(4,'Speaker',1,1,NULL),(5,'Web cam',1,1,NULL),(6,'Mic',1,0,'2017-04-20 10:46:37'),(7,'Printer',1,0,'2017-04-28 11:05:45'),(8,'Scanner',1,0,'2017-04-21 10:51:21'),(9,'Flash Drive',1,0,'2017-04-20 10:52:53'),(10,'External Drive',1,0,'2017-04-28 11:04:37'),(11,'Operating System',2,1,NULL),(12,'Microsoft Office',2,1,NULL),(13,'Virus',2,1,NULL),(14,'Blue Screen ',2,1,NULL),(15,'Drivers',2,1,NULL),(16,'No Internet',3,1,NULL),(18,'dasdads',6,0,'2017-04-21 10:45:22'),(19,NULL,NULL,0,NULL),(20,NULL,NULL,0,NULL),(21,'',5,1,NULL),(22,'anything',6,1,NULL),(23,'asdadasdasdasdaadad',6,0,'2017-04-28 10:21:35'),(24,'anything particular',6,1,NULL),(25,'anythin at all',6,1,NULL),(26,'fiore error',6,0,'2019-05-10 08:36:11'),(27,'',6,0,'2017-04-28 10:25:06'),(28,'',6,0,'2017-04-28 10:26:58'),(29,'',6,0,'2017-04-28 10:27:49'),(30,'',6,0,'2017-04-28 10:28:11'),(31,'',6,0,'2017-04-28 10:31:31'),(32,'something',3,1,NULL),(33,'printer',2,0,'2019-05-10 08:35:53'),(34,'',1,0,'2019-05-10 08:35:31'),(35,'Printer',1,1,NULL),(36,'',2,0,'2017-04-28 13:18:35'),(37,'a',1,0,'2020-11-08 07:50:05'),(38,'asdasd',1,0,'2020-11-08 07:52:59');

/*Table structure for table `view_edit_history` */

DROP TABLE IF EXISTS `view_edit_history`;

/*!50001 DROP VIEW IF EXISTS `view_edit_history` */;
/*!50001 DROP TABLE IF EXISTS `view_edit_history` */;

/*!50001 CREATE TABLE  `view_edit_history`(
 `EditId` int(6) ,
 `ImagePath` varchar(60) ,
 `EntryTitle` varchar(60) ,
 `EntryDescription` varchar(200) ,
 `Resolution` text ,
 `DateOfEdit` date ,
 `Author` varchar(60) ,
 `EditDescription` varchar(200) ,
 `AddFormId` int(6) ,
 `FirstName` varchar(60) ,
 `MiddleName` varchar(60) ,
 `LastName` varchar(60) 
)*/;

/*Table structure for table `view_entry` */

DROP TABLE IF EXISTS `view_entry`;

/*!50001 DROP VIEW IF EXISTS `view_entry` */;
/*!50001 DROP TABLE IF EXISTS `view_entry` */;

/*!50001 CREATE TABLE  `view_entry`(
 `AddFormId` int(6) ,
 `ImagePath` text ,
 `EntryTitle` text ,
 `EntryDescription` text ,
 `Resolution` text ,
 `DateOfEntry` date ,
 `Author` varchar(60) ,
 `NameOfSubCategory` varchar(60) ,
 `CategoryId` int(6) ,
 `NameOfCategory` varchar(60) 
)*/;

/*Table structure for table `view_subcategory` */

DROP TABLE IF EXISTS `view_subcategory`;

/*!50001 DROP VIEW IF EXISTS `view_subcategory` */;
/*!50001 DROP TABLE IF EXISTS `view_subcategory` */;

/*!50001 CREATE TABLE  `view_subcategory`(
 `SubCategoryId` int(6) ,
 `NameOfSubCategory` varchar(60) ,
 `CategoryId` int(6) ,
 `activate` int(1) ,
 `NameOfCategory` varchar(60) 
)*/;

/*View structure for view view_edit_history */

/*!50001 DROP TABLE IF EXISTS `view_edit_history` */;
/*!50001 DROP VIEW IF EXISTS `view_edit_history` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_edit_history` AS select `editformtable`.`EditId` AS `EditId`,`editformtable`.`ImagePath` AS `ImagePath`,`editformtable`.`EntryTitle` AS `EntryTitle`,`editformtable`.`EntryDescription` AS `EntryDescription`,`editformtable`.`Resolution` AS `Resolution`,`editformtable`.`DateOfEdit` AS `DateOfEdit`,`editformtable`.`Author` AS `Author`,`editformtable`.`EditDescription` AS `EditDescription`,`editformtable`.`AddFormId` AS `AddFormId`,`addaccounttable`.`FirstName` AS `FirstName`,`addaccounttable`.`MiddleName` AS `MiddleName`,`addaccounttable`.`LastName` AS `LastName` from (`addaccounttable` join `editformtable` on((`addaccounttable`.`AddAccountId` = `editformtable`.`Author`))) */;

/*View structure for view view_entry */

/*!50001 DROP TABLE IF EXISTS `view_entry` */;
/*!50001 DROP VIEW IF EXISTS `view_entry` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_entry` AS select `addformtable`.`AddFormId` AS `AddFormId`,`addformtable`.`ImagePath` AS `ImagePath`,`addformtable`.`EntryTitle` AS `EntryTitle`,`addformtable`.`EntryDescription` AS `EntryDescription`,`addformtable`.`Resolution` AS `Resolution`,`addformtable`.`DateOfEntry` AS `DateOfEntry`,`addformtable`.`Author` AS `Author`,`subcategorytable`.`NameOfSubCategory` AS `NameOfSubCategory`,`subcategorytable`.`CategoryId` AS `CategoryId`,`categorytable`.`NameOfCategory` AS `NameOfCategory` from ((`subcategorytable` join `addformtable` on((`subcategorytable`.`SubCategoryId` = `addformtable`.`SubCategoryID`))) join `categorytable` on((`categorytable`.`CategoryId` = `subcategorytable`.`CategoryId`))) */;

/*View structure for view view_subcategory */

/*!50001 DROP TABLE IF EXISTS `view_subcategory` */;
/*!50001 DROP VIEW IF EXISTS `view_subcategory` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_subcategory` AS select `subcategorytable`.`SubCategoryId` AS `SubCategoryId`,`subcategorytable`.`NameOfSubCategory` AS `NameOfSubCategory`,`subcategorytable`.`CategoryId` AS `CategoryId`,`subcategorytable`.`activate` AS `activate`,`categorytable`.`NameOfCategory` AS `NameOfCategory` from (`categorytable` join `subcategorytable` on((`categorytable`.`CategoryId` = `subcategorytable`.`CategoryId`))) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
