<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCollectionAddProductsV2ArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "productIds"];

    protected $id;
    protected $productIds;

    /**
     * The ID of the collection that's being updated.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The IDs of the products that are being added to the collection. If the collection's sort order is manual, the products will be added in the order in which they are provided.
     */
    public function setProductIds(array $productIds): static
    {
        $this->productIds = $productIds;

        return $this;
    }
}
