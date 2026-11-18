<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationMarketUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "input"];

    protected $id;
    protected $input;

    /**
     * The ID of the market to update.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The properties to update.
     */
    public function setInput(ShopifyMarketUpdateInputInputObject $shopifyMarketUpdateInputInputObject): static
    {
        $this->input = $shopifyMarketUpdateInputInputObject;

        return $this;
    }
}
