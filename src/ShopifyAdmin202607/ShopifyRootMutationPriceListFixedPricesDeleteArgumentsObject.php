<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationPriceListFixedPricesDeleteArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["priceListId", "variantIds"];

    protected $priceListId;
    protected $variantIds;

    /**
     * The ID of the price list from which the fixed prices will be removed.
     */
    public function setPriceListId($priceListId): static
    {
        $this->priceListId = $priceListId;

        return $this;
    }

    /**
     * A list of product variant IDs whose fixed prices will be removed from the price list.
     */
    public function setVariantIds(array $variantIds): static
    {
        $this->variantIds = $variantIds;

        return $this;
    }
}
