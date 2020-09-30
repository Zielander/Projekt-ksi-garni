<?php

namespace app\controllers;

use core\App;
use core\Utils;

class NavigateCtrl {
        
        public function action_backFromService(){
            Utils::addInfoMessage('Witamy ponownie w naszej księgarni!');
            $this->generateText();
            App::getSmarty()->display('NavigateView.tpl');
        }
        
	public function action_NavigateShow(){
            Utils::addInfoMessage('Witamy w naszej księgarni!');
            $this->generateText();
            App::getSmarty()->display('NavigateView.tpl');
	}
        
        public function action_NavigateLogIn(){
            Utils::addInfoMessage('Witamy po zalogowaniu!');
            $this->generateText();
            App::getSmarty()->display('NavigateView.tpl');
	}
        
        public function action_NavigateLogOut() {
            Utils::addInfoMessage('Dziękuemy!');
            $this->generateText();
            App::getSmarty()->display('NavigateView.tpl');
        }
	
	public function generateText(){		
            App::getSmarty()->assign('page_title','Witamy w księgarni "XYZ"');
            App::getSmarty()->assign('page_description','Aby przeglądać nasz repertuar książek należy kliknąć przycisk poniżej');
	}
}