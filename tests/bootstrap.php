<?php

$am = \AspectMock\Kernel::getInstance();
$am->init([
	"debug" => true,
	"includePaths" => [
		__DIR__ . "/../src",
		__DIR__ . "/../vendor/guzzlehttp",
		__DIR__ . "/../vendor/egulias",
		__DIR__ . "/../vendor/doctrine"
	],
	"cacheDir"  => "/tmp/rocket-chat"
]);