<?php

use Symfony\Component\HttpFoundation\Request;

$container->get("plugin")->loadPlugins($container);

// some global vars to be used on Zencart as well
$request = Request::createFromGlobals();

$core_event = new \Zepluf\Bundle\StoreBundle\Event\CoreEvent();
$core_event->setRequest($request);

$view = $container->get("view");

// We need to modify the default load order of Zen. Language class must be loaded first
$autoLoadConfig[80][] = array('autoType'=>'init_script', 'loadFile'=> 'init_languages.php');
foreach ($autoLoadConfig[110] as $key => $value){
    if($value['loadFile'] == 'init_languages.php'){
        unset($autoLoadConfig[110][$key]);
        break;
    }
}

$autoLoadConfig[90][] = array(
    'autoType' => 'require',
    'loadFile' => $container->getParameter('kernel.root_dir') . '/frontend_routing.php'
);

$autoLoadConfig[200][] = array(
    'autoType' => 'require',
    'loadFile' => $container->getParameter('kernel.root_dir') . '/init_includes.php'
);