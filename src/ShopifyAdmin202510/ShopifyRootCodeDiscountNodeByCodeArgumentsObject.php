<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootCodeDiscountNodeByCodeArgumentsObject extends ArgumentsObject
{
    protected $code;

    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }
}
