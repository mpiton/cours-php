<?php




// Choix ordinateur
function choixOrdi() {
   $rand = rand(1,3);
   if ($rand == 1) {
     return "pierre";
   } elseif ($rand == 2) {
     return "feuille";
   } else {
      return "ciseaux";
   }
}

// FONCTION
function showResult($monChoix, $CompChoose) {
   if (($monChoix == "pierre" && $CompChoose == "ciseaux") || ($monChoix == "ciseaux" && $CompChoose == "feuille") || ($monChoix == "feuille" && $CompChoose == "pierre")) {
      echo "Vous avez gagné !";
   }
   elseif (($monChoix == "ciseaux" && $CompChoose == "pierre") || ($monChoix == "feuille" && $CompChoose == "ciseaux") || ($monChoix == "pierre" && $CompChoose == "feuille")) {
      echo "Vous avez perdu !";
   } else {
      echo "égalité !";
   }
}


// FONCTION TABLE MULTIPLICATION AVEC INPUT

function tableMulti($recup) {
   $a = 0;
   $retour = "<table border=2>";
   while ($a < 10) {
      $resultat = $recup * $a;
      $retour = $retour . "<tr><td>" . $recup . "</td>";
      $retour = $retour . "<td>" . $a . "</td>";
      $retour = $retour . "<td>" . $resultat . "</td>";
      $a++;
   }
   $retour = $retour . "</table>";
   return $retour;
}


function afficheTableauEnHtml($tableau) {
   $compteur = 0;
   echo "<table border=2> \n";
   echo "<thead><th>Index</th><th>Valeur</th></thead>";
   foreach ($tableau as $index => $case) {
      if (($compteur % 2) == 1) {
         $couleur = "#B0C4DE";
      }
      else {
         $couleur = "#708090";
      }
      $compteur++;
      echo "<tr style=\"background-color:" . $couleur . "\">" . "<td>" . $index . "</td><td>" . $case . "</td></tr>";
   }
   echo "</table> \n";
}




function uploadMonFichier($tableau) {
   echo '<pre>';
if (move_uploaded_file($tmp_name, $destinationfinale)) {
    echo "Le fichier est valide, et a été téléchargé avec succès. Voici plus d'informations :\n";
} else {
    echo "ça buuuugggggg ! \n";
}

echo 'Voici quelques informations de débogage :';
print_r($_FILES);

echo '</pre>';

}


?>