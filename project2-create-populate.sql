-- Sophia Chen and Jack Walton
-- Sophia.s.chen@vanderbilt.edu and jack.s.walton@vanderbilt.edu
-- Project 2 Part 2

-- Creates database
DROP DATABASE IF EXISTS parkingviolations;
CREATE DATABASE parkingviolations;
USE parkingviolations;

-- Create mega table
DROP TABLE IF EXISTS ParkingViolationsMegaTable;
CREATE TABLE IF NOT EXISTS ParkingViolationsMegaTable(summons_number BIGINT,
													  plate_id VARCHAR(20),
                                                      registration_state CHAR(2),
                                                      plate_type CHAR(3),
                                                      issue_date CHAR(10),
                                                      violation_code TINYINT,
                                                      vehicle_body_type VARCHAR(4),
                                                      vehicle_make VARCHAR(10),
                                                      issuing_agency CHAR(1),
                                                      street_code1 INT,
                                                      street_code2 INT,
                                                      street_code3 INT,
                                                      vehicle_expiration_date VARCHAR(10),
                                                      violation_location VARCHAR(5),
                                                      violation_precinct SMALLINT,
                                                      issuer_precinct SMALLINT,
                                                      issuer_code BIGINT,
                                                      issuer_command VARCHAR(10),
                                                      issuer_squad VARCHAR(4),
                                                      violation_time CHAR(5),
                                                      time_first_observed CHAR(5),
                                                      violation_county VARCHAR(2),
                                                      violation_front_opposite VARCHAR(2),
                                                      house_number VARCHAR(15),
                                                      street_name VARCHAR(30),
                                                      intersecting_street VARCHAR(20),
                                                      date_first_observed VARCHAR(10),
                                                      law_section INT,
                                                      subdivision VARCHAR(2),
                                                      violation_legal_code CHAR(1),
                                                      days_parking_in_effect VARCHAR(7),
                                                      from_hours_in_effect VARCHAR(5),
                                                      to_hours_in_effect VARCHAR(5),
                                                      vehicle_color VARCHAR(15),
                                                      unregistered_vehicle VARCHAR(4),
                                                      vehicle_year VARCHAR(4),
                                                      meter_number VARCHAR(8),
                                                      feet_from_curb VARCHAR(4),
                                                      violation_post_code VARCHAR(6),
                                                      violation_description MEDIUMTEXT,
                                                      PRIMARY KEY (summons_number));


-- C://wamp64/www/SadParkingViolations/jack-project2/Parking_Violations_Issued_-_Fiscal_Year_2017.csv
-- '/Applications/MAMP/htdocs/Project2/Parking_Violations_Issued_-_Fiscal_Year_2017.csv' 

-- Loads the data
LOAD DATA LOCAL INFILE 'C://wamp64/www/SadParkingViolations/jack-project2/Parking_Violations_Issued_-_Fiscal_Year_2017.csv' 
INTO TABLE ParkingViolationsMegaTable
FIELDS TERMINATED BY ',' 
OPTIONALLY ENCLOSED BY '"'
ESCAPED BY "\\"
LINES TERMINATED BY '\n'
IGNORE 1 ROWS;



-- violation
DROP TABLE IF EXISTS violation;
CREATE TABLE violation (
	summons_number BIGINT,
	violation_code TINYINT,
	violation_location VARCHAR(5),
	violation_precinct SMALLINT,
	violation_time CHAR(5),
	violation_county VARCHAR(2),
	violation_front_opposite VARCHAR(2),
	violation_legal_code CHAR(1),
	time_first_observed CHAR(5),
	date_first_observed VARCHAR(10),
	days_parking_in_effect VARCHAR(7),
	from_hours_in_effect VARCHAR(5),
	to_hours_in_effect VARCHAR(5),
	violation_post_code VARCHAR(6),
	violation_description MEDIUMTEXT,
    PRIMARY KEY (summons_number),
    CONSTRAINT unq_sn5 UNIQUE(summons_number)
) ENGINE=INNODB;

-- registration table
DROP TABLE IF EXISTS registration;
CREATE TABLE registration (
	summons_number BIGINT,
	plate_id VARCHAR(20),
	registration_state CHAR(2),
    issue_date CHAR(10),
    plate_type CHAR(3),
    PRIMARY KEY (summons_number),
    CONSTRAINT unq_sn1 UNIQUE(summons_number), 
    CONSTRAINT fk_sn1 FOREIGN KEY (summons_number)
			REFERENCES violation(summons_number)
			ON DELETE CASCADE
            ON UPDATE CASCADE
) ENGINE=INNODB;

-- vehicle
DROP TABLE IF EXISTS vehicle;
CREATE TABLE vehicle (
	summons_number BIGINT,
	vehicle_body_type VARCHAR(4),
    vehicle_make VARCHAR(10),
    vehicle_expiration_date VARCHAR(10),
	vehicle_color VARCHAR(15),
	unregistered_vehicle VARCHAR(4),
	vehicle_year VARCHAR(4),
    PRIMARY KEY (summons_number),
    CONSTRAINT unq_sn2 UNIQUE(summons_number), 
    CONSTRAINT fk_sn2 FOREIGN KEY (summons_number)
			REFERENCES violation(summons_number)
			ON DELETE CASCADE
            ON UPDATE CASCADE
) ENGINE=INNODB;

-- location
DROP TABLE IF EXISTS location;
CREATE TABLE location (
	summons_number BIGINT,
	street_code1 INT, 
	street_code2 INT,
	street_code3 INT,
	house_number VARCHAR(15),
	street_name VARCHAR(30),
	intersecting_street VARCHAR(20),
	subdivision VARCHAR(2),
	meter_number VARCHAR(8),
	feet_from_curb VARCHAR(4),
    PRIMARY KEY (summons_number),
    CONSTRAINT unq_sn3 UNIQUE(summons_number), 
    CONSTRAINT fk_sn3 FOREIGN KEY (summons_number)
			REFERENCES violation(summons_number)
			ON DELETE CASCADE
            ON UPDATE CASCADE
) ENGINE=INNODB;

-- INSERT INTO location(summons_number, street_code1, street_code2, street_code3, 
--                 house_number, street_name, intersecting_street, subdivision, meter_number, feet_from_curb)
--                 VALUES (1, 2, 3, 4, 5, 
--                 6, 7, 8, 9, 0);

-- issuer
DROP TABLE IF EXISTS issuer;
CREATE TABLE issuer (
	summons_number BIGINT,
	issuer_code VARCHAR(7),
	issuing_agency CHAR(1),
	issuer_precinct SMALLINT,
	issuer_command VARCHAR(10),
	issuer_squad VARCHAR(4),
    PRIMARY KEY (summons_number),
    CONSTRAINT unq_sn4 UNIQUE(summons_number), 
    CONSTRAINT fk_sn4 FOREIGN KEY (summons_number)
			REFERENCES violation(summons_number)
			ON DELETE CASCADE
            ON UPDATE CASCADE
) ENGINE=INNODB;

-- populate the tables. 
INSERT INTO violation
SELECT DISTINCT summons_number,
	violation_code,
	violation_location,
	violation_precinct,
	violation_time,
	violation_county,
	violation_front_opposite,
	violation_legal_code,
	time_first_observed,
	date_first_observed,
	days_parking_in_effect,
	from_hours_in_effect,
	to_hours_in_effect,
	violation_post_code,
	violation_description
FROM ParkingViolationsMegaTable;

INSERT INTO registration
SELECT DISTINCT summons_number,
	plate_id,
	registration_state,
    issue_date,
    plate_type
FROM ParkingViolationsMegaTable;

INSERT INTO vehicle
SELECT DISTINCT summons_number,
	vehicle_body_type,
    vehicle_make,
    vehicle_expiration_date,
	vehicle_color,
	unregistered_vehicle,
	vehicle_year
FROM ParkingViolationsMegaTable;

INSERT INTO location 
SELECT DISTINCT summons_number,
	street_code1, 
	street_code2,
	street_code3,
	house_number,
	street_name,
	intersecting_street,
	subdivision,
	meter_number,
	feet_from_curb
FROM ParkingViolationsMegaTable;

INSERT INTO issuer
SELECT DISTINCT summons_number,
	issuer_code,
	issuing_agency,
	issuer_precinct,
	issuer_command,
	issuer_squad
FROM ParkingViolationsMegaTable;

-- Check the counts of each table
-- SELECT COUNT(*) FROM ParkingViolationsMegaTable;
-- SELECT COUNT(*) FROM registration;
-- SELECT COUNT(*) FROM vehicle;
-- SELECT COUNT(*) FROM issuer;
-- SELECT COUNT(*) FROM violation;
-- SELECT COUNT(*) FROM location;

-- SELECT * FROM violation
-- ORDER BY summons_number;

-- make sure plate_id is populated
-- SELECT *, COUNT(*)
-- FROM ParkingViolationsMegaTable
-- WHERE plate_id > 'B'
-- ORDER BY plate_id 
-- LIMIT 20;

-- check to make sure that violation_post_code is populated
-- SELECT violation_post_code, COUNT(*) FROM violation
-- WHERE violation_post_code = ''
-- GROUP BY violation_post_code
-- ORDER BY violation_post_code ASC;

-- check for non-numeric characters in summons_number
-- SELECT summons_number
-- FROM violation
-- WHERE summons_number REGEXP '^[^0-9]+$';

-- test query to get interesting violation_descriptions (takes too long to run)
-- SELECT * FROM megaView WHERE LENGTH(violation_description)>1 GROUP BY violation_description LIMIT 50;
