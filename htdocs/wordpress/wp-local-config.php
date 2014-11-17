<?php 
// Local server settings

// Local Database
define('DB_NAME', 'krma_wordpress');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_HOST', 'localhost');

// Overwrites the database to save keep edeting the DB
define('WP_HOME','http://localhost:8888/KRMA/htdocs/wordpress/');
define('WP_SITEURL','http://localhost:8888/KRMA/htdocs/wordpress/');

// Turn on debug for local environment
define('WP_DEBUG', true);