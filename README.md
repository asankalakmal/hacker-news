# Welcome to Hacker-news


## What is this project?

This application is display list of hacker news from Y combinator API (https://hn.algolia.com/api).

## Installation
Checkout a copy of the source files in to your web server and change your app's config in /application/config/config.php if required. You can update the "BaseURL" and/or 'newsParameters'.

For the unit test if you don't like to install phpunit into server, please run composer.json file to install dependencies.

## Features and Documentation

This web application is developed using PHP, Twitter Bootstrap, Angular js, jQuery, css/html. It doesn't use any PHP framework, but a simple MVC structure framework implemented by me.

This application display the list of hacker news according to the API parameters.

### API parameters
```php
// This is the hacker news api URL
// This url orders the news based on date so that the latest news displayed first (search_by_date)
// If you don't want to use it please use (search instead of using search_by_date)

'newsApiURL' => 'http://hn.algolia.com/api/v1/search_by_date'

//Other Filter parameters 

'newsParameters' => [
    	'query' => 'github',   						// Filter the github news
    	'restrictSearchableAttributes' => 'url', 	// The filtered parameter restrict to the URL
    	'numericFilters' => 'points>1000',			// Filter by author points 1000+
        'hitsPerPage' => 10   						// Number of news per page 
]
```
### Adding New Files:

Adding Controller: 
You have to follow [controller name]Controller.class.php file name structure 
Adding new Action, you have to follow "[action name]Action" name structure

Adding Model: 
You have to follow [model name]Model.class.php file name structure 


### Directory Structure

    .
    ├── application                   # All application related files
    |	├── app                     		# Core system files (Base files)
	|   ├── config                		# PHP configuration related files
	|   ├── controllers                 	# Controller related files
	|   ├── models						# Model related files
	|  	├── Tests                       	# PHP Unit test related files
	|   └── views
	|		├── js                     		# Javascript related files
	|   	├── layout                		# Layout related files (header.php, footer.php)                        
	|   	└── index.php						# main view page of the system
    ├── index.php                     # Application loading file
    ├── bootstrap.php                 # Bootstrap file (classes autoload)
    ├── composer.json                 # Required libraries (PHP unit tests related)
    ├── LICENSE
    └── README.md


## Tests

This project uses PHP Unittest with selenium test.
Unit test files can be found in "application/test/" directory

## License

This application is open-sourced software licensed under the MIT license
