<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for selecting specific products to include in a collection.
 */
class ShopifyCollectionInclusionProductSelectionInputInputObject extends InputObject
{
    const REQUIRED = ["productId"];

    protected $productId;
    protected $variantIds;

    /**
     * The ID of the product to include in the collection.
     */
    public function setProductId($productId): static
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * The IDs of the product variants to include in the collection.
     */
    public function setVariantIds(array $variantIds): static
    {
        $this->variantIds = $variantIds;

        return $this;
    }
}
