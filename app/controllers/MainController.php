<?php

namespace app\controllers;



class MainController extends AppController {

    public function indexAction(){
        $users = [['name'=>'Artem'],['name'=>"Kristina"],['name'=>"Borya"]];
        $this->setMeta('Главная страница', 'Описание...', 'Ключевики...');

        $this->layout = 'default';
        $this->set(compact( 'users'));
    }

}