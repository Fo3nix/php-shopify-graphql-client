<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationMarketCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The properties of the new market.
     */
    public function setInput(ShopifyMarketCreateInputInputObject $shopifyMarketCreateInputInputObject): static
    {
        $this->input = $shopifyMarketCreateInputInputObject;

        return $this;
    }
}
