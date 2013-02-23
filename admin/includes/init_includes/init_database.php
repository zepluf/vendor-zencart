<?php
/**
 * @package admin
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: init_database.php 3001 2006-02-09 21:45:06Z wilt $
 */
if (!defined('IS_ADMIN_FLAG')) {
    die('Illegal Access');
}
// include the cache class
require(DIR_FS_CATALOG . DIR_WS_CLASSES . 'cache.php');
$zc_cache = new cache;
// Load db classes

// Load queryFactory db classes
require(DIR_FS_CATALOG . DIR_WS_CLASSES . 'db/' . DB_TYPE . '/query_factory.php');
$db = new queryFactory();

if (!$db->connect(DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD, DB_DATABASE, USE_PCONNECT, false)) {
    if (file_exists('zc_install/index.php')) {
        header('location: zc_install/index.php');
        exit;
    } elseif (file_exists(WEB_DIR . '/' . $down_for_maint_source)) {
        if (defined('HTTP_SERVER') && defined('DIR_WS_CATALOG')) {
            header('location: ' . HTTP_SERVER . DIR_WS_CATALOG . $down_for_maint_source);
        } else {
            header('location: ' . $down_for_maint_source);
//    header('location: mystoreisdown.html');
        }
        exit;
    } else {
        exit;
    }
}
$zc_cache->sql_cache_flush_cache();
