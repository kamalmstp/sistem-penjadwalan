CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` longtext,
  `level` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `admin` (`admin_id`, `name`, `username`, `password`, `level`) VALUES
(1, 'Administrator', 'admin', 'f865b53623b121fd34ee5426c792e5c33af8c227', 'admin');

ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

CREATE TABLE `scheduling`.`running_year` ( `running_year_id` INT(5) NOT NULL AUTO_INCREMENT , `name` VARCHAR(100) NULL , `description` VARCHAR(100) NULL , PRIMARY KEY (`running_year_id`)) ENGINE = InnoDB;

CREATE TABLE `scheduling`.`room` (
  `room_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NULL,
  `capacity` int(11) NULL
, PRIMARY KEY (`room_id`)) ENGINE = InnoDB;