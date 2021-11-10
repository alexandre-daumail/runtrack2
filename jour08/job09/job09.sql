/* Ecrivez dans le fichier “job08.sql” une requête permettant de compter le 
nombre d’étudiants. */

SELECT * FROM `etudiants` WHERE `naissance` < CURRENT_DATE - INTERVAL '18' YEAR;