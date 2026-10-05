<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootReturnCalculateArgumentsObject extends ArgumentsObject
{
    protected $input;

    public function setInput(ShopifyCalculateReturnInputInputObject $shopifyCalculateReturnInputInputObject)
    {
        $this->input = $shopifyCalculateReturnInputInputObject;

        return $this;
    }
}
