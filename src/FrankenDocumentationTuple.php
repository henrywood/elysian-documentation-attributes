<?php

namespace Elysian\\DocumentationAttributes;

use ReflectionMethod;
use ReflectionFunction;
use Elysian\DocumentationAttributes\Attributes\ELYBackendURLInfo;

class FrankenDocumentationTuple
{
	public function __construct(
		public string $file,
		public ReflectionMethod|ReflectionFunction $func,
		public ?ELYBackendURLInfo $attribute = null
	) {}
}
