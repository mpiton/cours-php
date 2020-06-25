<?php 
require("outils.php");
require("header.php");

$monChoix = $_GET["choix"];
$CompChoose = choixOrdi();
?>

<div class="bloc-image">
   <div class="pierre">
      <a href='?choix=pierre' name="pierre"><img src="pierre.png" alt=""></a>
   </div>
   <div class="feuille">
   <a href="?choix=feuille" name="feuille"><img src="feuille.png" alt=""></a>
   </div>
   <div class="ciseaux">
   <a href="?choix=ciseaux" name="ciseaux"><img src="ciseaux.png" alt=""></a>
   </div>
</div>


<div class="box-choix"></div>
<article class="message is-dark">
  <div class="message-header">
  <h2 class="content is-large">Vous avez choisit: <?php echo $monChoix; ?></h2>
  </div>
</article>

<article class="message is-dark">
  <div class="message-header">
  <h2 class="content is-large">L'ordinateur a choisit: <?php echo $CompChoose ;?></h2>
  </div>
</article>
</div>


<article class="message is-success">
  <div class="message-header">
  <h2 class="content is-large">Résultat: <?php showResult($monChoix, $CompChoose); ?></h2>
  </div>
</article>