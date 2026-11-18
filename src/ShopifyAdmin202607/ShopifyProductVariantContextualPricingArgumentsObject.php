<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyProductVariantContextualPricingArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["context"];

    protected $context;

    /**
     * The context used to generate contextual pricing for the variant.
     */
    public function setContext(ShopifyContextualPricingContextInputObject $shopifyContextualPricingContextInputObject): static
    {
        $this->context = $shopifyContextualPricingContextInputObject;

        return $this;
    }
}
