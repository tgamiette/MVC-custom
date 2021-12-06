CREATE TABLE `projet`.`comment`
(
    `id`             INT(24)      NOT NULL AUTO_INCREMENT,
    `author_id`      INT(24)      NOT NULL,
    `content`        VARCHAR(255) NOT NULL,
    `date_published` VARCHAR(20)  NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

ALTER TABLE projet.comment
    ADD `post_id` INT NOT NULL AFTER `date_published`;