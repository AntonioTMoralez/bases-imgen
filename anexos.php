<?php
header("Content-disposition: attachment; filename=anexosbasedatos.zip");
header("Content-type: application/zip");
readfile("Descargas/anexosbasedatos.zip");
?>