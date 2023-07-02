<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use app\forms\CaretakerSearchForm;

class CaretakerListCtrl
{

    private $form;
    private $records;

    public function __construct()
    {
        $this->form = new CaretakerSearchForm();
    }

    public function validate()
    {
        $this->form->caretaker_surname = ParamUtils::getFromRequest('sf_caretaker_surname');

        return !App::getMessages()->isError();
    }

    public function action_caretakerList()
    {
        $this->validate();

        $search_params = [];
        if (isset($this->form->caretaker_surname) && strlen($this->form->caretaker_surname) > 0) {
            $search_params['caretaker_surname[~]'] = $this->form->caretaker_surname . '%';
        }

        $num_params = sizeof($search_params);
        if ($num_params > 1) {
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }
        $where["ORDER"] = "caretaker_surname";

        try {
            $this->records = App::getDB()->select("caretaker", [
                "caretaker_id",
                "caretaker_name",
                "caretaker_surname",
                "join_date",
            ], $where);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        App::getSmarty()->assign('searchForm', $this->form);
        App::getSmarty()->assign('caretaker', $this->records);
        App::getSmarty()->display('CaretakerView.tpl');
    }

}