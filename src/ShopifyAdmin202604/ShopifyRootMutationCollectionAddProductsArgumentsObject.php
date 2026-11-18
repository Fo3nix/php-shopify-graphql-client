<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCollectionAddProductsArgumentsObject extends ArgumentsObject
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
     * The IDs of the products that are being added to the collection.
     * If any of the products is already present in the input collection,
     * then an error is raised and no products are added.
     */
    public function setProductIds(array $productIds): static
    {
        $this->productIds = $productIds;

        return $this;
    }
}
