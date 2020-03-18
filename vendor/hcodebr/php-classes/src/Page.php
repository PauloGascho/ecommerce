<?php

namespace Hcode;

use Rain\Tpl;

class Page {

	private $tpl;
	private $options = [];
	private $defauts = [
		"data"=>[]
	];

	public function __construct($opts = array()){

		$this->options = array_merge($defauts, $opts);

		$config = array(
			"tpl_dir"       => $_SERVER["DOCUMENT_ROOT"]."/views/",
			"cache_dir"     => $_SERVER["DOCUMENT_ROOT"]."/views-cache/",
			"debug"         => false // set to false to improve the speed
		);

		Tpl::configure( $config );

		$this->tpl = new Tpl;

		$this->setData($this->options["data"]);

		$this->tpl->draw("header");

	}

	private function setData($data = array())

	public function setTpl($name, $data = array(), $retrunHtml = false)
	{
		$this->setData($data);

		return $this->tpl->draw($name, $retrunHtml);
	}

	public function __destruct(){

		$this->tpl->draw("footer");

	}

}