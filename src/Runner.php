<?php

namespace Hexlet\php\Runner;

function run()
{
	$collection = collect(['taylor', 'abigail', 'ivan'])->map(function ($name) {
		return strtoupper($name);
	});

	return $collection;
}

