<?php

/**
 * Title           Base controller
 * @author         Asanka - <<asankalakmal[at]gmail[dot]com>>
 * created on      21-09-2015, 4:00PM by Asanka
 * updated on      
 *
 * Description     This file include Base controller functions of the Hacker news project 
 *				   (Coding Standard PSR)
 * */

namespace app;

class BaseController 
{
	protected $config;

	protected function __construct() 
	{
		$this->config = require_once __SITE_PATH . '/application/config/config.php';
	}
	
	protected function render($value, $viewName) 
	{
		$values = $value;
		require 'application/views/' . $viewName . '.php' ;
	}

}