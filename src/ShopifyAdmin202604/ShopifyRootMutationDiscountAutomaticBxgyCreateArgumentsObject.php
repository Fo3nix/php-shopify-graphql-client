<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationDiscountAutomaticBxgyCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["automaticBxgyDiscount"];

    protected $automaticBxgyDiscount;

    /**
     * The input data used to create the automatic BXGY discount.
     */
    public function setAutomaticBxgyDiscount(ShopifyDiscountAutomaticBxgyInputInputObject $shopifyDiscountAutomaticBxgyInputInputObject): static
    {
        $this->automaticBxgyDiscount = $shopifyDiscountAutomaticBxgyInputInputObject;

        return $this;
    }
}
