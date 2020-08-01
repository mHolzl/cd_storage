CREATE DATABASE `cd_storage`;
USE cd_storage;

CREATE TABLE `artist` (
  `id` INT unsigned auto_increment PRIMARY KEY,
  `name` VARCHAR(255) NOT NULL
);
CREATE TABLE `genre` (
  `id` INT unsigned auto_increment PRIMARY KEY,
  `name` VARCHAR(255) NOT NULL
);

CREATE TABLE `album` (
  `id` INT unsigned auto_increment PRIMARY KEY,
  `artist_id` INT unsigned,
  `name` VARCHAR(255) NOT NULL,
  `released` DATETIME NOT NULL,
  `price` float DEFAULT 0,
  `ranking` TINYINT DEFAULT 0,
  CONSTRAINT `fk_artist_album` FOREIGN KEY (`artist_id`) REFERENCES artist(`id`)
);

CREATE TABLE `album_genre` (
  `album_id` INT unsigned,
  `genre_id` INT unsigned,
  PRIMARY KEY (`album_id`, `genre_id`),
  CONSTRAINT `fk_album_genre` FOREIGN KEY (`album_id`) REFERENCES album(`id`),
  CONSTRAINT `fk_genre_album` FOREIGN KEY (`genre_id`) REFERENCES genre(`id`)
);

CREATE TABLE `track` (
  `id` INT unsigned auto_increment PRIMARY KEY,
  `album_id` INT unsigned,
  `artist_id` INT unsigned DEFAULT NULL,
  `name` VARCHAR(255) NOT NULL,
  `duration` INT unsigned DEFAULT 0,
  `order` TINYINT DEFAULT 0,
  CONSTRAINT `fk_album_track` FOREIGN KEY (`album_id`) REFERENCES album(`id`),
  CONSTRAINT `fk_artist_track` FOREIGN KEY (`artist_id`) REFERENCES artist(`id`)
);

INSERT INTO `artist` (`id`, `name`) VALUES
  (1, 'Ghost'),
  (2, 'AC/DC'),
  (3, 'Various artists'),
  (4, 'Queen'),
  (5, 'Ozzy Osbourne'),
  (6, 'Rainey Haynes');

INSERT INTO `genre` (`id`, `name`) VALUES
  (1, 'Rock'),
  (2, 'Hard-Rock'),
  (3, 'Pop-Rock'),
  (4, 'Heavy Metal'),
  (5, 'Pop');

INSERT INTO `album` (`id`, `artist_id`, `name`, `released`, `price`, `ranking`) VALUES
  (1, 1, 'Meliora', '2015-08-21', 299.00, 1),
  (2, 1, 'Prequelle', '2018-06-01', 199.00, 2),
  (3, 2, 'T.N.T.', '1976-12-01', 349.50, 3),
  (4, 2, 'Highway to Hell', '1979-07-27', '349.50', 5),
  (5, 3, 'Raid the Arcade: Armada Book Inspired Soundtrack', '2018-09-18', 50.00, 4);

INSERT INTO `album_genre` (`album_id`, `genre_id`) VALUES
  (1, 3),
  (2, 3),
  (3, 3),
  (3, 2),
  (4, 3),
  (4, 2),
  (4, 4),
  (5, 1),
  (5, 5);

INSERT INTO `track` (`album_id`, `artist_id`, `name`, `duration`, `order`) VALUES
  (1, NULL, 'Spirit', '315', '1'),
  (1, NULL, 'From the Pinnacle to the Pit', '202', '2'),
  (1, NULL, 'Cirice', '362', '3'),
  (1, NULL, 'Mummy Dust', '407', '4'),

  (2, NULL, 'Ashes', '121', '1'),
  (2, NULL, 'Rats', '261', '2'),
  (2, NULL, 'Faith', '269', '3'),
  (2, NULL, 'Dance Macabre', '213', '4'),
  (2, NULL, 'Witch Image', '210', '5'),  

  (3, NULL, 'Rock \'n\' Roll Singer', '304', '2'),
  (3, NULL, 'The Jack', '352', '3'),
  (3, NULL, 'T.N.T.', '215', '1'),

  (4, NULL, 'Highway to Hell', '208', '1'),
  (4, NULL, 'Girls Got Rhythm', '352', '2'),
  (4, NULL, 'Walk All Over You', '215', '3'),
  (4, NULL, 'Touch Too Much', '215', '4'),

  (5, 4 , 'One Vision', '230', '1'),
  (5, 5 , 'Crazy Train', '349', '2'),
  (5, 2 , 'T.N.T.', '214', '3'),
  (5, 2 , 'We Will Rock You', '242', '4'),
  (5, 6 , 'Old Enough To Rock and Roll', '353', '5');