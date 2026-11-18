<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationPriceListFixedPricesAddArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["priceListId", "prices"];

    protected $priceListId;
    protected $prices;

    /**
     * The ID of the price list to which the fixed prices will be added or updated.
     */
    public function setPriceListId($priceListId): static
    {
        $this->priceListId = $priceListId;

        return $this;
    }

    /**
     * The list of fixed prices to add or update in the price list.
     */
    public function setPrices(array $prices): static
    {
        $this->prices = $prices;

        return $this;
    }
}
