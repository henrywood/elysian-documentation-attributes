<?php

namespace Elysian\DocumentationAttributes\Attributes;

use Elysian\DocumentationAttributes\Enums\HttpMethod;

use Attribute;

#[Attribute(Attribute::TARGET_METHOD | Attribute::TARGET_FUNCTION)]
class ELYBackendURLInfo {

	public function __construct(
		public string $name,
		public string $prename,
		public string $url,
		public string $docuser,
		public bool $hmanaged,
		public string $desc,
		public HttpMethod $method = HttpMethod::GET,
		public bool $sst = true,
		public string $requiresAuth = "UNKNOWN"
	) {}
}

