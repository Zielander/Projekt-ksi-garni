<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('NavigateShow'); // akcja/ścieżka domyślna
App::getRouter()->setLoginRoute('Login'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

Utils::addRoute('Register', 'RegisterCtrl');
Utils::addRoute('Login', 'LoginCtrl');
Utils::addRoute('Logout', 'LoginCtrl');

Utils::addRoute('NavigateShow', 'NavigateCtrl');
Utils::addRoute('NavigateLogIn', 'NavigateCtrl');
Utils::addRoute('NavigateLogOut', 'NavigateCtrl');
Utils::addRoute('backFromService', 'NavigateCtrl');

Utils::addRoute('AdminView', 'AdminCtrl');
Utils::addRoute('backToAdminNavigator', 'AdminCtrl');

Utils::addRoute('LibraryView', 'LibraryCtrl');
Utils::addRoute('BookView', 'LibraryCtrl');

/*
Utils::addRoute('BookView', 'BookCtrl');
Utils::addRoute('BookPartView', 'BookCtrl');
Utils::addRoute('NewBook', 'BookEditCtrl');
Utils::addRoute('bookSave', 'BookEditCtrl');
Utils::addRoute('bookEdit', 'BookEditCtrl');
Utils::addRoute('bookDelete', 'BookEditCtrl');*/






