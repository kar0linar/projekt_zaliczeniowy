<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('animalList');
App::getRouter()->setLoginRoute('login'); 

Utils::addRoute('loginShow',     'LoginCtrl');
Utils::addRoute('login',         'LoginCtrl');
Utils::addRoute('logout',        'LoginCtrl');

Utils::addRoute('registerShow',  'RegisterCtrl');
Utils::addRoute('register',      'RegisterCtrl');

Utils::addRoute('animalList',    'AnimalListCtrl');
Utils::addRoute('animalTab',     'AnimalTabCtrl');
Utils::addRoute('caretakerList', 'CaretakerListCtrl');

Utils::addRoute('animalNew',     'AnimalEditCtrl');
Utils::addRoute('animalEdit',    'AnimalEditCtrl');
Utils::addRoute('animalSave',    'AnimalEditCtrl');
Utils::addRoute('animalDelete',  'AnimalEditCtrl');

Utils::addRoute('caretakerNew',     'CaretakerEditCtrl');
Utils::addRoute('caretakerEdit',    'CaretakerEditCtrl');
Utils::addRoute('caretakerSave',    'CaretakerEditCtrl');
Utils::addRoute('caretakerDelete',  'CaretakerEditCtrl');