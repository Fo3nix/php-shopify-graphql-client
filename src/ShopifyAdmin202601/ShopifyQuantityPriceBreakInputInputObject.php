<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields and values to use when creating quantity price breaks.
 */
class ShopifyQuantityPriceBreakInputInputObject extends InputObject
{
    const REQUIRED = ["variantId", "price", "minimumQuantity"];

    protected $variantId;
    protected $price;
    protected $minimumQuantity;

    /**
     * The product variant ID associated with the quantity break.
     */
    public function setVariantId($variantId): static
    {
        $this->variantId = $variantId;

        return $this;
    }

    /**
     * The price of the product variant when its quantity meets the break's minimum quantity.
     */
    public function setPrice(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->price = $shopifyMoneyInputInputObject;

        return $this;
    }

    /**
     * The minimum required quantity for a variant to qualify for this price.
     */
    public function setMinimumQuantity($minimumQuantity): static
    {
        $this->minimumQuantity = $minimumQuantity;

        return $this;
    }
}
