<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootMutationProductChangeStatusArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["productId", "status"];

    protected $productId;
    protected $status;

    /**
     * The ID of the product.
     */
    public function setProductId($productId): static
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * The status to be assigned to the product.
     */
    public function setStatus($shopifyProductStatus): static
    {
        $this->status = new RawObject($shopifyProductStatus);

        return $this;
    }
}
