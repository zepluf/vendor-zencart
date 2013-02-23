<?php
/**
 * Created by RubikIntegration Team.
 * Date: 1/25/13
 * Time: 3:26 PM
 * Question? Come to our website at http://rubikintegration.com
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * PLEASE DO NOT EDIT ANY THING IN THIS FILE
 */


/**
 * WE RECOMMEND THAT YOU USE SSL PROTECTION FOR YOUR ENTIRE ADMIN:
 * To do that, make sure you use a "https:" URL for BOTH the HTTP_SERVER and HTTPS_SERVER entries:
 */
define('HTTP_SERVER', $container->getParameter('store.http_server'));
define('HTTPS_SERVER', $container->getParameter('store.https_server'));
define('HTTP_CATALOG_SERVER', $container->getParameter('store.http_server'));
define('HTTPS_CATALOG_SERVER', $container->getParameter('store.https_server'));

define('ENABLE_SSL', $container->getParameter('store.enable_ssl'));

// secure webserver for admin?  Valid choices are 'true' or 'false' (including quotes).
define('ENABLE_SSL_ADMIN', $container->getParameter('store.enable_ssl'));
// secure webserver for storefront?  Valid choices are 'true' or 'false' (including quotes).
define('ENABLE_SSL_CATALOG', ENABLE_SSL);

// NOTE: be sure to leave the trailing '/' at the end of these lines if you make changes!
// * DIR_WS_* = Webserver directories (virtual/URL)
// these paths are relative to top of your webspace ... (ie: under the public_html or httpdocs folder)
$t1 = parse_url(HTTP_SERVER);$p1 = $t1['path'];$t2 = parse_url(HTTPS_SERVER);$p2 = $t2['path'];

define('DIR_WS_ADMIN', preg_replace('#^' . str_replace('-', '\-', $p1) . '#', '', dirname($_SERVER['SCRIPT_NAME'])) . '/');
define('DIR_WS_CATALOG', '/');
define('DIR_WS_HTTPS_ADMIN', preg_replace('#^' . str_replace('-', '\-', $p2) . '#', '', dirname($_SERVER['SCRIPT_NAME'])) . '/');
define('DIR_WS_HTTPS_CATALOG', '/');

define('DIR_WS_IMAGES', 'images/');
define('DIR_WS_ICONS', DIR_WS_IMAGES . 'icons/');
define('DIR_WS_CATALOG_IMAGES', HTTP_CATALOG_SERVER . DIR_WS_CATALOG . 'images/');
define('DIR_WS_CATALOG_TEMPLATE', HTTP_CATALOG_SERVER . DIR_WS_CATALOG . 'includes/templates/');
define('DIR_WS_INCLUDES', 'includes/');
define('DIR_WS_BOXES', DIR_WS_INCLUDES . 'boxes/');
define('DIR_WS_FUNCTIONS', DIR_WS_INCLUDES . 'functions/');
define('DIR_WS_CLASSES', DIR_WS_INCLUDES . 'classes/');
define('DIR_WS_MODULES', DIR_WS_INCLUDES . 'modules/');
define('DIR_WS_LANGUAGES', 'includes/languages/');
define('DIR_FS_LANGUAGES', $container->getParameter("store.backend.languages_dir") . '/');
define('DIR_WS_CATALOG_LANGUAGES', HTTP_CATALOG_SERVER . DIR_WS_CATALOG . 'includes/languages/');

//the following path is a COMPLETE path to your Zen Cart files. eg: /var/www/vhost/accountname/public_html/store/
define('DIR_FS_CATALOG', ZENCART_DIR . '/');
// * DIR_FS_* = Filesystem directories (local/physical)
define('DIR_FS_ADMIN', $container->getParameter("store.zencart_backend_dir") . '/');

define('DIR_FS_CATALOG_LANGUAGES', $container->getParameter("store.frontend.languages_dir") . '/');
define('DIR_FS_CATALOG_IMAGES', DIR_FS_CATALOG . 'images/');
define('DIR_FS_CATALOG_MODULES', DIR_FS_CATALOG . 'includes/modules/');
define('DIR_FS_CATALOG_TEMPLATES', $container->getParameter("store.frontend.templates_dir") . '/');
define('DIR_FS_BACKUP', DIR_FS_ADMIN . 'backups/');
define('DIR_FS_EMAIL_TEMPLATES', DIR_FS_CATALOG . 'email/');
define('DIR_FS_DOWNLOAD', DIR_FS_CATALOG . 'download/');

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

// Define the webserver and path parameters
// Main webserver: eg-http://www.your_domain.com -
// HTTP_SERVER is your Main webserver: eg-http://www.your_domain.com
// HTTPS_SERVER is your Secure webserver: eg-https://www.your_domain.com
// HTTP_CATALOG_SERVER is your Main webserver: eg-http://www.your_domain.com
// HTTPS_CATALOG_SERVER is your Secure webserver: eg-https://www.your_domain.com
/*
 * URLs for your site will be built via:
 *     HTTP_SERVER plus DIR_WS_ADMIN or
 *     HTTPS_SERVER plus DIR_WS_HTTPS_ADMIN or
 *     HTTP_SERVER plus DIR_WS_CATALOG or
 *     HTTPS_SERVER plus DIR_WS_HTTPS_CATALOG
 * ...depending on your system configuration settings
 */
// EOF