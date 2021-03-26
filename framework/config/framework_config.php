<?php
// Saber si se está trabajando de forma local o remota. La funcion in_array devuelve true o false
define('IS_LOCAL'   , in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1']));

// Definir el uso horario o timezone del sistema
date_default_timezone_set('America/Argentina/Buenos_Aires');

// Lenguaje
define('LANG'       , 'es');

// Ruta base del proyecto
define('BASEPATH'   , IS_LOCAL ? '/itprops/' : '____BASEPATH DE PRODUCCIÓN___');

// Sal del sistema
define('AUTH_SALT'  , 'Th3S4ltBy2M');

// Puerto y URL del sitio
define('PORT'       , '');
define('URL'        , IS_LOCAL ? 'http://localhost:'.PORT.'/itprops/' : '___URL DE PRODUCCIÓN___');

// Rutas de directorios y archivos
define('DS'         , DIRECTORY_SEPARATOR);
define('ROOT'       , getcwd().DS);
define('FRAMEWORK'  , ROOT.'framework'.DS);
define('CLASSES'    , FRAMEWORK.'classes'.DS);
define('CONFIG'     , FRAMEWORK.'config'.DS);
define('CONTROLLERS', FRAMEWORK.'controllers'.DS);
define('FUNCTIONS'  , FRAMEWORK.'functions'.DS);
define('MODELS'     , FRAMEWORK.'models'.DS);
define('TEMPLATES'  , ROOT.'templates'.DS);
define('INCLUDES'   , TEMPLATES.'includes'.DS);
define('VIEWS'      , TEMPLATES.'views'.DS);

// Rutas de archivos o assets con base URL
define('APPASSETS'  , URL.'app-assets/');
define('ASSETS'     , URL.'assets/');
define('GULP-TASKS' , URL.'gulp-tasks/');
define('SRC'        , URL.'src/');
define('SDK'        , URL.'sdk/');

// Sdks
define('PHPMAILER'  , SDK.'PHPMailer/');

// Setear conexión local o de desarrollo
define('LDB_ENGINE' , 'mysql');
define('LDB_HOST'   , 'localhost');
define('LDB_NAME'   , 'itprops');
define('LDB_USER'   , 'root');
define('LDB_PASS'   , 'root');
define('LDB_CHARSET', 'utf8');

// Setear conexión en producción o servidor real
define('DB_ENGINE'  , 'mysql');
define('DB_HOST'    , 'localhost');
define('DB_NAME'    , '___REMOTE DB___');
define('DB_USER'    , '___REMOTE DB___');
define('DB_PASS'    , '___REMOTE DB___');
define('DB_CHARSET' , '___REMOTE CHARTSET___');

// El controlador por defecto, el método por defecto y el controlador de errores por defecto
define('DEFAULT_CONTROLLER'      , 'login');
define('DEFAULT_ERROR_CONTROLLER', 'error');
define('DEFAULT_METHOD'          , 'index');
