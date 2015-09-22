<?php
/**
 * Title           API controller
 * @author         Asanka - <<asankalakmal[at]gmail[dot]com>>
 * created on      21-09-2015, 3:00PM by Asanka
 * updated on      
 *
 * Description     This file include api functions of the Hacker news project
 * 				   (Coding Standard PSR)
 * */

namespace controllers;

use app\BaseController;
use models\HackerNewsModel;

class IndexController extends BaseController
{

	public function __construct() 
	{
		// Call parent construct to load the config
		parent::__construct();
    }

    /**
     * Load the Home page 
     *
     * */
    public function indexAction()
    {
        $this->render('', 'index');
    }

} 