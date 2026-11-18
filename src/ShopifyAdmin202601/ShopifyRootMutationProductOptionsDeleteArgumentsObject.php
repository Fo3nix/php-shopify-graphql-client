<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootMutationProductOptionsDeleteArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["productId", "options"];

    protected $productId;
    protected $options;
    protected $strategy;

    /**
     * ID of the product from which to delete the options.
     */
    public function setProductId($productId): static
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * IDs of the options to delete from the product.
     */
    public function setOptions(array $options): static
    {
        $this->options = $options;

        return $this;
    }

    /**
     * The strategy defines which behavior the mutation should observe,such as how to handle a situation where deleting an option would result in duplicate variants.
     */
    public function setStrategy($shopifyProductOptionDeleteStrategy): static
    {
        $this->strategy = new RawObject($shopifyProductOptionDeleteStrategy);

        return $this;
    }
}
