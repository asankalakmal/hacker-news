<?php

return [

	/*
    |--------------------------------------------------------------------------
    | News API URL
    |--------------------------------------------------------------------------
    |
    | This option controls the Hacker news api url.
    |
    */
    'BaseURL' => 'http://localhost/MVC-master/',

    /*
    |--------------------------------------------------------------------------
    | News API URL
    |--------------------------------------------------------------------------
    |
    | This option controls the Hacker news api url.
    |
    */
    'newsApiURL' => 'http://hn.algolia.com/api/v1/search_by_date',

	/*
    |--------------------------------------------------------------------------
    | News API Parameters
    |--------------------------------------------------------------------------
    |
    | This option controls the Hacker news api parameters.
    |
    */
    'newsParameters' => [
    	'query' => 'github',
    	'restrictSearchableAttributes' => 'url',
        'hitsPerPage' => 10,
    	//'numericFilters' => 'points>1000'
    ]

];