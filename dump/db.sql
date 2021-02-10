CREATE DATABASE IF NOT EXISTS testdatabase;
USE testdatabase;

CREATE TABLE `Personne` (
    `id` int(11) NOT NULL,
    `nom` varchar(20) NOT NULL);
INSERT INTO
  `Personne` (`id`, `nom`)
VALUES
  (1, 'Adama'),
  (2, 'Florian'),
  (3, 'Sylvain');