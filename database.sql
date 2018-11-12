/*
SQLyog Enterprise v12.5.1 (64 bit)
MySQL - 10.1.29-MariaDB : Database - invoicing_system
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`invoicing_system` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `invoicing_system`;

/*Table structure for table `invoice_items` */

DROP TABLE IF EXISTS `invoice_items`;

CREATE TABLE `invoice_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `amount` decimal(15,5) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `invoice_items` */

insert  into `invoice_items`(`id`,`invoice_id`,`name`,`amount`,`created_at`) values 
(1,5,'Service Cost',433.00000,'2017-05-19 02:00:00'),
(2,4,'Service Cost',486.00000,'2017-05-12 02:00:00'),
(3,6,'Additional Items',532.00000,'2017-06-05 02:00:00'),
(4,3,'Service Cost',246.00000,'2017-04-08 02:00:00'),
(5,1,'Service Cost',888.00000,'2017-03-29 02:00:00'),
(6,7,'Additional Items',64.00000,'2017-06-08 02:00:00'),
(7,7,'Service Cost',443.00000,'2017-06-15 02:00:00'),
(8,8,'Additional Items',999.00000,'2017-07-03 02:00:00'),
(9,4,'Additional Items',446.00000,'2017-05-12 02:00:00'),
(10,2,'Additional Items',257.00000,'2017-03-30 02:00:00'),
(11,5,'Additional Items',733.00000,'2017-05-19 02:00:00'),
(12,10,'Additional Items',553.00000,'2017-08-14 02:00:00'),
(13,10,'Service Cost',224.00000,'2017-08-14 02:00:00'),
(14,9,'Additional Items',45.00000,'2017-07-26 02:00:00'),
(15,1,'Additional Items',55.00000,'2017-03-29 02:00:00'),
(16,2,'Service Cost',965.00000,'2017-03-30 02:00:00'),
(17,8,'Service Cost',923.00000,'2017-07-03 02:00:00'),
(18,9,'Service Cost',48.00000,'2017-07-26 02:00:00'),
(19,7,'Package 23',663.00000,'2017-06-15 02:00:00'),
(20,6,'Service Cost',368.00000,'2017-06-05 02:00:00'),
(21,3,'Additional Items',93.00000,'2017-04-08 02:00:00'),
(22,4,'Package 34',688.00000,'2017-05-12 02:00:00'),
(23,4,'Package 1',4396.00000,'2017-05-12 02:00:00'),
(24,5,'Package 45',343.00000,'2017-05-19 02:00:00');

/*Table structure for table `invoices` */

DROP TABLE IF EXISTS `invoices`;

CREATE TABLE `invoices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client` varchar(255) DEFAULT NULL,
  `invoice_amount` decimal(15,5) DEFAULT NULL,
  `invoice_amount_plus_vat` decimal(15,5) DEFAULT NULL,
  `vat_rate` decimal(15,5) DEFAULT NULL,
  `invoice_status` enum('paid','unpaid') DEFAULT NULL,
  `invoice_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `invoice_amount_paid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `invoices` */

insert  into `invoices`(`id`,`client`,`invoice_amount`,`invoice_amount_plus_vat`,`vat_rate`,`invoice_status`,`invoice_date`,`created_at`,`invoice_amount_paid`) values 
(1,'ACME Chemicals B.V.',943.00000,1141.00000,21.00000,'paid','2017-03-29','2017-03-29 02:00:00',NULL),
(2,'ICS Digital B.V.',1222.00000,1479.00000,21.00000,'unpaid','2017-03-30','2017-03-30 02:00:00',NULL),
(3,'Shell Foods B.V.',339.00000,410.00000,21.00000,'unpaid','2017-04-08','2017-04-08 02:00:00',NULL),
(4,'DDY Entertainment B.V.',6016.00000,7279.00000,21.00000,'paid','2017-05-12','2017-05-12 02:00:00',NULL),
(5,'ALbert Hiejn B.V.',1509.00000,1750.00000,16.00000,'unpaid','2017-05-19','2017-05-19 02:00:00',NULL),
(6,'Woolworths B.V.',900.00000,1044.00000,16.00000,'unpaid','2017-06-05','2017-06-05 02:00:00',NULL),
(7,'Select Systems B.V.',1170.00000,1416.00000,21.00000,'unpaid','2017-06-08','2017-06-08 02:00:00',NULL),
(8,'Fedhealth Inc',1922.00000,2326.00000,21.00000,'unpaid','2017-07-03','2017-07-03 02:00:00',NULL),
(9,'Auto & General',93.00000,109.00000,17.00000,'unpaid','2017-07-26','2017-07-26 02:00:00',NULL),
(10,'Vaca Loca Bar',777.00000,909.00000,17.00000,'paid','2017-08-14','2017-08-14 02:00:00',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
