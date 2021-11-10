/* Requête permettant de sélectionner l’ensemble des informations des étudiants qui ont plus de 18 ans. */

SELECT * FROM `etudiants` WHERE `naissance` > CURRENT_DATE - INTERVAL '18' YEAR;