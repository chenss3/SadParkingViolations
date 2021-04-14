-- Sophia Chen and Jack Walton
-- Sophia.s.chen@vanderbilt.edu and jack.s.walton@vanderbilt.edu
-- Project 2 Part 2

-- Creates database
DROP DATABASE IF EXISTS parkingviolations;
CREATE DATABASE parkingviolations;
USE parkingviolations;

-- Create mega table
DROP TABLE IF EXISTS ParkingViolationsMegaTable;
CREATE TABLE IF NOT EXISTS ParkingViolationsMegaTable(summons_number VARCHAR(20),
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
                                                      issuer_code VARCHAR(7),
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



-- Loads the data
LOAD DATA LOCAL INFILE 'C:/Users/jackw/Desktop/Vanderbilt/Y3/Database/project2/Parking_Violations_Issued_-_Fiscal_Year_2017.csv' 
INTO TABLE ParkingViolationsMegaTable
FIELDS TERMINATED BY ',' 
OPTIONALLY ENCLOSED BY '"'
ESCAPED BY "\\"
LINES TERMINATED BY '\n'
IGNORE 1 ROWS;

SELECT *
FROM ParkingViolationsMegaTable
WHERE plate_id > 'B'
ORDER BY plate_id 
LIMIT 20;



-- registration table
DROP TABLE IF EXISTS registration;
CREATE TABLE registration (
	plate_id VARCHAR(20),
	registration_state CHAR(2),
    issue_date CHAR(10),
    plate_type CHAR(3)
) ENGINE=INNODB;

-- vehicle
DROP TABLE IF EXISTS vehicle;
CREATE TABLE vehicle (
	vehicle_body_type VARCHAR(4),
    vehicle_make VARCHAR(10),
    vehicle_expiration_date VARCHAR(10),
	vehicle_color VARCHAR(15),
	unregistered_vehicle VARCHAR(4),
	vehicle_year VARCHAR(4)
) ENGINE=INNODB;

-- location
DROP TABLE IF EXISTS location;
CREATE TABLE location (
	street_code1 INT, 
	street_code2 INT,
	street_code3 INT,
	house_number VARCHAR(15),
	street_name VARCHAR(30),
	intersecting_street VARCHAR(20),
	subdivision VARCHAR(2),
	meter_number VARCHAR(8),
	feet_from_curb VARCHAR(4)
) ENGINE=INNODB;

-- violation
DROP TABLE IF EXISTS violation;
CREATE TABLE violation (
	summons_number VARCHAR(20),
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
	violation_description MEDIUMTEXT
) ENGINE=INNODB;

-- issuer
DROP TABLE IF EXISTS issuer;
CREATE TABLE issuer (
	issuer_code VARCHAR(7),
	issuing_agency CHAR(1),
	issuer_precinct SMALLINT,
	issuer_command VARCHAR(10),
	issuer_squad VARCHAR(4)
) ENGINE=INNODB;






