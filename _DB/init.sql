CREATE DATABASE `energomed`;
USE energomed;

CREATE TABLE `users` (
  `id` INT unsigned auto_increment PRIMARY KEY,
  `login` VARCHAR(255) NOT NULL,
  `pwd` VARCHAR(255) NOT NULL,
  `firstname` VARCHAR(255) NOT NULL,
  `surname` VARCHAR(255) NOT NULL
);

CREATE TABLE `patient` (
  `id` INT unsigned auto_increment PRIMARY KEY,
  `firstname` VARCHAR(255) NOT NULL,
  `surname` VARCHAR(255) NOT NULL,
  `age` INT unsigned,
  `gender` enum('M','F'),
  `bloodtype` enum('0-','0+','A-','A+','B-','B+', 'AB-','AB+'),
  `notes` text NOT NULL default '',
  `ranking` TINYINT DEFAULT 0
);

CREATE TABLE `tag` (
  `id` int(10) unsigned auto_increment PRIMARY KEY,
  `name` varchar(255) NOT NULL,
  `name_ua` varchar(255) NOT NULL,
  `css_class` varchar(255) NOT NULL,
  `fa_icon` varchar(255) NOT NULL,
  `reputation_weight` varchar(255) NOT NULL
);

CREATE TABLE `patient_tag` (
  `patient_id` INT unsigned,
  `tag_id` INT unsigned,
  PRIMARY KEY (`patient_id`, `tag_id`),
  CONSTRAINT `fk_patient_tag` FOREIGN KEY (`patient_id`) REFERENCES patient(`id`),
  CONSTRAINT `fk_tag_patient` FOREIGN KEY (`tag_id`) REFERENCES tag(`id`)
);


INSERT INTO `tag` (`id`, `name`, `name_ua`, `css_class`, `fa_icon`, `reputation_weight`) VALUES
(1, 'Troublemaker', '', 'troublemaker', '', '-1'),
(2, 'Unwanted', 'небажана особа', 'unwanted', 'fas fa-ban', '-10'),
(3, 'Favorable', 'сприятливий', 'favor', 'far fa-smile', '-1'),
(4, 'V.I.P', '', 'vip', '', '10'),
(5, 'Restricted', 'обмежений доступ', 'restricted', 'fas fa-key', ''),
(6, 'Blood Donor', 'донор крові', 'blooddonor', 'fas fa-tint', '1'),
(7, 'Blood Donor - Excluded', 'донор - виключено', 'blooddonor', 'fas fa-tint-slash', ''),
(8, 'Certified medic', 'медик', 'medic', 'fas fa-file-medical', '0'),
(9, 'Irradiated', 'опромінений', 'irradiated', 'fas fa-radiation', ''),
(10, 'Anomaly touched', 'аномалія торкнулася', 'anomaly', 'fas fa-atom', ''),
(11, 'Biohazard', 'біологічна небезпека', 'biohazard', 'fas fa-biohazard', '');

INSERT INTO `patient` (`id`, `firstname`, `surname`, `age`, `gender`, `bloodtype`, `notes`, `ranking`) VALUES
(1, 'Mikhail', 'Kyrillov', 41, 'M', '0+', '', 5),
(2, 'Kassandra', 'Ivanovna', 39, 'F', 'A+', '', 5),
(3, 'Evžen', 'Oněgin', 72, 'M', 'AB-', '', 2),
(4, 'Alexei', 'Nikolaevich', 80, 'M', '', '', 3),
(5, 'Anastasia', 'Nikolaevna', 95, 'F', 'B+', '\'\'', 4),
(6, 'Isajevič, Alexandr', 'Solženicyn', 69, 'M', 'B+', '\'\'', 4),
(7, 'Vladimir', 'Nabokov', 58, 'M', 'A-', '\'\'', 3),
(8, 'Stepanovich, Anatoly', 'Dyatlov', 64, 'M', 'A-', '\'\'', 1),
(9, 'Anna', 'Karenina', 35, 'F', 'A-', '\'\'', 3);



  