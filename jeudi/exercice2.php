<?php

require("header.php");
require("outils.php");

// VARIABLES
$recup = $_GET["multi"];
$a = 1;

?>

<form action="" method="get">
   <input type="text" name="multi">
   <input type="submit" value="Valider">
</form>

<?php

// RESULTAT

echo "<table>";
echo tableMulti($recup, $a);
echo "</table>";


?>

