<?php // lint >= 8.4

namespace OverridingFinalProperty;

class Foo
{

	final public $a;

	final protected $b;

	public private(set) $c;

	protected private(set) $d;

}

class Bar extends Foo
{

	public $a;

	public $b;

	public $c;

	public $d;

}
