CREATE DATABASE `iNotes`;
use `iNotes`;

CREATE TABLE `note_types`(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name varchar (100),
    description varchar (200)
)

-- INSERT INTO `note_types`(`name`,`description`) VALUES
-- ("từ vựng","từ vựng tiếng Nhật mới học"),
-- ("lý thuyết","nội dung lý thuyết cần nhớ"),
-- ("mẹo vặt","giúp cuộc sống dễ thở hơn"),
-- ("done","những việc đã làm trong ngày")

CREATE TABLE `notes`(
    id INT PRIMARY KEY AUTO_INCREMENT,
    title varchar (100),
    content varchar (500),
    type_id INT (11)
)

-- INSERT INTO `notes`(`title`,`content`) VALUES
-- ("học sinh","tiếng Nhật"),
-- ("sinh viên","Hằng ngày"),
-- ("người đi làm","Cuộc sống")

ALTER TABLE `notes`
ADD FOREIGN KEY (type_id) REFERENCES note_types(id)

SELECT note_types.*,notes.* FROM `note_types`
INNER JOIN `notes` ON note_types.id = notes.type_id
