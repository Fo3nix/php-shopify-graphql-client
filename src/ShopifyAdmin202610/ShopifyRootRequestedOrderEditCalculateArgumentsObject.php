<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootRequestedOrderEditCalculateArgumentsObject extends ArgumentsObject
{
    protected $input;

    public function setInput(ShopifyCalculateRequestedOrderEditInputInputObject $shopifyCalculateRequestedOrderEditInputInputObject)
    {
        $this->input = $shopifyCalculateRequestedOrderEditInputInputObject;

        return $this;
    }
}
