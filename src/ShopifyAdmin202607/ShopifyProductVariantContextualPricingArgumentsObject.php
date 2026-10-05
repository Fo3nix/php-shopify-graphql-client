<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyProductVariantContextualPricingArgumentsObject extends ArgumentsObject
{
    protected $context;

    public function setContext(ShopifyContextualPricingContextInputObject $shopifyContextualPricingContextInputObject)
    {
        $this->context = $shopifyContextualPricingContextInputObject;

        return $this;
    }
}
