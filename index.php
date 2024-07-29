
<?php

include './bootstrap.php';


try {
    
    $RequestValidator = new \Validator\RequestValidator(\Util\RotasUtil::getRotas());
    $retorno = $RequestValidator->processarRequest();
    
} catch (Exception $ex) {
    
}

var_dump($retorno);
?>
    
