<?php
/**
 * Title           API controller test
 * @author         Asanka - <<asankalakmal[at]gmail[dot]com>>
 * created on      21-09-2015, 3:00PM by Asanka
 * updated on      
 *
 * Description     This file have functions associate with  ApiController Unit test
 *                 (Coding Standard PSR)
 * */

namespace tests;

class ApiControllerTest extends \PHPUnit_Extensions_Selenium2TestCase
{
    /**
     * Set the create object before run ( this function run every test run before)
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
     * Test getNewsListAction method and check page title
     * */
    public function testGetNewsListAction()
    {
        $this->url('http://localhost/hacker-news/index.php?controller=api&action=getNewsList&page=0');
        $this->assertEquals('', $this->title());
    }

} 