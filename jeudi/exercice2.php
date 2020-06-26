<?php

require("header.php");
require("outils.php");

// VARIABLES
$recup = $_GET["multi"];
$a = 0;
$tableau = tableMulti($recup);

?>

<form action="" method="get">
   <input type="text" name="multi">
   <input type="submit" value="Valider">
</form>

<?php

echo $tableau;
echo "<br>";



while ($a < 10) {

 echo "<h1 class='content is-large'>Table de multiplication du chiffre" . ($a + 1)  .  "</h1>";
 echo tableMulti(1 + $a);
 $a++;
}





?>

