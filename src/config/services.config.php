<?php

use Symfony\Component\PropertyAccess\PropertyAccess;
use Towersystems\Import\Importer\ImporterResult;
use Towersystems\Import\StopWatch\StopWatch;
use Zend\ServiceManager\AbstractFactory\ConfigAbstractFactory;

return [

	ConfigAbstractFactory::class => [
		ImporterResult::class => [
			StopWatch::class,
		],
	],

	'dependencies' => [
		'invokables' => [
			PropertyAccess::class,
			StopWatch::class,
		],

		'shared' => [
			ImporterResult::class => false,
		],
	],

];