<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields representing the price for all variants of a product.
 */
class ShopifyPriceListProductPriceInputInputObject extends InputObject
{
    const REQUIRED = ["productId", "price"];

    protected $productId;
    protected $price;
    protected $compareAtPrice;

    /**
     * Specifies the ID of the product to update its variants for.
     */
    public function setProductId($productId): static
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Specifies the price and currency to apply to the product's variants on the price list.
     */
    public function setPrice(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->price = $shopifyMoneyInputInputObject;

        return $this;
    }

    /**
     * Specifies the compare-at price and currency to apply to the product's variants on the price list.
     */
    public function setCompareAtPrice(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->compareAtPrice = $shopifyMoneyInputInputObject;

        return $this;
    }
}
