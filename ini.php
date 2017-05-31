<?php

/**
 * --------------------------------------------------
 * APP NAME
 * --------------------------------------------------
**/
if( !defined( 'TIMESAVIOURS' ) ) define( 'TIMESAVIOURS', 'TIMESAVIOURS' );

/**
 * --------------------------------------------------
 * DB ACCESS
 * --------------------------------------------------
**/
if (!defined('DB_HOST')) { define('DB_HOST', 'localhost'); }
if (!defined('DB_DBNAME')) { define('DB_DBNAME', 'timesaviours'); }
if (!defined('DB_LOGIN')) { define('DB_LOGIN', 'root'); }
if (!defined('DB_PASS')) { define('DB_PASS', ''); }
if (!defined('DB_CHARSET')) { define('DB_CHARSET', 'utf8'); }
if (!defined('DB_COLLATE')) { define('DB_COLLATE', 'utf8_unicode_ci'); }

/**
 * --------------------------------------------------
 * CORE CONSTANTS
 * --------------------------------------------------
**/
if( strtoupper( substr( PHP_OS, 0, 3 ) ) == 'WIN' ) :
    if( !defined( 'PHP_EOL') ) : define( 'PHP_EOL', "\r\n" ); endif;
    if( !defined( 'DIRECTORY_SEPARATOR') ) : define( 'DIRECTORY_SEPARATOR', "\\" ); endif;
    if( !defined( 'LOCALE_STRING') ) : define( 'LOCALE_STRING', 'fra' ); endif;
else :
    if( !defined( 'PHP_EOL') ) : define( 'PHP_EOL', "\n" ); endif;
    if( !defined( 'DIRECTORY_SEPARATOR') ) : define( 'DIRECTORY_SEPARATOR', "/" ); endif;
    if( !defined( 'LOCALE_STRING') ) : define( 'LOCALE_STRING', 'fr-FR' ); endif;
endif;

/**
 * --------------------------------------------------
 * PATHS
 * --------------------------------------------------
**/
if( !defined( 'DS' ) ) define( 'DS', DIRECTORY_SEPARATOR ); // Defines the folder separator connected to the system
if( !defined( 'ABSPATH' ) ) define( 'ABSPATH', __DIR__ . DS ); // Defines the root folder
if( !defined( 'APPPATH' ) ) define( 'APPPATH', ABSPATH . 'App' . DS ); // Defines the path to the folder containing the aplication files
if( !defined( 'CONTROLLERSPATH' ) ) define( 'CONTROLLERSPATH', APPPATH . 'Controllers' . DS ); // Defines the path to the folder containing the controllers files
if( !defined( 'MODELSPATH' ) ) define( 'MODELSPATH', APPPATH . 'Models' . DS ); // Defines the path to the folder containing the models files
if( !defined( 'VIEWSPATH' ) ) define( 'VIEWSPATH', APPPATH . 'Views' . DS ); // Defines the path to the folder containing the views files
if( !defined( 'MODULESPATH' ) ) define( 'MODULESPATH', APPPATH . 'Modules' . DS ); // Defines the path to the folder containing the modules files
if( !defined( 'FWPATH' ) ) define( 'FWPATH', ABSPATH . 'FW' . DS ); // Defines the path to the folder containing the framework files
if( !defined( 'COREPATH' ) ) define( 'COREPATH', FWPATH . 'core' . DS ); // Defines the path to the folder containing the kernel files for the framework
if( !defined( 'ASSETSPATH' ) ) define( 'ASSETSPATH', FWPATH . 'assets' . DS ); // Defines the path to the folder containing the assets files
