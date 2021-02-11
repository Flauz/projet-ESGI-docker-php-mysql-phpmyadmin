CREATE DATABASE IF NOT EXISTS testdatabase;
USE testdatabase;

CREATE TABLE `Personne` (
    `id` int(11) NOT NULL,
    `prenom` varchar(20) NOT NULL,
    `nom` varchar(20) NOT NULL);
INSERT INTO
  `Personne` (`id`, `prenom`, `nom`)
VALUES
  (1, 'Adama', 'GASSAMA'),
  (2, 'Florian', 'GUILLOT'),
  (3, 'Sylvain', 'COUTROT'),
  (4, 'Adama', 'GASSAMA'),
  (5, 'Florian', 'GUILLOT');