<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationQuantityPricingByVariantUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["priceListId", "input"];

    protected $priceListId;
    protected $input;

    /**
     * The ID of the price list for which quantity pricing will be updated.
     */
    public function setPriceListId($priceListId): static
    {
        $this->priceListId = $priceListId;

        return $this;
    }

    /**
     * The input data used to update the quantity pricing in the price list.
     */
    public function setInput(ShopifyQuantityPricingByVariantUpdateInputInputObject $shopifyQuantityPricingByVariantUpdateInputInputObject): static
    {
        $this->input = $shopifyQuantityPricingByVariantUpdateInputInputObject;

        return $this;
    }
}
