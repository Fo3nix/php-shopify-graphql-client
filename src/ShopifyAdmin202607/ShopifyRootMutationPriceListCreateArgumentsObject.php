<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationPriceListCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The properties of the new price list.
     */
    public function setInput(ShopifyPriceListCreateInputInputObject $shopifyPriceListCreateInputInputObject): static
    {
        $this->input = $shopifyPriceListCreateInputInputObject;

        return $this;
    }
}
