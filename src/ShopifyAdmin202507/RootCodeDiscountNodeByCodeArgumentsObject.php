<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class RootCodeDiscountNodeByCodeArgumentsObject extends ArgumentsObject
{
    protected $code;

    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }
}
