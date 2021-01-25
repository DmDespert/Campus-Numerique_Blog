-- Adminer 4.7.8 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

USE `blog`;

DROP TABLE IF EXISTS `authors`;
CREATE TABLE `authors` (
                           `id` int(11) NOT NULL AUTO_INCREMENT,
                           `name` varchar(30) NOT NULL,
                           `firstname` varchar(30) DEFAULT NULL,
                           `nickname` varchar(30) DEFAULT NULL,
                           PRIMARY KEY (`id`),
                           UNIQUE KEY `auteur_pseudo_UNIQUE` (`nickname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `authors` (`id`, `name`, `firstname`, `nickname`) VALUES
(1,	'Doe',	'John',	'jdoe'),
(2,	'Mosquito',	'Matthieu',	'mateo21'),
(3,	'Jill',	'Valentine',	'valentine'),
(4,	'Novak',	'Serge',	'snovak45'),
(5,	'Richard',	'Anthony',	'arichard')
    ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `name` = VALUES(`name`), `firstname` = VALUES(`firstname`), `nickname` = VALUES(`nickname`);

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
                              `id` int(11) NOT NULL AUTO_INCREMENT,
                              `name` varchar(30) NOT NULL,
                              PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `categories` (`id`, `name`) VALUES
(1,	'loisirs'),
(2,	'sciences'),
(3,	'informatique'),
(4,	'histoire'),
(5,	'social')
    ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `name` = VALUES(`name`);

DROP TABLE IF EXISTS `categories_has_posts`;
CREATE TABLE `categories_has_posts` (
                                        `categories_id` int(11) NOT NULL,
                                        `posts_id` int(11) NOT NULL,
                                        PRIMARY KEY (`categories_id`,`posts_id`),
                                        KEY `fk_categories_has_posts_posts1_idx` (`posts_id`),
                                        KEY `fk_categories_has_posts_categories1_idx` (`categories_id`),
                                        CONSTRAINT `fk_categories_has_posts_categories1` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
                                        CONSTRAINT `fk_categories_has_posts_posts1` FOREIGN KEY (`posts_id`) REFERENCES `posts` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `categories_has_posts` (`categories_id`, `posts_id`) VALUES
(1,	2),
(1,	3),
(2,	2),
(2,	3),
(3,	3)
    ON DUPLICATE KEY UPDATE `categories_id` = VALUES(`categories_id`), `posts_id` = VALUES(`posts_id`);

DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
                            `id` int(11) NOT NULL AUTO_INCREMENT,
                            `text` varchar(150) NOT NULL,
                            `first_date` datetime NOT NULL DEFAULT current_timestamp(),
                            `authors_id` int(11) NOT NULL,
                            `posts_id` int(11) NOT NULL,
                            PRIMARY KEY (`id`),
                            KEY `fk_comments_authors1_idx` (`authors_id`),
                            KEY `fk_comments_posts1_idx` (`posts_id`),
                            CONSTRAINT `fk_comments_authors1` FOREIGN KEY (`authors_id`) REFERENCES `authors` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
                            CONSTRAINT `fk_comments_posts1` FOREIGN KEY (`posts_id`) REFERENCES `posts` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `comments` (`id`, `text`, `first_date`, `authors_id`, `posts_id`) VALUES
(1,	'Sans avis',	'2021-01-25 08:54:56',	3,	2),
(2,	'Sans avis',	'2021-01-25 08:55:13',	4,	1),
(3,	'Bravo',	'2021-01-25 08:55:23',	4,	2),
(4,	'genial !!!',	'2021-01-25 08:56:52',	2,	1)
    ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `text` = VALUES(`text`), `first_date` = VALUES(`first_date`), `authors_id` = VALUES(`authors_id`), `posts_id` = VALUES(`posts_id`);

DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
                         `id` int(11) NOT NULL AUTO_INCREMENT,
                         `title` varchar(30) NOT NULL,
                         `text` varchar(150) NOT NULL,
                         `first_date` datetime NOT NULL,
                         `date_fin` datetime NOT NULL,
                         `important` int(11) NOT NULL DEFAULT 0,
                         `authors_id` int(11) NOT NULL,
                         PRIMARY KEY (`id`),
                         KEY `fk_posts_authors_idx` (`authors_id`),
                         CONSTRAINT `fk_posts_authors` FOREIGN KEY (`authors_id`) REFERENCES `authors` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `posts` (`id`, `title`, `text`, `first_date`, `date_fin`, `important`, `authors_id`) VALUES
(1,	'Sport',	'Y a du sport ce weekend',	'2021-01-01 12:00:00',	'2022-01-01 12:00:00',	3,	2),
(2,	'Biathlon',	'Biathlon du poitou ce we',	'2020-01-01 12:00:00',	'2022-01-01 12:00:00',	5,	3),
(3,	'du rififi chez les loulous',	'y a eu du rififi chez les loulous ce week end',	'2020-01-01 12:00:00',	'2022-02-03 12:00:00',	1,	3)
    ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `title` = VALUES(`title`), `text` = VALUES(`text`), `first_date` = VALUES(`first_date`), `date_fin` = VALUES(`date_fin`), `important` = VALUES(`important`), `authors_id` = VALUES(`authors_id`);

-- 2021-01-25 09:48:44
