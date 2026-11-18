<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationDiscountCodeFreeShippingCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["freeShippingCodeDiscount"];

    protected $freeShippingCodeDiscount;

    /**
     * The input data used to create the discount code.
     */
    public function setFreeShippingCodeDiscount(ShopifyDiscountCodeFreeShippingInputInputObject $shopifyDiscountCodeFreeShippingInputInputObject): static
    {
        $this->freeShippingCodeDiscount = $shopifyDiscountCodeFreeShippingInputInputObject;

        return $this;
    }
}
