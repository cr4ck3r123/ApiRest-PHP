<?php

namespace Util;

class RotasUtil {

    public static function getRotas() {

        $urls = self::getUrl();
        $request = [];
        $request['rota'] = strtoupper($urls[1]);
        $request['recurso'] = isset($urls[2]) ? $urls[2] : null;
        $request['id'] = isset($urls[3]) ? $urls[3] : null;
        $request['metodo'] = $_SERVER['REQUEST_METHOD'];
       // var_dump($request);
        return $request;
    }

    public static function getUrl() {
        $url = str_replace('/' . DIR_PROJETO, '', $_SERVER['REQUEST_URI']);
        return explode('/', trim($url, '/'));
    }

}
