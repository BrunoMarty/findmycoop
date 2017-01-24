<<<<<<< HEAD
<?php define('REQUEST_MICROTIME', microtime(true));
=======
<<<<<<< HEAD
<?php define('REQUEST_MICROTIME', microtime(true));
=======
<?php
>>>>>>> 9e597b830b24a7ed49a96571d7cbd3e7c9354bbf
>>>>>>> ef836af1c19acf10be67bee3f6905098cd8947c5
/**
 * This makes our life easier when dealing with paths. Everything is relative
 * to the application root now.
 */
chdir(dirname(__DIR__));

// Decline static file requests back to the PHP built-in webserver
if (php_sapi_name() === 'cli-server' && is_file(__DIR__ . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))) {
    return false;
}

// Setup autoloading
require 'init_autoloader.php';

// Run the application!
Zend\Mvc\Application::init(require 'config/application.config.php')->run();
