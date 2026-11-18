<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationDiscountAutomaticFreeShippingUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "freeShippingAutomaticDiscount"];

    protected $id;
    protected $freeShippingAutomaticDiscount;

    /**
     * The ID of the automatic free shipping discount to update.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The input data used to update the automatic free shipping discount.
     */
    public function setFreeShippingAutomaticDiscount(ShopifyDiscountAutomaticFreeShippingInputInputObject $shopifyDiscountAutomaticFreeShippingInputInputObject): static
    {
        $this->freeShippingAutomaticDiscount = $shopifyDiscountAutomaticFreeShippingInputInputObject;

        return $this;
    }
}
