<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationDiscountAutomaticFreeShippingCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["freeShippingAutomaticDiscount"];

    protected $freeShippingAutomaticDiscount;

    /**
     * The input data used to create the automatic free shipping discount.
     */
    public function setFreeShippingAutomaticDiscount(ShopifyDiscountAutomaticFreeShippingInputInputObject $shopifyDiscountAutomaticFreeShippingInputInputObject): static
    {
        $this->freeShippingAutomaticDiscount = $shopifyDiscountAutomaticFreeShippingInputInputObject;

        return $this;
    }
}
