<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationOrderEditRemoveDiscountArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "discountApplicationId"];

    protected $id;
    protected $discountApplicationId;

    /**
     * The ID of the [calculated order](https://shopify.dev/api/admin-graphql/latest/objects/calculatedorder)
     * or the order edit session to edit. This is the edit from which the discount is removed.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The ID of the [calculated discount application](https://shopify.dev/api/admin-graphql/latest/interfaces/calculateddiscountapplication)
     * to remove.
     */
    public function setDiscountApplicationId($discountApplicationId): static
    {
        $this->discountApplicationId = $discountApplicationId;

        return $this;
    }
}
