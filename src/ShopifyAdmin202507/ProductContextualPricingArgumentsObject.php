<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class ProductContextualPricingArgumentsObject extends ArgumentsObject
{
    protected $context;

    public function setContext(ContextualPricingContextInputObject $contextualPricingContextInputObject)
    {
        $this->context = $contextualPricingContextInputObject;

        return $this;
    }
}
