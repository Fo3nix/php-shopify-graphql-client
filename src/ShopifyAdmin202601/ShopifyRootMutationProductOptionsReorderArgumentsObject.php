<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationProductOptionsReorderArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["productId", "options"];

    protected $productId;
    protected $options;

    /**
     * The ID of the product to update.
     */
    public function setProductId($productId): static
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Options to reorder on the product.
     */
    public function setOptions(array $options): static
    {
        $this->options = $options;

        return $this;
    }
}
