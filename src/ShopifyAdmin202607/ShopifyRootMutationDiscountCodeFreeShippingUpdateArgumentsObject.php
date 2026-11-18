<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationDiscountCodeFreeShippingUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "freeShippingCodeDiscount"];

    protected $id;
    protected $freeShippingCodeDiscount;

    /**
     * The ID of the discount code to update.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The input data used to update the discount code.
     */
    public function setFreeShippingCodeDiscount(ShopifyDiscountCodeFreeShippingInputInputObject $shopifyDiscountCodeFreeShippingInputInputObject): static
    {
        $this->freeShippingCodeDiscount = $shopifyDiscountCodeFreeShippingInputInputObject;

        return $this;
    }
}
