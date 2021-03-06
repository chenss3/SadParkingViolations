-- Sophia Chen and Jack Walton
-- Sophia.s.chen@vanderbilt.edu and jack.s.walton@vanderbilt.edu
-- Project 2

DROP PROCEDURE IF EXISTS insert_incident;

DELIMITER // 

CREATE PROCEDURE insert_incident(
	IN summons_number BIGINT,
	IN plate_id VARCHAR(20),
	IN registration_state CHAR(2),
	IN plate_type CHAR(3),
	IN issue_date CHAR(10),
	IN violation_code INT,
	IN vehicle_body_type VARCHAR(4),
	IN vehicle_make VARCHAR(10),
	IN issuing_agency CHAR(1),
	IN street_code1 INT,
	IN street_code2 INT,
	IN street_code3 INT,
	IN vehicle_expiration_date VARCHAR(10),
	IN violation_location VARCHAR(5),
	IN violation_precinct SMALLINT,
	IN issuer_precinct SMALLINT,
	IN issuer_code VARCHAR(7),
	IN issuer_command VARCHAR(10),
	IN issuer_squad VARCHAR(4),
	IN violation_time CHAR(5),
	IN time_first_observed CHAR(5),
	IN violation_county VARCHAR(2),
	IN violation_front_opposite VARCHAR(2),
	IN house_number VARCHAR(15),
	IN street_name VARCHAR(30),
	IN intersecting_street VARCHAR(20),
	IN date_first_observed VARCHAR(10),
	IN subdivision VARCHAR(2),
	IN violation_legal_code CHAR(1),
	IN days_parking_in_effect VARCHAR(7),
	IN from_hours_in_effect VARCHAR(5),
	IN to_hours_in_effect VARCHAR(5),
	IN vehicle_color VARCHAR(15),
	IN unregistered_vehicle VARCHAR(4),
	IN vehicle_year VARCHAR(4),
	IN meter_number VARCHAR(8),
	IN feet_from_curb VARCHAR(4),
	IN violation_post_code VARCHAR(6),
	IN violation_description MEDIUMTEXT
)

BEGIN 

	INSERT INTO violation
	VALUES(summons_number,
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
	violation_description);
    
	INSERT INTO registration
	VALUES(summons_number,
    plate_id,
	registration_state,
    issue_date,
    plate_type);
    
    INSERT INTO vehicle
	VALUES(summons_number,
    vehicle_body_type,
    vehicle_make,
    vehicle_expiration_date,
	vehicle_color,
	unregistered_vehicle,
	vehicle_year);
    
    INSERT INTO location 
	VALUES(summons_number,
    street_code1, 
	street_code2,
	street_code3,
	house_number,
	street_name,
	intersecting_street,
	subdivision,
	meter_number,
	feet_from_curb);
    
    INSERT INTO issuer
	VALUES(summons_number,
    issuer_code,
	issuing_agency,
	issuer_precinct,
	issuer_command,
	issuer_squad);
    
END // 

DELIMITER ;


-- TEST THE insert_incident STORED PROCEDURE

-- call insert_incident(
-- 	'1010011',
-- 	'zzzyyyzzz',
-- 	'TN',
-- 	'PAS',
-- 	'7/20/20',
-- 	5,
-- 	'TEST',
-- 	'TEST',
-- 	'V',
-- 	'0',
-- 	'0',
-- 	'0',
-- 	NULL,
-- 	105,
-- 	0,
-- 	20,
-- 	0,
-- 	'T101',
-- 	'J',
-- 	'0144A',
-- 	NULL,
-- 	'BX',
-- 	'O',
-- 	'350',
-- 	"Elmer's Way",
-- 	"Clifford's Way",
-- 	'0',
-- 	'D',
-- 	'T',
-- 	'Y',
-- 	'0700P',
-- 	'0700P',
-- 	'GY',
-- 	NULL,
-- 	'2001',
-- 	"12",
-- 	'0',
-- 	'4',
-- 	'FIRE HYDRANT VIOLATION'
-- );