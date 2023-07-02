<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\AnimalEditForm;

class AnimalEditCtrl
{

    private $form; //dane formularza

    public function __construct()
    {
        $this->form = new AnimalEditForm();
    }

    public function validateSave()
    {
        $this->form->animal_id = ParamUtils::getFromPost('animal_id', true, 'Błędne wywołanie aplikacji');

        $v = new Validator();
        $this->form->animal_name = $v->validateFromPost("animal_name", [
            'trim' => true,
            'required' => true,
            'required_message' => 'Imię jest wymagane',
            'validator_message' => 'Imię jest wymagane'
        ]);

        $v = new Validator();
        $this->form->animal_sp = $v->validateFromPost("animal_sp", [
            'trim' => true,
            'required' => true,
            'required_message' => 'Gatunek jest wymagany',
            'validator_message' => 'Gatunek jest wymagany'
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
        $this->form->animal_id = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }

    public function action_animalNew()
    {
        $this->generateView();
    }

    public function action_animalEdit()
    {
        if ($this->validateEdit()) {
            try {
                $record = App::getDB()->get("animal", "*", [
                    "animal_id" => $this->form->animal_id
                ]);
                $this->form->animal_id = $record['animal_id'];
                $this->form->animal_name = $record['animal_name'];
                $this->form->animal_name = $record['animal_sp'];
                $this->form->join_date = $record['join_date'];
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }

        $this->generateView();
    }

    public function action_animalDelete()
    {
        if ($this->validateEdit()) {

            try {
                // 2. usunięcie rekordu
                App::getDB()->delete("animal", [
                    "animal_id" => $this->form->animal_id
                ]);
                Utils::addInfoMessage('record deleted');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('unexspected deleting record error');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }
        App::getRouter()->redirectTo('animalTab');
    }

    public function action_animalSave()
    {

        if ($this->validateSave()) {
            try {

                if ($this->form->animal_id == '') {
                    App::getDB()->insert("animal", [
                        "animal_id" => $this->form->animal_id,
                        "animal_name" => $this->form->animal_name,
                        "animal_sp" => $this->form->animal_sp,
                        "join_date" => $this->form->join_date,
                    ]);

                } else {
                    App::getDB()->update("animal", [
                        "animal_name" => $this->form->animal_name,
                        "animal_sp" => $this->form->animal_sp,
                        "join_date" => $this->form->join_date
                    ], [
                        "animal_id" => $this->form->animal_id
                    ]);
                }
                Utils::addInfoMessage('record saved');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('unexpected saving record error');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }

            App::getRouter()->forwardTo('animalTab');
        } else {
            $this->generateView();
        }
    }

    public function generateView()
    {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('AnimalEdit.tpl');
    }

}