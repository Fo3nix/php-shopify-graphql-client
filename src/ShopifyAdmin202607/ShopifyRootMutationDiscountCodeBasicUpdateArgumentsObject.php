<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationDiscountCodeBasicUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "basicCodeDiscount"];

    protected $id;
    protected $basicCodeDiscount;

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
    public function setBasicCodeDiscount(ShopifyDiscountCodeBasicInputInputObject $shopifyDiscountCodeBasicInputInputObject): static
    {
        $this->basicCodeDiscount = $shopifyDiscountCodeBasicInputInputObject;

        return $this;
    }
}
