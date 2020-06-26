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



?>