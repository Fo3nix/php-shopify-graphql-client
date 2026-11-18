<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationPriceListUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "input"];

    protected $id;
    protected $input;

    /**
     * The ID of the price list to update.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The input data used to update the price list.
     */
    public function setInput(ShopifyPriceListUpdateInputInputObject $shopifyPriceListUpdateInputInputObject): static
    {
        $this->input = $shopifyPriceListUpdateInputInputObject;

        return $this;
    }
}
