<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyProductContextualPricingArgumentsObject extends ArgumentsObject
{
    protected $context;

    public function setContext(ShopifyContextualPricingContextInputObject $shopifyContextualPricingContextInputObject)
    {
        $this->context = $shopifyContextualPricingContextInputObject;

        return $this;
    }
}
