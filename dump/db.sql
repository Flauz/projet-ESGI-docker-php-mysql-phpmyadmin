
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE DATABASE IF NOT EXISTS testdatabase;
USE testdatabase;

  CREATE TABLE IF NOT EXISTS `Users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

INSERT INTO
  `Users` (`prenom`, `nom`, `password`)
VALUES
  ('Adama', 'GASSAMA', 'vide'),
  ('Florian', 'GUILLOT', 'vide'),
  ('Sylvain', 'COUTROT', 'vide');

