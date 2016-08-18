/*
SQLyog Community v12.09 (64 bit)
MySQL - 10.1.13-MariaDB : Database - test
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`test` /*!40100 DEFAULT CHARACTER SET latin1 */;

/*Table structure for table `configs` */

DROP TABLE IF EXISTS `configs`;

CREATE TABLE `configs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pageTitle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `footerContent` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `map` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `configs` */

insert  into `configs`(`id`,`pageTitle`,`footerContent`,`address`,`phone`,`fax`,`email`,`map`,`updated_at`) values (1,'STD Group','CÔNG TY CỔ PHẦN ĐẦU TƯ SAO THÁI DƯƠNG','1','0433982626','0433982626','info@stdgroup.vn','dfhfhfghg','2016-08-18 17:39:12');

/*Table structure for table `image_cate` */

DROP TABLE IF EXISTS `image_cate`;

CREATE TABLE `image_cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position` int(5) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `image_cate` */

/*Table structure for table `images` */

DROP TABLE IF EXISTS `images`;

CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cate_id` int(11) NOT NULL,
  `position` int(5) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `images` */

/*Table structure for table `languages` */

DROP TABLE IF EXISTS `languages`;

CREATE TABLE `languages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lang_name` varchar(250) NOT NULL,
  `is_default` tinyint(1) NOT NULL,
  `position` int(5) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `languages` */

insert  into `languages`(`id`,`lang_name`,`is_default`,`position`,`status`,`updated_at`,`created_at`) values (1,'English',0,1,1,'2016-08-18 15:30:04','2016-08-18 15:30:04'),(2,'Tiếng Việt',0,2,1,'2016-08-18 15:31:00','2016-08-18 15:31:00'),(3,'Tiếng Nhật',0,3,1,'2016-08-18 15:31:10','2016-08-18 15:31:10');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`migration`,`batch`) values ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2015_10_01_115007_create_pages_table',1),('2015_10_03_152911_alter_pages_add_template_column',1),('2015_10_03_155422_alter_pages_add_order_columns',1),('2015_10_03_164107_create_posts_table',1),('2015_10_05_120228_alter_users_add_last_login_at_column',1),('2015_10_05_134438_alter_pages_add_hidden_column',1);

/*Table structure for table `pages` */

DROP TABLE IF EXISTS `pages`;

CREATE TABLE `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `uri` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `template` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rgt` int(11) DEFAULT NULL,
  `depth` int(11) DEFAULT NULL,
  `hidden` tinyint(1) NOT NULL DEFAULT '0',
  `title_vn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_jp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pages_uri_unique` (`uri`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `pages` */

insert  into `pages`(`id`,`title_en`,`name`,`uri`,`content`,`created_at`,`updated_at`,`template`,`parent_id`,`lft`,`rgt`,`depth`,`hidden`,`title_vn`,`title_jp`) values (1,'About',NULL,'about','This is the about page.','0000-00-00 00:00:00','2016-08-18 15:48:45',NULL,NULL,3,10,0,0,'Giới thiệu','About'),(2,'Contact',NULL,'contact','This is the contact page.','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,1,4,5,1,0,'',''),(3,'FAQ',NULL,'faq','This is the faq page.','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,1,6,7,1,0,'',''),(4,'Home',NULL,'/','This is the home page.','0000-00-00 00:00:00','2016-08-18 15:39:34','home',NULL,1,2,0,0,'Trang chủ','Home'),(5,'Blog',NULL,'archive','This is the blog page.','0000-00-00 00:00:00','2016-08-18 15:48:45','blog',NULL,11,14,0,0,'',''),(6,'Blog Post','blog.post','article/{id}/{slug}','This is the blog post page.','0000-00-00 00:00:00','2016-08-18 15:48:45','blog.post',5,12,13,1,1,'',''),(7,'History',NULL,'','','2016-08-18 15:48:45','2016-08-18 15:48:45',NULL,1,8,9,1,0,'Lịch sử hình thành','History');

/*Table structure for table `partner` */

DROP TABLE IF EXISTS `partner`;

CREATE TABLE `partner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `com_name` varchar(255) NOT NULL,
  `com_web` varchar(255) NOT NULL,
  `com_mail` varchar(255) NOT NULL,
  `com_tel` varchar(20) NOT NULL,
  `com_phone` varchar(20) NOT NULL,
  `com_scale` varchar(255) NOT NULL,
  `com_section` varchar(255) NOT NULL,
  `com_partner` varchar(255) NOT NULL,
  `com_last_revenue` varchar(255) NOT NULL,
  `com_next_revenue` varchar(255) NOT NULL,
  `com_info` text NOT NULL,
  `com_address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `partner` */

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `posts` */

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `posts` */

insert  into `posts`(`id`,`author_id`,`title`,`slug`,`body`,`excerpt`,`published_at`,`created_at`,`updated_at`) values (1,1,'Example Post 1','example-post-1','This is an example post.','','2016-08-18 14:04:20','0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,2,'Example Post 2','example-post-2','This is an example post.','','2016-09-01 14:04:20','0000-00-00 00:00:00','0000-00-00 00:00:00'),(3,1,'Example Post 3','example-post-3','This is an example post.','',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_login_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`,`last_login_at`) values (1,'Bill','bill@sundaysim.app','$2y$10$zoeRWIg2e/h4D5ciXtPMX.DOKA2/rGMFfRGrbipBtnlyjpwkv0aqy',NULL,'0000-00-00 00:00:00','2016-08-18 14:36:19','2016-08-18 14:36:19'),(2,'Mary','mary@sundaysim.app','$2y$10$G6pHvh5sxyX61RSNyFkznuYeirMfhr47en9hpWxp3fS8yHJoKvzFG',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL);

/*Table structure for table `video` */

DROP TABLE IF EXISTS `video`;

CREATE TABLE `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `video` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
