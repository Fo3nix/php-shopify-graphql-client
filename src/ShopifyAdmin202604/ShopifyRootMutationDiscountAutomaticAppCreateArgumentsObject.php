<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationDiscountAutomaticAppCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["automaticAppDiscount"];

    protected $automaticAppDiscount;

    /**
     * The input data used to create the automatic discount.
     */
    public function setAutomaticAppDiscount(ShopifyDiscountAutomaticAppInputInputObject $shopifyDiscountAutomaticAppInputInputObject): static
    {
        $this->automaticAppDiscount = $shopifyDiscountAutomaticAppInputInputObject;

        return $this;
    }
}
