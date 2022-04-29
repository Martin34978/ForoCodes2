<?php
    //Los errores no se reportaran por el navegador, se usará el archivo
    //php-error.log para llevar un registro de los errores y para volcar 
    //valores de variables,etc
    error_reporting(E_ALL);
    ini_set('ignore_repeated_errors', TRUE);
    ini_set('display_errors', FALSE);
    ini_set('log_errors', TRUE);
    ini_set('error_log','php-error.log');
    
?>