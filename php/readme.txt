/*************************************/
/*  Étape 2 : Analyse des problèmes  */
/*************************************/

// Où sont stockées les données ?
// Les données sont stockées dans des variables ($toolNames, $pricesPerDay, $available)

// Quelles parties du code sont dupliquées ?
// Le test pour voir si l'outil existe, le test de validité de l'index.

// Qu’est-ce qui rend le code difficile à maintenir ?
// Une grande partie du code est en dur, pas de séparation entre outils et locations et toutes les fonctions sont mélangées.

// Quels sont les concepts métier évidents non modélisés ?
// L'ajout et la suppression d'outil, le changement de prix, possibilité de s'identifier, possibilité de rechercher un outil et vérification de disponibilités.

