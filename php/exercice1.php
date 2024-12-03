<?php
    // Question1 :
    echo "<br>";
$etudiant = array( 'nom' => 'Dupont', 'prénom' => 'Jean', 'matricule' => '123456');
    echo "Nom: " . $etudiant['nom'] . "<br>";
    echo "Prénom: " . $etudiant['prénom'] . "<br>";
    echo "Matricule: " . $etudiant['matricule'] . "<br>";

    // Question2 :
    echo "<br>";
$etudiant['note'] = 15; 
    $etudiant['note'] = 18; 
    echo "Note: " . $etudiant['note'] . "<br>";

    // Question3 :
    echo "<br>";
$produits = array( 'P1' => '20', 'P2' => '50', 'P3' => '70' );
foreach ($produits as $nom => $prix) {
        echo $nom . " - " . $prix . "$<br>";
    }

    // Question4 :
    echo "<br>";
$scores = array( 'Etud1' => 15, 'Etud2' => 18, 'Etud3' => 12, 'Etud4' => 17,  'Etud5' => 14 );
    $moyenne = array_sum($scores) / count($scores);
    echo "Moyenne des scores: " . $moyenne . "<br>";

    // Question5 :
    echo "<br>";
$pays = array( 'Maroc' => 36000000, 'Zanzibar' => 1890000, 'France' => 67000000, 'Espagne' => 47000000 );
    arsort($pays);

foreach ($pays as $pays => $population) {
    echo $pays . " : " . $population . " habitants";
}

  

    // Question 6 et 7 :
    echo "<br>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $age = $_POST['age'];
    settype($age, "integer");
    if (gettype($age) == "integer" && $age>0) {
        echo "Bienvenue, " . $nom . ", vous avez " . $age . " ans !";
        
    } else {
        echo "L'âge doit être un entier supérieur à 0.";
           }
}

    // Question8 :
    echo "<br>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $couleur = $_POST['Couleur'];
    echo "Votre couleur préférée est : " . $couleur;
}

    // Question9 :
    echo "<br>";
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $nombre1 = $_GET['Nombre1'];
    $nombre2 = $_GET['Nombre2'];
    $somme = $nombre1 + $nombre2;
    echo "La somme des deux nombres est : " . $somme;
}
    // Question10 :
    echo "<br>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $compte = $_POST['compte'];
    if ($compte == 'Administrateur') {
        echo "Bienvenue, administrateur !";
    } else {
        echo "Bienvenue, utilisateur simple !";
    }
}

