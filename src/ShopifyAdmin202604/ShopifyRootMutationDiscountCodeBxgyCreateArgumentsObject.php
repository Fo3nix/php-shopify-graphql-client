<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationDiscountCodeBxgyCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["bxgyCodeDiscount"];

    protected $bxgyCodeDiscount;

    /**
     * The input data used to create the BXGY code discount.
     */
    public function setBxgyCodeDiscount(ShopifyDiscountCodeBxgyInputInputObject $shopifyDiscountCodeBxgyInputInputObject): static
    {
        $this->bxgyCodeDiscount = $shopifyDiscountCodeBxgyInputInputObject;

        return $this;
    }
}
