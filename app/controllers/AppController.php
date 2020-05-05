<?php

namespace app\controllers;

use app\models\AppModel;
use renegade\base\Controller;

class AppController extends Controller{

    public function __construct($route,$params){
        parent::__construct($route,$params);
        new AppModel();
    }

}