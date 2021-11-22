drop database if exists class_quiz_db;
SHOW DATABASES;
CREATE DATABASE class_quiz_db;

CREATE TABLE `quiz_table` (
  `my_id` int(11) PRIMARY NOT NULL AUTO_INCREMENT,
  `user_id` INT NOT NULL,
  `user_choices` VARCHAR(50) NOT NULL
) 

INSERT INTO `quiz_table` (`user_id`, `user_choices`)
VALUES  ('Kwame', 'Football'),
		('Ama', 'Banku'),
		('William','Rice')
		('Grace', 'Waakye'),
		('Doris','Driving');
