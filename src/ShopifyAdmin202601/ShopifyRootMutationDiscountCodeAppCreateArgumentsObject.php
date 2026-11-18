<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationDiscountCodeAppCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["codeAppDiscount"];

    protected $codeAppDiscount;

    /**
     * The input data used to create the discount.
     */
    public function setCodeAppDiscount(ShopifyDiscountCodeAppInputInputObject $shopifyDiscountCodeAppInputInputObject): static
    {
        $this->codeAppDiscount = $shopifyDiscountCodeAppInputInputObject;

        return $this;
    }
}
