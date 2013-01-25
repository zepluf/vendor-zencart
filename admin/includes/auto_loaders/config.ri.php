<?php

use Symfony\Component\HttpFoundation\Request;

$container->get("plugin")->loadPlugins($container);

// some global vars to be used on Zencart as well
$request = Request::createFromGlobals();

$core_event = $container->get('storebundle.core_event');

$view = $container->get("view");

$autoLoadConfig[200][] = array(
    'autoType' => 'require',
    'loadFile' => $container->getParameter('kernel.root_dir') . '/init_includes.php'
);