<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationDiscountCodeBxgyUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "bxgyCodeDiscount"];

    protected $id;
    protected $bxgyCodeDiscount;

    /**
     * The ID of the BXGY code discount to update.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The input data used to update the BXGY code discount.
     */
    public function setBxgyCodeDiscount(ShopifyDiscountCodeBxgyInputInputObject $shopifyDiscountCodeBxgyInputInputObject): static
    {
        $this->bxgyCodeDiscount = $shopifyDiscountCodeBxgyInputInputObject;

        return $this;
    }
}
