<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationOrderEditAddLineItemDiscountArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "lineItemId", "discount"];

    protected $id;
    protected $lineItemId;
    protected $discount;

    /**
     * The ID of the [calculated order](https://shopify.dev/api/admin-graphql/latest/objects/calculatedorder)
     * or the order edit session to edit.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The ID of the calculated line item to add the discount to.
     */
    public function setLineItemId($lineItemId): static
    {
        $this->lineItemId = $lineItemId;

        return $this;
    }

    /**
     * The discount to add to the line item.
     */
    public function setDiscount(ShopifyOrderEditAppliedDiscountInputInputObject $shopifyOrderEditAppliedDiscountInputInputObject): static
    {
        $this->discount = $shopifyOrderEditAppliedDiscountInputInputObject;

        return $this;
    }
}
