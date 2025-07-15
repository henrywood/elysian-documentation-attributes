<?php

namespace Elysian\\DocumentationAttributes\\Attributes;

enum HttpMethod: string {
    case GET = 'GET';
    case POST = 'POST';
    case PUT = 'PUT';
    case DELETE = 'DELETE';
}

#[\Attribute(\Attribute::TARGET_METHOD | \Attribute::TARGET_FUNCTION)]
class BackendURLInfo
{
    public function __construct(
        public string $name,
        public string $prename,
        public string $url,
        public string $docuser,
        public bool $hmanaged,
        public string $desc,
        public HttpMethod $method = HttpMethod::GET,
        public bool $sst = true,
        public string $requiresAUth = "UNKNOWN"
    ) {}
}
