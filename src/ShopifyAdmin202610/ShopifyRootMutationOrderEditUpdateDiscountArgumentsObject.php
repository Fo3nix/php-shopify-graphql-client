<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationOrderEditUpdateDiscountArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "discount", "discountApplicationId"];

    protected $id;
    protected $discount;
    protected $discountApplicationId;

    /**
     * The ID of the [calculated order](https://shopify.dev/api/admin-graphql/latest/objects/calculatedorder)
     * or the order edit session to edit. This is the edit used to update the discount.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The updated discount.
     */
    public function setDiscount(ShopifyOrderEditAppliedDiscountInputInputObject $shopifyOrderEditAppliedDiscountInputInputObject): static
    {
        $this->discount = $shopifyOrderEditAppliedDiscountInputInputObject;

        return $this;
    }

    /**
     * The ID of the [calculated discount application](https://shopify.dev/api/admin-graphql/latest/interfaces/calculateddiscountapplication)
     * to update.
     */
    public function setDiscountApplicationId($discountApplicationId): static
    {
        $this->discountApplicationId = $discountApplicationId;

        return $this;
    }
}
