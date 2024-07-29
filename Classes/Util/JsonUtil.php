<?php

namespace Util;


class JsonUtil
{
    public static function tratarCorpoRequisicaoJson(){
        
        try {
            $postJson = json_decode(file_get_contents('php://input'), true);
        } catch (\JsonException $ex) {
            throw new InvalidArgumentException(\Validator\ConstantesGenericasUtil::MSG_ERR0_JSON_VAZIO);
        }
        if(is_array($postJson) & count($postJson) > 0){
            return $postJson;
        }
    }
}

