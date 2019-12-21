<?php

require_once ('entite_user.php');
 class perso extends entite_user {

	public $power;	
	public $vie;
	public $attack;
	public $defence;
	public $user ;
	
	public function __construct(entite_user $user){
		$this->user = $user;
	}


	public function  persoInit(){
	 	$this->power = 100;
		 $this->vie = 100;
		$this->attack = 100;
		$this->defence = 100;
	}	

	public function persoInfo(){
		printf(' username = [%s] \n', $this->user->username) ;
		printf(' pass = [%s] \n', $this->user->pass) ;
		printf(' email = [%s] \n', $this->user->email) ;
		printf(' power = [%d] \n', $this->power ) ;
		printf(' attack = [%d] \n', $this->attack );
		printf(' vie = [%d] \n', $this->vie ) ;
		printf(' defence = [%d] \n', $this->defence ) ;
	}


}

	// je suis un player qui veut jouer au jeux video

	 $player = new entite_user('sonic','hipperpas12','sonic@mail');
	

	 $player->getUserInfos($player);

	$sonic = new perso($player);
	$sonic->persoInit();
	$sonic->persoInfo();
