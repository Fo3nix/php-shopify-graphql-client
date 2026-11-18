<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationQuantityRulesDeleteArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["priceListId", "variantIds"];

    protected $priceListId;
    protected $variantIds;

    /**
     * The ID of the price list from which the quantity rules will be deleted.
     */
    public function setPriceListId($priceListId): static
    {
        $this->priceListId = $priceListId;

        return $this;
    }

    /**
     * A list of product variant IDs whose quantity rules will be removed from the price list.
     */
    public function setVariantIds(array $variantIds): static
    {
        $this->variantIds = $variantIds;

        return $this;
    }
}
