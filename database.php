<?php   

//how to create a table
//For contact detail


CREATE TABLE `contact_detail` (
	`id` INT(100) NOT NULL AUTO_INCREMENT,
	`email` VARCHAR(255) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`subject` VARCHAR(80) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`message` VARCHAR(500) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	INDEX `id` (`id`) USING BTREE
)
COMMENT='Webpage Part: Contact me'
COLLATE='utf8mb4_general_ci'
ENGINE=InnoDB
;


?>