<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use app\forms\AnimalSearchForm;

class AnimalListCtrl
{


    private $records; //rekordy pobrane z bazy danych


    public function action_animalList()
    {


        try {
            $this->records = App::getDB()->select("category", "*");
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
        // 4. wygeneruj widok

        App::getSmarty()->assign('category', $this->records); // lista rekordów z bazy danych
        App::getSmarty()->display('AnimalList.tpl');
    }

}