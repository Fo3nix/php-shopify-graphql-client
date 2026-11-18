<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for providing the fields and values to use when creating or updating a fixed price list price.
 */
class ShopifyPriceListPriceInputInputObject extends InputObject
{
    const REQUIRED = ["variantId", "price"];

    protected $variantId;
    protected $price;
    protected $compareAtPrice;

    /**
     * The product variant ID associated with the price list price.
     */
    public function setVariantId($variantId): static
    {
        $this->variantId = $variantId;

        return $this;
    }

    /**
     * The price of the product variant on this price list.
     */
    public function setPrice(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->price = $shopifyMoneyInputInputObject;

        return $this;
    }

    /**
     * The compare-at price of the product variant on this price list.
     */
    public function setCompareAtPrice(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->compareAtPrice = $shopifyMoneyInputInputObject;

        return $this;
    }
}
