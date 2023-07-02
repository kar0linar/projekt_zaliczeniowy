<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\LoginForm;
use core\Validator;

class RegisterCtrl
{

    private $form;

    public function __construct()
    {
        $this->form = new LoginForm();
    }

    public function validateUser()
    {

        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->pass = ParamUtils::getFromRequest('password');

        if (App::getMessages()->isError())
            return false;

        if (empty(trim($this->form->login))) {
            Utils::addErrorMessage('Wprowadź login');
        }
        if (empty(trim($this->form->pass))) {
            Utils::addErrorMessage('Wprowadź hasło');
        }
        if (!App::getMessages()->isError()) {
            $exists = App::getDB()->has("user", [
                "login" => $this->form->login
            ]);
    
            if ($exists) {
                Utils::addErrorMessage('Podany login jest już zajęty');
            }
        }
        return !App::getMessages()->isError();
    }

    public function action_registerShow()
    {
        $this->generateView();
    }

    public function action_register()
    {
        if ($this->validateUser()) {
            try {
                App::getDB()->insert("user", [
                    "login" => $this->form->login,
                    "password" => $this->form->pass,
                ]);
                Utils::addErrorMessage('Pomyślnie zarejestrowano');
            } catch (PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas rejstracji');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }
        $this->generateView();


    }
    public function generateView()
    {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('RegisterView.tpl');
    }




}