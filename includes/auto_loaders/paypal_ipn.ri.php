<?php

use Symfony\Component\HttpFoundation\Request;

$container->get("plugin")->loadPlugins($container);

// some global vars to be used on Zencart as well
$request = Request::createFromGlobals();

$core_event = new \Zepluf\Bundle\StoreBundle\Event\CoreEvent();
