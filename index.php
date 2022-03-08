
<?php

function ucgen($u)
{

   $degisken = "";
   for ($i = 0; $i < $u; $i++) {
      $degisken = $degisken . "0";
      echo $degisken . "<br>";
   }
}
ucgen(5);

?>
