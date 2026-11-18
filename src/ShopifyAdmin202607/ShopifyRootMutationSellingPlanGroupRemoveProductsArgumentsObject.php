<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationSellingPlanGroupRemoveProductsArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "productIds"];

    protected $id;
    protected $productIds;

    /**
     * The ID of the selling plan group.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The IDs of the products to remove.
     */
    public function setProductIds(array $productIds): static
    {
        $this->productIds = $productIds;

        return $this;
    }
}
