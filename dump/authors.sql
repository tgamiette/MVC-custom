
CREATE TABLE `projet`.`author`
(
    `id`       INT(24) NOT NULL AUTO_INCREMENT,
    `name`     VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `email`    VARCHAR(255) NOT NULL,
    isAdmin    INT(1) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

INSERT INTO `author` (`id`, `name`, `password`, `email`)
VALUES (NULL, 'jean BERTRAND', 'jean.bertrand', 'jean.bertrand@gmail.com'),
       (NULL, 'teddy GAMIETTE', 'teddy.gamiette', 'teddy.gamiette@gmail.com'),
       (NULL, 'lydia tamera', 'lydia.tamera', 'lydia.temara@gmail.com'),
       (NULL, 'hafsa Aliguidebouh ', 'hafsa.aliguidebouh', 'hafsa.aliguidebouh@gmail.com')