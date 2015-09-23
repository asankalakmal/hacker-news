# Welcome to Hacker-news


## What is this project?

This application is display list of hacker news from Y combinator API (http://hn.algolia.com/api).

## Installation

Checkout a copy of the source files in to your webserver head over to your app's config in /application/config/config.php and update the "BaseURL" (You can update 'newsParameters' also).

For the unit test if you don't like to install phpunit into server, please run composer.json file to install dependencies.

## Features and Documentation

This web application develop using PHP, Twitter Bootstrap, Angular js, jQuery, css/html. We didn't use any PHP framework, but created a simple MVC structure framework.

This application display the list of hacker news according to the API parameters

### API parameters

// This is the hacker news api URL
// This url order by newest news first (search_by_date)
// If you don't need to use it plaese use (search instead of using search_by_date)
'newsApiURL' => 'http://hn.algolia.com/api/v1/search_by_date'

Other Filter parameters 

'newsParameters' => [
    	'query' => 'github',   						// Filter the github news
    	'restrictSearchableAttributes' => 'url', 	// The filtered parameter restrict to the URL
    	'numericFilters' => 'points>1000',			// Filter by author points 1000+
        'hitsPerPage' => 10   						// Number of news per page 
]

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
	|   ├── config                			# PHP configuration related files
	|   ├── controllers                 	# Controller related files
	|   ├── models							# Model related files
	|  	├── Tests                           # PHP Unit test related files
	|   └── views
	|		├── js                     		# Javascript related files
	|   	├── layout                		# Layout related files (header.php, footer.php)                        
	|   	└── index.php					# main view page of the system
    ├── index.php                     # Application loading file
    ├── bootstrap.php                 # Bootstrap file (classes autoload)
    ├── composer.json                 # Required libraries (PHP unit tests related)
    ├── LICENSE
    └── README.md


## Tests

This project use PHP Unittest with selenium test.
Unit test files can see on "application/test/" directory

## License

This application is open-sourced software licensed under the MIT license