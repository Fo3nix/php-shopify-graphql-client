<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationDiscountAutomaticAppUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "automaticAppDiscount"];

    protected $id;
    protected $automaticAppDiscount;

    /**
     * The ID of the automatic discount to update.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The input fields required to update the automatic discount.
     */
    public function setAutomaticAppDiscount(ShopifyDiscountAutomaticAppInputInputObject $shopifyDiscountAutomaticAppInputInputObject): static
    {
        $this->automaticAppDiscount = $shopifyDiscountAutomaticAppInputInputObject;

        return $this;
    }
}
