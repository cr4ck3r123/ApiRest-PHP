<?php

namespace Validator;

class RequestValidator 
{
    
    private $request;
    
    const GET= 'GET';
    const DELETE= 'DELETE';
    
    public function __construct($request) {
        $this->request = $request;
    }

    public function processarRequest() {
       $retorno = utf8_encode(ConstantesGenericasUtil::MSG_ERRO_TIPO_ROTA);
       if(in_array($this->request['metodo'], ConstantesGenericasUtil::TIPO_REQUEST, true)){
           $retorno = $this->direcionarRequest();
       }
       var_dump($retorno);exit;
       return $retorno;
    }
    
    private function direcionarRequest() {
        if($this->request['metodo'] !== self::GET && $this->request['metodo'] !== self::DELETE){
            
        }
    }
}
