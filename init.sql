// event table creation
CREATE TABLE `csiwebsite`.`event_master` ( `id` INT(6) NOT NULL AUTO_INCREMENT , `name` VARCHAR(70) NOT NULL , `type` VARCHAR(20) NOT NULL , `date` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP , `description` VARCHAR(700) NOT NULL , `photo_link` VARCHAR(500) NULL DEFAULT NULL , `blog_link` VARCHAR(500) NULL DEFAULT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
