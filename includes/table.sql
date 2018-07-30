CREATE TABLE `school`.`contacts` ( `id` INT(12) NOT NULL AUTO_INCREMENT , `first_name` VARCHAR(50) NOT NULL , `last_name` VARCHAR(50) NOT NULL , `cell_no` VARCHAR(50) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;


$sql = "INSERT INTO `contacts` (`id`, `first_name`, `last_name`, `cell_no`) VALUES (NULL, \'abc\', \'bcd\', \'9852\'), (NULL, \'gorg\', \'desai\', \'9865\')";


INSERT INTO `contacts` (`id`, `first_name`, `last_name`, `cell_no`) VALUES (NULL, 'abc', 'bcd', '9852'), (NULL, 'gorg', 'desai', '9865')
INSERT INTO `contacts` (`id`, `first_name`, `last_name`, `cell_no`) VALUES (NULL, 'deb', 'ghot', '98522'), (NULL, 'derf', 'ssd', '3582');
