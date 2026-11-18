<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCollectionRemoveProductsArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "productIds"];

    protected $id;
    protected $productIds;

    /**
     * The ID of the collection to remove products from. The ID must reference an existing collection.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The IDs of products to remove from the collection. The mutation doesn't validate that the products belong to the collection or whether the products exist.
     */
    public function setProductIds(array $productIds): static
    {
        $this->productIds = $productIds;

        return $this;
    }
}
