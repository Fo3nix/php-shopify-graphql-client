<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class RootAppDiscountTypeArgumentsObject extends ArgumentsObject
{
    protected $functionId;

    public function setFunctionId($functionId)
    {
        $this->functionId = $functionId;

        return $this;
    }
}
