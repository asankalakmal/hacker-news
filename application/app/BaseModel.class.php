<?php

/**
 * Title           Base Model
 * @author         Asanka - <<asankalakmal[at]gmail[dot]com>>
 * created on      21-09-2015, 4.30PM by Asanka
 * updated on      
 *
 * Description     This file include Base model functions of the Hacker news project 
 *				   (Coding Standard PSR)
 * */

namespace app;

class BaseModel
{
	protected $config;

	protected function __construct() 
	{
		$this->config = require_once __SITE_PATH . '/application/config/config.php';
	}

}