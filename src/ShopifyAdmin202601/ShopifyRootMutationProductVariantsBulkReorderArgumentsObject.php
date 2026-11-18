<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationProductVariantsBulkReorderArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["productId", "positions"];

    protected $productId;
    protected $positions;

    /**
     * The product ID of the variants to be reordered.
     */
    public function setProductId($productId): static
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * An array of variant positions.
     */
    public function setPositions(array $positions): static
    {
        $this->positions = $positions;

        return $this;
    }
}
