<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use app\forms\AnimalSearchForm;

class AnimalTabCtrl {

    private $form; 
    private $records; 

    public function __construct() {

        $this->form = new AnimalSearchForm();
    }

    public function validate() {
        $this->form->animal_name = ParamUtils::getFromRequest('sf_animal_name');

        return !App::getMessages()->isError();
    }

    public function action_animalTab() {
        $this->validate();

        $search_params = []; 
        if (isset($this->form->animal_name) && strlen($this->form->animal_name) > 0) {
            $search_params['animal_name[~]'] = $this->form->animal_name . '%'; 
        }

        $num_params = sizeof($search_params);
        if ($num_params > 1) {
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }
        $where ["ORDER"] = "animal_name";

        try {
            $this->records = App::getDB()->select("animal", [
                "animal_id",
                "animal_name",
                "join_date",
                    ], $where);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        // 4. wygeneruj widok
        App::getSmarty()->assign('searchForm', $this->form); 
        App::getSmarty()->assign('animal', $this->records);  
        App::getSmarty()->display('AnimalTab.tpl');
    }

}
