SELECT * FROM thearticle;

SELECT * FROM thearticle_has_thesection;

SELECT * FROM theright;

SELECT * FROM thesection;

SELECT * FROM theuser;

SELECT thearticle.* ,  theuser.theuserName , theuser.theuserLogin FROM thearticle
INNER JOIN theuser
ON thearticle.theuser_idtheuser = theuser.idtheuser;

SELECT thearticle.* ,  thesection.idthesection , thesection.thesectionTitle 
FROM thearticle
	LEFT JOIN thearticle_has_thesection
ON thearticle_idthearticle = thearticle_has_thesection.thearticle_idthearticle
	LEFT JOIN thesection
    ON thearticle_has_thesection.thesection_idthesection = thesection_idthesection
    ; 
    
    SELECT thearticle.*, GROUP_CONCAT(thesection.idthesection) AS idthesection, 
						GROUP_CONCAT(thesection.thesectionTitle SEPARATOR '|||') AS thesectionTitle 
FROM thearticle
	LEFT JOIN thearticle_has_thesection
ON thearticle_idthearticle = thearticle_has_thesection.thearticle_idthearticle
	LEFT JOIN thesection
    ON thearticle_has_thesection.thesection_idthesection = thesection_idthesection
GROUP BY thearticle_idthearticle ; 

    SELECT thearticle.*, 
		theuser.theuserName, theuser.theuserLogin,
						GROUP_CONCAT(thesection.idthesection) AS idthesection, 
						GROUP_CONCAT(thesection.thesectionTitle SEPARATOR '|||') AS thesectionTitle 
FROM thearticle
INNER JOIN theuser
ON thearticle.theuser_idtheuser = theuser.idtheuser
	LEFT JOIN thearticle_has_thesection
ON thearticle_idthearticle = thearticle_has_thesection.thearticle_idthearticle
	LEFT JOIN thesection
    ON thearticle_has_thesection.thesection_idthesection = thesection_idthesection
    
GROUP BY thearticle_idthearticle ; 
