<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationDiscountCodeAppUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "codeAppDiscount"];

    protected $id;
    protected $codeAppDiscount;

    /**
     * The ID of the discount to update.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The input fields required to update the discount.
     */
    public function setCodeAppDiscount(ShopifyDiscountCodeAppInputInputObject $shopifyDiscountCodeAppInputInputObject): static
    {
        $this->codeAppDiscount = $shopifyDiscountCodeAppInputInputObject;

        return $this;
    }
}
