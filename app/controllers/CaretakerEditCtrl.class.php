<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\CaretakerEditForm;

class CaretakerEditCtrl
{

    private $form;

    public function __construct()
    {
        $this->form = new CaretakerEditForm();
    }

    public function validateSave()
    {
        $this->form->caretaker_id = ParamUtils::getFromPost('caretaker_id', true, 'Błędne wywołanie aplikacji');

        $v = new Validator();
        $this->form->caretaker_name = $v->validateFromPost("caretaker_name", [
            'required' => true,
            'required_message' => 'Imię jest wymagane',
            'validator_message' => 'Błędne wywołanie aplikacji'
        ]);
        $this->form->caretaker_surname = $v->validateFromPost("caretaker_surname", [
            'required' => true,
            'required_message' => 'nazwisko jest wymagane',
            'validator_message' => 'Błędne wywołanie aplikacji'
        ]);

        $date = $v->validateFromPost('join_date', [
            'trim' => true,
            'required' => true,
            'required_message' => "Wprowadź datę",
            'date_format' => 'Y-m-d',
            'validator_message' => "Niepoprawny format daty. Przykład: 2137-69-69"
        ]);
        if ($v->isLastOK()) {
            $this->form->join_date = $date->format('Y-m-d');
        }
        return !App::getMessages()->isError();
    }

    public function validateEdit()
    {
        $this->form->caretaker_id = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }

    public function action_caretakerNew()
    {
        $this->generateView();
    }

    public function action_caretakerEdit()
    {
        if ($this->validateEdit()) {
            try {
                $record = App::getDB()->get("caretaker", "*", [
                    "caretaker_id" => $this->form->caretaker_id
                ]);
                $this->form->caretaker_id = $record['caretaker_id'];
                $this->form->caretaker_name = $record['caretaker_name'];
                $this->form->caretaker_surname = $record['caretaker_surname'];
                $this->form->join_date = $record['join_date'];
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }

        $this->generateView();
    }

    public function action_caretakerDelete()
    {
        if ($this->validateEdit()) {

            try {
                App::getDB()->delete("caretaker", [
                    "caretaker_id" => $this->form->caretaker_id
                ]);
                Utils::addInfoMessage('record deleted');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('unexspected deleting record error');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }

        App::getRouter()->redirectTo('caretakerList');
    }

    public function action_caretakerSave()
    {

        if ($this->validateSave()) {
            try {

                if ($this->form->caretaker_id == '') {
                    $count = App::getDB()->count("caretaker");

                    App::getDB()->insert("caretaker", [
                        "caretaker_id" => $this->form->caretaker_id,
                        "caretaker_name" => $this->form->caretaker_name,
                        "caretaker_surname" => $this->form->caretaker_surname,
                        "join_date" => $this->form->join_date,
                    ]);

                } else {
                    App::getDB()->update("caretaker", [
                        "caretaker_name" => $this->form->caretaker_name,
                        "caretaker_surname" => $this->form->caretaker_surname,
                        "join_date" => $this->form->join_date
                    ], [
                        "caretaker_id" => $this->form->caretaker_id
                    ]);
                }
                Utils::addInfoMessage('record saved');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('unexpected saving record error');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }

            App::getRouter()->forwardTo('caretakerList');
        } else {
            $this->generateView();
        }
    }

    public function generateView()
    {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('CaretakerEdit.tpl');
    }

}