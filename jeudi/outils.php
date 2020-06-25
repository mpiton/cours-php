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


// FONCTION TABLE MULTIPLICATION
function tableMulti($recup) {
   $a = 0;
   while ($a < 10) {
      $a++;
      $resultat = $recup * $a;
      echo "<tr><td>" . $recup . "</td> <td>" . "x" . "</td> <td>" . $a . "</td> <td>" . "=" . "</td> <td>" . $resultat . "</td></tr>"; 
   }
}


?>