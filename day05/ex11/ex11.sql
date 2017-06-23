SELECT UPPER(p.nom) AS 'NOM', p.prenom, abo.prix
FROM fiche_personne AS p
LEFT JOIN membre AS m ON p.id_perso = m.id_fiche_perso
LEFT JOIN abonnement AS abo ON m.id_abo = abo.id_abo
WHERE abo.prix > 42
ORDER BY p.nom ASC, p.prenom ASC;