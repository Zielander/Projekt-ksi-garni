<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use app\forms\LibrarySF;

class LibraryCtrl {
     
    private $form;
    private $records;
    private $names;
    
    public function __construct() {
        $this->form = new LibrarySF();
    }
    
    public function validate() {
        $this->form->library = ParamUtils::getFromRequest('librarySF');
        
        return !App::getMessages()->isError();
    }
    
    public function load_data(){
       
        $this->validate();

        $search = [];
        if (isset($this->form->library) && strlen($this->form->library) > 0) {
            $search['tytul[~]'] = '%' . $this->form->library . '%';
        }
        
        $num_params = sizeof($search);
        if ($num_params > 1) {
            $where = ["AND" => &$search];
        } else {
            $where = &$search;
        }
        $where ["ORDER"] = "id_ksiazki";
        
        try {
            $this->names = App::getDB()->select("ksiazki", [
                "id_ksiazki",
                "autor",
                "tytul",
                "wydawnictwo",
                "cena"
                    ], $where);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania danych');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
    }  
        
    public function action_LibraryView() {
        $this->load_data();
        $this->assignView();
            
        App::getSmarty()->display('LibraryView.tpl');
    }
        
    public function action_BookView(){
        $this->load_data();
        $this->assignView();
            
        App::getSmarty()->display('BookView.tpl');
    }
    
    public function assignView(){
        $this->validate();
        App::getSmarty()->assign('page_title','Nasze książki');
        App::getSmarty()->assign('page_description','Naciśnij przycisk, aby przejść do oferty produktów!');
        
        App::getSmarty()->assign('library', $this->form);
        App::getSmarty()->assign('data', $this->records);
        App::getSmarty()->assign('names', $this->names);
        
        }
}
