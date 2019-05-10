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
  `ContactNumber` varchar(11) DEFAULT NULL,
  `OfficeLocation` varchar(60) DEFAULT NULL,
  `Username` varchar(60) DEFAULT NULL,
  `Password` varchar(60) DEFAULT NULL,
  `userlevel` int(1) DEFAULT NULL,
  PRIMARY KEY (`AddAccountId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;



/*Data for the table `addaccounttable` */



LOCK TABLES `addaccounttable` WRITE;



insert  into `addaccounttable`(`AddAccountId`,`FirstName`,`MiddleName`,`LastName`,`Division`,`ContactNumber`,`OfficeLocation`,`Username`,`Password`,`userlevel`) values (1,'Albert','Yale','Tanini','Developers','09771243945','2nd Floor','raijin','a',2),(2,'Mer','Cu','Ry','Admin','none','Hell','admin','admin',1),(4,'a','a','a','Division 2','a','1st Floor','a','a',2);



UNLOCK TABLES;



/*Table structure for table `addformtable` */



DROP TABLE IF EXISTS `addformtable`;



CREATE TABLE `addformtable` (
  `AddFormId` int(6) NOT NULL AUTO_INCREMENT,
  `ImagePath` varchar(60) DEFAULT NULL,
  `EntryTitle` varchar(60) DEFAULT NULL,
  `EntryDescription` varchar(200) DEFAULT NULL,
  `Resolution` text,
  `DateOfEntry` date DEFAULT NULL,
  `Author` varchar(60) DEFAULT NULL,
  `SubCategoryID` int(6) DEFAULT NULL,
  PRIMARY KEY (`AddFormId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;



/*Data for the table `addformtable` */



LOCK TABLES `addformtable` WRITE;



insert  into `addformtable`(`AddFormId`,`ImagePath`,`EntryTitle`,`EntryDescription`,`Resolution`,`DateOfEntry`,`Author`,`SubCategoryID`) values (1,'uploads/no-photo.jpg','admin','admin','admin\r\n','2017-04-17','2',1);



UNLOCK TABLES;



/*Table structure for table `categorytable` */



DROP TABLE IF EXISTS `categorytable`;



CREATE TABLE `categorytable` (
  `CategoryId` int(6) NOT NULL AUTO_INCREMENT,
  `NameOfCategory` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`CategoryId`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;



/*Data for the table `categorytable` */



LOCK TABLES `categorytable` WRITE;



insert  into `categorytable`(`CategoryId`,`NameOfCategory`) values (1,'Hardware'),(2,'Software'),(3,'Network');



UNLOCK TABLES;



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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;



/*Data for the table `editformtable` */



LOCK TABLES `editformtable` WRITE;



insert  into `editformtable`(`EditId`,`ImagePath`,`EntryTitle`,`EntryDescription`,`Resolution`,`DateOfEdit`,`Author`,`EditDescription`,`AddFormId`) values (1,'uploads/no-photo.jpg','admin','admin','admin\r\n','2017-04-17','2','asdasd',1);



UNLOCK TABLES;



/*Table structure for table `subcategorytable` */



DROP TABLE IF EXISTS `subcategorytable`;



CREATE TABLE `subcategorytable` (
  `SubCategoryId` int(6) NOT NULL AUTO_INCREMENT,
  `NameOfSubCategory` varchar(60) DEFAULT NULL,
  `CategoryId` int(6) DEFAULT NULL,
  PRIMARY KEY (`SubCategoryId`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;



/*Data for the table `subcategorytable` */



LOCK TABLES `subcategorytable` WRITE;



insert  into `subcategorytable`(`SubCategoryId`,`NameOfSubCategory`,`CategoryId`) values (1,'System Unit',1),(2,'Mouse',1),(3,'Keyboard',1),(4,'Speaker',1),(5,'Web cam',1),(6,'Mic',1),(7,'Printer',1),(8,'Scanner',1),(9,'Flash Drive',1),(10,'External Drive',1),(11,'Operating System',2),(12,'Microsoft Office',2),(13,'Virus',2),(14,'Blue Screen Of Death',2),(16,'No Internet Connection',3),(18,'dasdads',6),(19,'asd',3);



UNLOCK TABLES;



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
 `ImagePath` varchar(60) ,
 `EntryTitle` varchar(60) ,
 `EntryDescription` varchar(200) ,
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



/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_subcategory` AS select `subcategorytable`.`SubCategoryId` AS `SubCategoryId`,`subcategorytable`.`NameOfSubCategory` AS `NameOfSubCategory`,`subcategorytable`.`CategoryId` AS `CategoryId`,`categorytable`.`NameOfCategory` AS `NameOfCategory` from (`categorytable` join `subcategorytable` on((`categorytable`.`CategoryId` = `subcategorytable`.`CategoryId`))) */;



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;

/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;

/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;

/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

