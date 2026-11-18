<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationDiscountAutomaticBasicCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["automaticBasicDiscount"];

    protected $automaticBasicDiscount;

    /**
     * The input data used to create the automatic amount off discount.
     */
    public function setAutomaticBasicDiscount(ShopifyDiscountAutomaticBasicInputInputObject $shopifyDiscountAutomaticBasicInputInputObject): static
    {
        $this->automaticBasicDiscount = $shopifyDiscountAutomaticBasicInputInputObject;

        return $this;
    }
}
