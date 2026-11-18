<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationPriceListFixedPricesByProductUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["priceListId"];

    protected $pricesToAdd;
    protected $pricesToDeleteByProductIds;
    protected $priceListId;

    /**
     * A list of `PriceListProductPriceInput` that identifies which products to update the fixed prices for.
     */
    public function setPricesToAdd(array $pricesToAdd): static
    {
        $this->pricesToAdd = $pricesToAdd;

        return $this;
    }

    /**
     * A list of product IDs that identifies which products to remove the fixed prices for.
     */
    public function setPricesToDeleteByProductIds(array $pricesToDeleteByProductIds): static
    {
        $this->pricesToDeleteByProductIds = $pricesToDeleteByProductIds;

        return $this;
    }

    /**
     * The price list to update the prices for.
     */
    public function setPriceListId($priceListId): static
    {
        $this->priceListId = $priceListId;

        return $this;
    }
}
