-- Sophia Chen and Jack Walton
-- Sophia.s.chen@vanderbilt.edu and jack.s.walton@vanderbilt.edu
-- Project 2


-- view for the mega table (want to make the original mega table obsolete because we are not updating it interactively)
DROP VIEW IF EXISTS megaView;
CREATE VIEW megaView
AS 
SELECT *
FROM violation 
	LEFT JOIN registration USING (summons_number)
    LEFT JOIN vehicle USING (summons_number)
    LEFT JOIN location USING (summons_number)
    LEFT JOIN issuer USING (summons_number);
-- SELECT * FROM megaView;

-- Create a View that contiains the pertinent information for an officer to write a ticket
DROP VIEW IF EXISTS ticketView;
CREATE VIEW ticketView
AS 
SELECT summons_number, violation_time, plate_id, registration_state, vehicle_body_type, vehicle_make, vehicle_color, street_name, issuer_code
FROM megaView;
-- SELECT * FROM ticketView;

-- Create a View that contains the information relating to the location and local paking law of incidents 
-- (could be useful for identifying areas that need better signage)
DROP VIEW IF EXISTS parkingInfoView;
CREATE VIEW parkingInfoView
AS 
SELECT DISTINCT time_first_observed, 
		date_first_observed, 
        days_parking_in_effect, 
        from_hours_in_effect, 
        to_hours_in_effect, 
        street_code1, 
        street_code2, 
        street_code3, 
        house_number, 
        street_name, 
        intersecting_street, 
        subdivision, 
        meter_number, 
        feet_from_curb
FROM megaView;

