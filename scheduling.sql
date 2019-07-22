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

CREATE TABLE `lecturers` (
  `lecturer_id` int(11) NOT NULL,
  `nip` varchar(50) DEFAULT NULL,
  `name` varchar(10) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `total_hour` varchar(20) DEFAULT NULL,
  `total_sks` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `lecturers` (`lecturer_id`, `nip`, `name`, `sex`, `total_hour`, `total_sks`) VALUES
(1, '12344556', 'nama', 'Laki-Laki', '5', '12');