CREATE DATABASE IF NOT EXISTS myDb;
USE myDb;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
CREATE TABLE `users` (
    `id` int(11) NOT NULL,
    `firstname` varchar(20) NOT NULL,
    `lastname` VARCHAR(20) NOT NULL
);
INSERT INTO `users` (`id`, `firstname`, `lastname`)
VALUES (1, 'Adama', 'GASSAMA'),
    (2, 'Florian', 'GUILLOT'),
    (3, 'Sylvain', 'COUTROT');