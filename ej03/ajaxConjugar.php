<?php

include ('../ej01/util.php');
$verbo=isset ( $_REQUEST ['verbo'] ) ? $_REQUEST ['verbo'] : null;
echo conjugar($verbo);

?>