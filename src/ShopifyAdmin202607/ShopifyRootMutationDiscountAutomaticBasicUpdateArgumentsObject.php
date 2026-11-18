<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationDiscountAutomaticBasicUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "automaticBasicDiscount"];

    protected $id;
    protected $automaticBasicDiscount;

    /**
     * The ID of the automatic amount off discount to update.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The input data used to update the automatic amount off discount.
     */
    public function setAutomaticBasicDiscount(ShopifyDiscountAutomaticBasicInputInputObject $shopifyDiscountAutomaticBasicInputInputObject): static
    {
        $this->automaticBasicDiscount = $shopifyDiscountAutomaticBasicInputInputObject;

        return $this;
    }
}
