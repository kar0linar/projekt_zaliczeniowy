<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\LoginForm;

class LoginCtrl
{

    private $form;
    private $record;

    public function __construct()
    {
        $this->form = new LoginForm();
    }

    public function validate()
    {
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->pass = ParamUtils::getFromRequest('pass');

        if (!isset($this->form->login))
            return false;

        if (empty($this->form->login)) {
            Utils::addErrorMessage('Nie podano loginu');
        }
        if (empty($this->form->pass)) {
            Utils::addErrorMessage('Nie podano hasła');
        }

        $login = $this->form->login;
        $pass = $this->form->pass;

        if (App::getMessages()->isError()) {
            return false;
        }
        try {
            $this->record = App::getDB()->select("user", [
                "login",
                "password",
                "is_admin"
            ], [
                "AND" => [
                    "login" => $login,
                    "password" => $pass
                ]
            ]);
        } catch (PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());

        }
        if (empty($this->record)) {
            Utils::addErrorMessage('Niepoprawny login lub hasło');
        } else {

            RoleUtils::addRole($this->record[0]["is_admin"]);
            Utils::addInfoMessage($this->record[0]["is_admin"]);
        }

        return !App::getMessages()->isError();
    }

    public function action_loginShow()
    {
        $this->generateView();
    }

    public function action_login()
    {
        if ($this->validate()) {
            Utils::addErrorMessage('Poprawnie zalogowano do systemu');
            App::getRouter()->redirectTo("animalList");
        } else {
            $this->generateView();
        }
    }

    public function action_logout()
    {
        session_destroy();
        App::getRouter()->redirectTo('LoginCtrl');
        Utils::addErrorMessage('Poprawnie wylogowano z systemu');

    }

    public function generateView()
    {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('LoginView.tpl');
    }

}