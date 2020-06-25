<?php



function hx($text,$niveau) {
   $hon = "<h" . $niveau . ">";
   $hoff = "</h" . $niveau . ">";
   return $hon . $text . $hoff;
}

function formInput($type = "text", $name = "name", $value = "") {
   return "<input type=\"" . $type . "\" name=\"" . $name . "\" value=\"" . $value . "\">";
}



$secondes = $_GET['secondes'];

function ajoutSecondes($secondes){
   $t = time() + $secondes;
   return date('H:i:s', $t);
}




?>