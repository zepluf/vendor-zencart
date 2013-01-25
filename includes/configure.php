<?php
/**
 * @package Configuration Settings circa 1.5.0
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * File Built by zc_install on 2012-08-23 04:22:55
 */

define('DIR_WS_CATALOG', $container->getParameter("store.relative_dir") . "/");
define('DIR_WS_HTTPS_CATALOG', $container->getParameter("store.ssl_relative_dir") . "/");

define('DIR_WS_IMAGES', WEB_DIR . '/images/');
define('DIR_WS_INCLUDES', 'includes/');
define('DIR_WS_FUNCTIONS', DIR_WS_INCLUDES . 'functions/');
define('DIR_WS_CLASSES', DIR_WS_INCLUDES . 'classes/');
define('DIR_WS_MODULES', DIR_WS_INCLUDES . 'modules/');
define('DIR_WS_LANGUAGES', 'includes/languages/');
define('DIR_FS_LANGUAGES', $container->getParameter("store.frontend.languages_dir") . '/');
define('DIR_WS_DOWNLOAD_PUBLIC', DIR_WS_CATALOG . 'pub/');
define('DIR_WS_TEMPLATES', APP_DIR . '/frontend/templates/');

define('DIR_WS_PHPBB', '/');

// * DIR_FS_* = Filesystem directories (local/physical)
//the following path is a COMPLETE path to your Zen Cart files. eg: /var/www/vhost/accountname/public_html/store/
define('DIR_FS_CATALOG', ZENCART_DIR . '/');

define('DIR_FS_DOWNLOAD', DIR_FS_CATALOG . 'download/');
define('DIR_FS_DOWNLOAD_PUBLIC', DIR_FS_CATALOG . 'pub/');
define('DIR_WS_UPLOADS', DIR_WS_IMAGES . 'uploads/');
define('DIR_FS_UPLOADS', DIR_FS_CATALOG . DIR_WS_UPLOADS);
define('DIR_FS_EMAIL_TEMPLATES', DIR_FS_CATALOG . 'email/');

/**
 * DO NOT EDIT BELOW THIS LINE
 */
// define our database connection
define('DB_TYPE', 'mysql');
define('DB_PREFIX', $container->getParameter("table_prefix"));
define('DB_CHARSET', 'utf8');
define('DB_SERVER', $container->getParameter("database_host"));
define('DB_SERVER_USERNAME', $container->getParameter("database_user"));
define('DB_SERVER_PASSWORD', $container->getParameter("database_password"));
define('DB_DATABASE', $container->getParameter("database_name"));
// EOF