  SELECT `nom`, `prenom`, `naissance`
  FROM etudiants WHERE 
  YEAR(naissance) 
  BETWEEN 1998 AND 2018;