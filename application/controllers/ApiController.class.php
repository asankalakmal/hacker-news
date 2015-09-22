<?php
/**
 * Title           API controller
 * @author         Asanka - <<asankalakmal[at]gmail[dot]com>>
 * created on      21-09-2015, 3:00PM by Asanka
 * updated on      
 *
 * Description     This file include api functions of the Hacker news project 
 *                 (Coding Standard PSR)
 * */

namespace controllers;

use app\BaseController;
use models\HackerNewsModel;

class ApiController extends BaseController
{

    private $page = 0;

    public function __construct() 
    {
        // Call parent construct to load the config
        parent::__construct(); 
    }

    /**
     * Hacker news Api call
     *
     * @return json structure
     * */
    public function getNewsListAction()
    {
        // Check page parameter set or not
        if(isset($_GET['page']) && $_GET['page'] != "") {
            // Api pagination strat from 0 but display it as 1
            $this->page = $_GET['page'] - 1;
        }

        // Add page parameter with configured parameters
        $params = array_merge($this->config['newsParameters'], array('page' => $this->page ));
        $hacker = new HackerNewsModel();

        // Apply json header
        header('Content-Type: application/json');
        echo $hacker->getHackerNews($this->config['newsApiURL'], $params);
    }

} 