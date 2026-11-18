<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationPriceListFixedPricesUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["priceListId", "pricesToAdd", "variantIdsToDelete"];

    protected $priceListId;
    protected $pricesToAdd;
    protected $variantIdsToDelete;

    /**
     * The price list that the prices will be updated against.
     */
    public function setPriceListId($priceListId): static
    {
        $this->priceListId = $priceListId;

        return $this;
    }

    /**
     * The fixed prices to add.
     */
    public function setPricesToAdd(array $pricesToAdd): static
    {
        $this->pricesToAdd = $pricesToAdd;

        return $this;
    }

    /**
     * A list of product variant IDs to remove from the price list.
     */
    public function setVariantIdsToDelete(array $variantIdsToDelete): static
    {
        $this->variantIdsToDelete = $variantIdsToDelete;

        return $this;
    }
}
