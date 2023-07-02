<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use app\forms\AnimalSearchForm;

class AnimalListCtrl
{

    private $records;
    public function action_animalList()
    {


        try {
            $this->records = App::getDB()->select("category", "*");
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }


        App::getSmarty()->assign('category', $this->records);
        App::getSmarty()->display('AnimalList.tpl');
    }

}