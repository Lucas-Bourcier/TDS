<?php
namespace controllers;
use Ubiquity\attributes\items\router\Get;
use Ubiquity\attributes\items\router\Post;
use Ubiquity\cache\CacheManager;
use Ubiquity\utils\http\UResponse;
use Ubiquity\utils\http\USession;
use Ubiquity\utils\http\URequest;
use Ubiquity\attributes\items\router\Route;

#[Route(path: "/MyAuth",inherited: true,automated: true)]
class MyAuth extends \Ubiquity\controllers\auth\AuthController{

    protected string $headerView = "@activeTheme/main/vHeader.html";

    protected string $footerView = "@activeTheme/main/vFooter.html";

    private function showMessage(string $header, string $message, string $type = '', string $icon = 'info circle',array $buttons=[]) {
        $this->loadView('main/message.html', compact('header', 'type', 'icon', 'message','buttons'));
    }
	protected function onConnect($connected) {

		$urlParts=$this->getOriginalURL();
		USession::set($this->_getUserSessionKey(), $connected);
		if(isset($urlParts)){
			$this->_forward(implode("/",$urlParts));
		}else{
		    UResponse::$header('location', '/');
		}
	}

	protected function _connect() {
		if(URequest::isPost()){
			$email=URequest::post($this->_getLoginInputName());
			$password=URequest::post($this->_getPasswordInputName());
            $key='datas/users'.md5($email);
            if(CacheManager::$cache->exists($key)){
                $userInfos=CacheManager::$cache->fetch($key);
                if($userInfos['login']===$email && URequest::password_verify($this->_getPasswordInputName(),$userInfos['password'])) {
                    return $email;
                }
                return;
            }
			//TODO
			//Loading from the database the user corresponding to the parameters
			//Checking user creditentials
			//Returning the user
            return $email;
		}
		return;
	}

    public function _displayInfoAsString()
    {
        return true;
    }

    /**
	 * {@inheritDoc}
	 * @see \Ubiquity\controllers\auth\AuthController::isValidUser()
	 */
	public function _isValidUser($action=null) {
		return USession::exists($this->_getUserSessionKey());
	}

	public function _getBaseRoute() {
		return '/MyAuth';
	}

    protected function initializeAuth(){
        if(! URequest::isAjax()){

        }
        $this->loadView($this->headerView);
    }

    protected function finalizeAuth(){
        if(! URequest::isAjax()){

        }
        $this->loadView($this->footerView);
    }

	#[Get(path: "MyAuth/newUserForm",name: "myAuth.newUserForm")]
	public function newUserForm(){
		
		$this->loadView('MyAuth/newUserForm.html');

	}


	#[Post(path: "newUser" ,name: "login.newUser")]
	public function newUser(){
        $email=URequest::post('email');
		$key='datas/users'.md5($email);
            if(!CacheManager::$cache->exists($key)){
                CacheManager::$cache->store($key,['login'=>$email,'password'=>URequest::password_hash('password')]);
                $this->showMessage('Cr??ation de compte',"Votre compte a ??t?? cr???? avec l'email <b>$email</b>",'SUCESSS');}
            else{
                $this->showMessage('Cr??ation de compte',"Vous avez d??j?? un compte avec l'email <b>$email</b>",'ERROR');
            }
	}

}
