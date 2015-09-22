<?php
/**
 * Title           IndexController controller unit test
 * @author         Asanka - <<asankalakmal[at]gmail[dot]com>>
 * created on      21-09-2015, 5:00PM by Asanka
 * updated on      
 *
 * Description     This file have functions associate with  IndexController Unit test
 *                 (Coding Standard PSR)
 * */

namespace tests;

class IndexControllerTest extends \PHPUnit_Extensions_Selenium2TestCase
{

    /**
     * Setup the browser, and selenium server configurations
     * */
    protected function setUp()
    {
        $this->setHost('localhost');
        $this->setPort(4444);
        $this->setBrowserUrl('http://localhost/');
        $this->setBrowser('firefox');
    }

    /**
     * Stop after processed the test
     * */
    public function tearDown()
    {
        $this->stop();
    }

    /**
     * Test IndexAction method and check page title
     * */
    public function testIndexAction()
    {
        $this->url('http://localhost/hacker-news/index.php');
        $this->assertEquals('Hacker News - Github', $this->title());
    }

} 