<?php
/**
 * Title           HackerNewsModel test
 * @author         Asanka - <<asankalakmal[at]gmail[dot]com>>
 * created on      22-09-2015, 10:00AM by Asanka
 * updated on      
 *
 * Description     This file have functions associate with  HackerNewsModel Unit test
 *					(Coding Standard PSR)
 * */

namespace tests;

use models\HackerNewsModel;

class HackerNewsModelTest extends \PHPUnit_Framework_TestCase {
	
	public $hackerNewsObj = null;

	/**
	 * Set the create object before run ( this function run every test run before)
	 * */
	public function setUp() 
	{
		$this->hackerNewsObj = new HackerNewsModel();
	}
	
	/**
	 * Unset the created object after run ( this function run every test run after)
	 * */
	public function tearDown() 
	{
		unset($this->hackerNewsObj);
	}
	
	/**
	 * Test getHackerNews method (output should be json format)
	 * Test using actual url and parameters
	 * */
	public function testGetHackerNews()
	{
		$hackerApiUrl = 'http://hn.algolia.com/api/v1/search_by_date';
		$params = [
			    	'query' => 'github',
			    	'restrictSearchableAttributes' => 'url',
			    	'numericFilters' => 'points>1000'
			    	];
		$jsonOut = $this->hackerNewsObj->getHackerNews($hackerApiUrl, $params);

		// Makesure 'hits' and 'query' include in the result
		$this->assertArrayHasKey('hits', json_decode($jsonOut, true));
		$this->assertArrayHasKey('query', json_decode($jsonOut, true));
	}

	/**
	 * Test curlGET method (output should be json format)
	 * Test using actual url and parameters
	 * */
	public function testCurlGET()
	{
		$hackerApiUrl = 'http://hn.algolia.com/api/v1/search_by_date';
		$params = [
			    	'query' => 'github',
			    	'restrictSearchableAttributes' => 'url',
			    	'numericFilters' => 'points>1000'
			    	];

		$jsonOut = $this->hackerNewsObj->getHackerNews($hackerApiUrl, $params);
		
		// Makesure 'hits' and 'query' include in the result
		$this->assertArrayHasKey('hits', json_decode($jsonOut, true));
		$this->assertArrayHasKey('query', json_decode($jsonOut, true));
	}

	/**
	 * Test validateApiResult method 
	 * */
	public function testValidateApiResult()
	{
		$result1 = ['query' => 'github', 'hits' => 10];
		$this->assertTrue($this->hackerNewsObj->validateApiResult(json_encode($result1)));
		$result2 = ['query' => 'test'];
		$this->assertFalse($this->hackerNewsObj->validateApiResult(json_encode($result2)));
	}

}