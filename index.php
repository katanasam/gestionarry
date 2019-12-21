<?php


 class perso {

	protected $name;	

	public function __construct($name){
		$this->name = $name;
	}



	public function say_hello(){
		
		return ' le dieu noir horus et de retour dans cette annee et tous les autres dieux arrive '.$this->name.'/n' ;
	}


}
	

	$perso = new perso('sept');

	echo $perso->say_hello();
