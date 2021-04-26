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

SELECT * FROM megaView;

