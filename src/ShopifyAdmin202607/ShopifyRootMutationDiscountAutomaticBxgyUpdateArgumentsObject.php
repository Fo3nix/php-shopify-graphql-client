<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationDiscountAutomaticBxgyUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "automaticBxgyDiscount"];

    protected $id;
    protected $automaticBxgyDiscount;

    /**
     * The ID of the automatic BXGY discount to update.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The input data used to update the automatic BXGY discount.
     */
    public function setAutomaticBxgyDiscount(ShopifyDiscountAutomaticBxgyInputInputObject $shopifyDiscountAutomaticBxgyInputInputObject): static
    {
        $this->automaticBxgyDiscount = $shopifyDiscountAutomaticBxgyInputInputObject;

        return $this;
    }
}
