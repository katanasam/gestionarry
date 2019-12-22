<?php


class entite_user {



	protected $username;
	
	protected $pass;
	protected $email;

		

	public function __construct($username,$pass,$email){
	
	$this->username = $username;
	$this->pass= $pass;
	$this->email= $email;
	
	
	}
	
	
	public function getUserInfos(Entite_user $user){
	
	 	printf('le nom du joueur est : %s \n',$user->username);
		printf('le mot de pass et decripter est : %s \n ',$user->pass);
		printf(' ladress email est : %s \n ',$user->email);
	}





}

