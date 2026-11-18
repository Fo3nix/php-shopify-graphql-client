<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationDiscountCodeBasicCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["basicCodeDiscount"];

    protected $basicCodeDiscount;

    /**
     * The input data used to create the discount code.
     */
    public function setBasicCodeDiscount(ShopifyDiscountCodeBasicInputInputObject $shopifyDiscountCodeBasicInputInputObject): static
    {
        $this->basicCodeDiscount = $shopifyDiscountCodeBasicInputInputObject;

        return $this;
    }
}
