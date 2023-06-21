<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('login'); // akcja/ścieżka domyślna
App::getRouter()->setLoginRoute('animalList'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)


Utils::addRoute('animalList',    'AnimalListCtrl');
Utils::addRoute('loginShow',     'LoginCtrl');
Utils::addRoute('login',         'LoginCtrl');
Utils::addRoute('logout',        'LoginCtrl');
Utils::addRoute('caretakerList', 'CaretakerListCtrl');

// Utils::addRoute('animalNew',     'AnimalEditCtrl',	['user','admin']);
// Utils::addRoute('animalEdit',    'AnimalEditCtrl',	['user','admin']);
// Utils::addRoute('animalSave',    'AnimalEditCtrl',	['user','admin']);
// Utils::addRoute('animalDelete',  'AnimalEditCtrl',	['admin']);

Utils::addRoute('animalNew',     'AnimalEditCtrl',	['admin']);
Utils::addRoute('animalEdit',    'AnimalEditCtrl',	['admin']);
Utils::addRoute('animalSave',    'AnimalEditCtrl',	['admin']);
Utils::addRoute('animalDelete',  'AnimalEditCtrl',	['admin']);

Utils::addRoute('caretakerNew',     'CaretakerEditCtrl',	['admin']);
Utils::addRoute('caretakerEdit',    'CaretakerEditCtrl',	['admin']);
Utils::addRoute('caretakerSave',    'CaretakerEditCtrl',	['admin']);
Utils::addRoute('caretakerDelete',  'CaretakerEditCtrl',	['admin']);