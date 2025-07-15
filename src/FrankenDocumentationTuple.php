```php
<?php

namespace Elysian\\DocumentationAttributes;

use ReflectionMethod;
use ReflectionFunction;
use Elysian\\DocumentationAttributes\\Attributes\\BackendURLInfo;

class FrankenDocumentationTuple
{
    public function __construct(
        public string $file,
        public ReflectionMethod|ReflectionFunction $func,
        public ?BackendURLInfo $attribute = null
    ) {}
}
