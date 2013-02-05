<?php

use Symfony\Component\HttpFoundation\Request;

$container->get("plugin")->loadPlugins($container);

// some global vars to be used on Zencart as well
$request = Request::createFromGlobals();

$core_event = new \Zepluf\Bundle\StoreBundle\Event\CoreEvent();
$core_event->setRequest($request);

$view = $container->get("view");

$autoLoadConfig[37][] = array(
    'autoType' => 'require',
    'loadFile' => $container->getParameter('kernel.root_dir') . '/backend_routing.php'
);

$autoLoadConfig[200][] = array(
    'autoType' => 'require',
    'loadFile' => $container->getParameter('kernel.root_dir') . '/init_includes.php'
);