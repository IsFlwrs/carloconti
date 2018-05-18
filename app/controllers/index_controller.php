<?php class index_controller extends appcontroller{
	
	public function __construct(){
		parent::__construct();
		$this->title_for_layout("CARLO CONTI");
	}
	
	public function index($page="1"){
		$this->render();
	}
} ?>