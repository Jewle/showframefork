<?php

namespace renegade;

class Db{

    use TSingletone;
//mysql:host=localhost;dbname=yii2.loc;charset=utf8
    protected function __construct(){
        $db = require_once CONF . '/config_db.php';
        $dsn = "mysql:host=".$db['host'].';'."dbname=".$db['dbname'].";charset=utf8";
        class_alias('\RedBeanPHP\R','\R');
        \R::setup($dsn, $db['user'], $db['pass']);
        if( !\R::testConnection() ){
            throw new \Exception("Нет соединения с БД", 500);
        }
        \R::freeze(true);
        if(DEBUG){
            \R::debug(true, 1);
        }
    }

}