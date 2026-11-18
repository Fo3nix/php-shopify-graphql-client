<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationQuantityRulesAddArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["priceListId", "quantityRules"];

    protected $priceListId;
    protected $quantityRules;

    /**
     * The ID of the price list to which the quantity rules will be added or updated.
     */
    public function setPriceListId($priceListId): static
    {
        $this->priceListId = $priceListId;

        return $this;
    }

    /**
     * The list of quantity rules to add or update in the price list.
     */
    public function setQuantityRules(array $quantityRules): static
    {
        $this->quantityRules = $quantityRules;

        return $this;
    }
}
