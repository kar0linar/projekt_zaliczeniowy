<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Valanimal_idator;
use app\forms\AnimalEditForm;

class AnimalEditCtrl {

    private $form; //dane formularza

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new AnimalEditForm();
    }

    // Walidacja danych przed zapisem (nowe dane lub edycja).
    public function validateSave() {
        //0. Pobranie parametrów z walidacją
        $this->form->animal_id = ParamUtils::getFromRequest('animal_id', true, 'Błędne wywołanie aplikacji');
        $this->form->animal_name = ParamUtils::getFromRequest('animal_name', true, 'Błędne wywołanie aplikacji');
        // $this->form->surname = ParamUtils::getFromRequest('surname', true, 'Błędne wywołanie aplikacji');
        $this->form->join_date = ParamUtils::getFromRequest('join_date', true, 'Błędne wywołanie aplikacji');

        if (App::getMessages()->isError())
            return false;

        // 1. sprawdzenie czy wartości wymagane nie są puste
        if (empty(trim($this->form->animal_id))) {
            Utils::addErrorMessage('insert id');
        }
        if (empty(trim($this->form->animal_name))) {
            Utils::addErrorMessage('insert name');
        }
        if (empty(trim($this->form->join_date))) {
            Utils::addErrorMessage('insert join date');
        }

        if (App::getMessages()->isError())
            return false;

        // 2. sprawdzenie poprawności przekazanych parametrów

        $d = \DateTime::createFromFormat('Y-m-d', $this->form->join_date);
        if ($d === false) {
            Utils::addErrorMessage('wrong data format! example: 2137-69-69');
        }

        return !App::getMessages()->isError();
    }

    //validacja danych przed wyswietleniem do edycji
    public function validateEdit() {
        //pobierz parametry na potrzeby wyswietlenia danych do edycji
        //z widoku listy osób (parametr jest wymagany)
        $this->form->animal_id = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }

    public function action_animalNew() {
        $this->generateView();
    }

    //wysiweltenie rekordu do edycji wskazanego parametrem 'id'
    public function action_animalEdit() {
        // 1. walidacja id osoby do edycji
        if ($this->validateEdit()) {
            try {
                // 2. odczyt z bazy danych osoby o podanym ID (tylko jednego rekordu)
                $record = App::getDB()->get("animal", "*", [
                    "animal_id" => $this->form->animal_id
                ]);
                // 2.1 jeśli osoba istnieje to wpisz dane do obiektu formularza
                $this->form->animal_id = $record['animal_id'];
                $this->form->animal_name= $record['animal_name'];
                $this->form->join_date = $record['join_date'];
                // $this->form->birthdate = $record['birthdate'];
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }

        // 3. Wygenerowanie widoku
        $this->generateView();
    }

    public function action_animalDelete() {
        // 1. walidacja id osoby do usuniecia
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

        // 3. Przekierowanie na stronę listy osób
        App::getRouter()->forwardTo('AnimalList');
    }

    public function action_animalSave() {

        // 1. Walidacja danych formularza (z pobraniem)
        if ($this->validateSave()) {
            // 2. Zapis danych w bazie
            try {

                //2.1 Nowy rekord
                if ($this->form->animal_id == '') {
                    //sprawdź liczebność rekordów - nie pozwalaj przekroczyć 20
                    $count = App::getDB()->count("animal");
                    if ($count <= 100) {
                        App::getDB()->insert("animal", [
                            "animal_id" => $this->form->name,
                            "animal_name" => $this->form->animal_name,
                            "join_date" => $this->form->join_date,
                        ]);
                    } else { //za dużo rekordów
                        // Gdy za dużo rekordów to pozostań na stronie
                        Utils::addInfoMessage('limit: too much records(>100) to add new record you have to delete another');
                        $this->generateView(); //pozostań na stronie edycji
                        exit(); //zakończ przetwarzanie, aby nie dodać wiadomości o pomyślnym zapisie danych
                    }
                } else {
                    //2.2 Edycja rekordu o danym ID
                    App::getDB()->update("animal", [
                        // "name" => $this->form->name,
                        "animal_name" => $this->form->animal_name,
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

            // 3b. Po zapisie przejdź na stronę listy osób (w ramach tego samego żądania http)
            App::getRouter()->forwardTo('AnimalList');
        } else {
            // 3c. Gdy błąd walidacji to pozostań na stronie
            $this->generateView();
        }
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form); // dane formularza dla widoku
        App::getSmarty()->display('AnimalEdit.tpl');
    }

}
