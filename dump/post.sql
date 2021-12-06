CREATE TABLE `projet`.`post`
(
    `id`             INT(24)      NOT NULL AUTO_INCREMENT,
    `title`          VARCHAR(255) NOT NULL,
    `content`        TEXT         NOT NULL,
    `author`         INT(24)      NOT NULL,
    `date_published` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;