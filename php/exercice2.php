<?php
    // Question1 :
    
    $employes = array(
        'ep1' => array('nom' => 'Leila', 'poste' => 'Développeuse', 'salaire' => 4000), 
        'ep2' => array('nom' => 'Chaimaa', 'poste' => 'Designer', 'salaire' => 3800),
        'ep3' => array('nom' => 'Malak', 'poste' => 'Cheffe de projet', 'salaire' => 4500),
        'ep4' => array('nom' => 'Douaa', 'poste' => 'Analyste', 'salaire' => 3200),
        'ep5' => array('nom' => 'Zaina', 'poste' => 'Ingénieure', 'salaire' => 4400),
    );
    $salaireTot = 0;
    foreach ($employes as $employe)
     {
        $salaireTot += $employe['salaire']; 
     }
    $salaireMoy = $salaireTot / count($employes);
    echo "Le salaire moyen des employés est : " . $salaireMoy . "$<br>";

    // Question2 :


    if($_SERVER["REQUEST_METHOD"]= "POST"){
        $nom = $_POST['n'];
        
    
        foreach($employes as $key=>$val){
            if($val["nom"]==$nom){
                echo "<br>", $val["nom"], "=> ", $val["poste"], "=> ", $val["salaire"];
            }
        }
    }



    // Question3:
    $utilisateurs = array(
        'util1' => array('email' => 'util1@test.com', 'motdepasse' => 'abcdef'), 
        'util2' => array('email' => 'util2@test.com', 'motdepasse' => 'ghijkl'),
    );

    if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $email = $_POST['em'];
            $motdepasse = $_POST['m'];
            foreach($utilisateurs as $utilisateur)
            {
                if($utilisateur['email']==$email && $utilisateur['motdepasse']==$motdepasse)
                {
                    echo "connexion!";
                }
            }
        }

    // Question4 :
    {$produits = [
        ['nom' => 'Prod A', 'quantite' => 5, 'prix' => 200],
        ['nom' => 'Prod B', 'quantite' => 10, 'prix' => 80],
        ['nom' => 'Prod C', 'quantite' => 15, 'prix' => 130],
    ];
    $total = 0;
    foreach ($produits as $produit) 
    {
        $total += $produit['prix'] * $produit['prix']; 
        echo "<br>{$produit['nom']}: {$produit['quantite']} x {$produit['prix']} $ = " . ($produit['quantite'] * $produit['prix']) . " $<br>";
    }

    echo "Total: $total $<br>";}


    // Question5 :
    $commentaires = [];
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $commentaire = $_POST['Commentaire'];
    $commentaires[] = ['commentaire' => $commentaire, 'horodatage' => date('Y-m-d H:i:s')];
    }

    foreach ($commentaires as $comment) {
        echo "Commentaire: " . $comment['commentaire'] . "<br>";
        echo "Publié le: " . $comment['horodatage'] . "<br><br>";
    }

    // Question6 :
    $villes =  ['Tanger' => 12, 'Casablanca' => 15, 'Rabat' => 18, 'Agadir' => 20];
    
    $villeMaxT = 'Tanger';
    $t_max= $villes['Tanger'];
    foreach($villes as $k=>$v){
        if($v>$t_max){ $villeMaxT=$k; $t_max= $v;}
    }
    echo "La ville la plus chaude est: " . $villeMaxT . " avec " . $t_max . "°C";

    // Question7 :
    
    {if($_SERVER["REQUEST_METHOD"]== "POST"){
        if($_FILES["f"]){
        $f = $_FILES["f"];
        
        $fc= fopen($f['tmp_name'], "r");
        $t= fgetcsv($fc);
        $produits=[];
        while (($ligne = fgetcsv($fc)) !== FALSE){
            $produits[]= [ 
                'nom' =>$ligne[0],
                'prix'=> $ligne[1],
                'quantite'=> $ligne[2]
            ];
        }
        echo "<table border='1'>";

    echo "<tr><th>nom</th><th>prix</th><th>quantité</th></tr>";

    foreach($produits as $v) {
        echo "<tr>";
        echo "<td>", $v['nom'], "</td>";
        echo "<td>",$v['prix'], "</td>";
        echo "<td>",$v['quantite'], "</td>";
        echo "</tr>";
    }

    echo "</table>";
    fclose($fc);}
    else{echo "<br>Erreur";}
    }}
    // Question8 :

    {if($_SERVER["REQUEST_METHOD"]== "POST"){
        $produits = [
            'Prod A'=> ['quantite' => 5, 'prix' => 200],
             'Prod B'=> ['quantite' => 10, 'prix' => 80],
             'Prod C'=> ['quantite' => 15, 'prix' => 130],
        ];
    
        $produit=  $_POST['produit_check'];
    
        $total =0;
    
        echo "<br> produits selectionnes: <br>";
        echo "<ul>";
        foreach($produit as $v){
            echo "<li>", $v, "</li>";
        }
        echo "</ul>";
    
        foreach($produit as $v){
            $total += $produits[$v]['prix'];
        }
    
        echo "Total: ", $total;
    
    }}

    // Question9 :
    $etudiants = [
        'Adam' => ["maths" => 18,"francais" => 19, "sciences" => 20],
        'Douaa' => ["maths" => 17, "francais" => 18, "sciences" => 19],
    ];
    foreach ($etudiants as $nom => $notes)
    {
        $total = 0;
        $nbrMatieres = count($notes);
        foreach ($notes as $matiere => $note) {
            $total += $note;
        }
        $moyenne = $total / $nbrMatieres;
        echo "<br>Étudiant : $nom <br>";
        foreach ($notes as $matiere => $note) 
        {
            echo "$matiere : $note<br>";
        }
        echo "Moyenne : $moyenne<br>";
    }

    // Question10 :
    $utilisateurs = array(
        "util1" => "util1@test.com", 
        "util2" => "util2@test.com",
    );
                //Ajout
    if (isset($_POST['action']) && $_POST['action'] == 'ajouter')
    {
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $utilisateurs[$nom] = $email;
    }
    
                // Modif
    if (isset($_POST['action']) && $_POST['action'] == 'modifier')
    {
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        if (isset($utilisateurs[$nom])) {
            $utilisateurs[$nom] = $email;
        }
    }
    
                // Supprim
    if (isset($_POST['action']) && $_POST['action'] == 'supprimer')
    {
        $nom = $_POST['nom'];
        unset($utilisateurs[$nom]);
    }
                // affichage
    foreach ($utilisateurs as $nom => $email)
    {
        echo "$nom";
        echo "$email";
    }


?>