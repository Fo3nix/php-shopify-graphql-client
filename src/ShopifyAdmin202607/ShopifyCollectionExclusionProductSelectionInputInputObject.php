<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for selecting specific products to exclude from a collection.
 */
class ShopifyCollectionExclusionProductSelectionInputInputObject extends InputObject
{
    const REQUIRED = ["productId"];

    protected $productId;

    /**
     * The ID of the product to exclude from the collection.
     */
    public function setProductId($productId): static
    {
        $this->productId = $productId;

        return $this;
    }
}
