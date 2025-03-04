<?php

namespace GenericMethodTags;

use function PHPStan\Testing\assertType;

/**
 * @method TVal doThing<TVal of mixed>(TVal $param)
 */
class Test
{
	public function __call(): mixed
	{
	}
}

function test(int $int, string $string): void
{
	$test = new Test();

	assertType('int', $test->doThing($int));
	assertType('string', $test->doThing($string));
}
