<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationOrderUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The attributes of the updated order.
     */
    public function setInput(ShopifyOrderInputInputObject $shopifyOrderInputInputObject): static
    {
        $this->input = $shopifyOrderInputInputObject;

        return $this;
    }
}
