<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCollectionDuplicateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The input for duplicating a collection.
     */
    public function setInput(ShopifyCollectionDuplicateInputInputObject $shopifyCollectionDuplicateInputInputObject): static
    {
        $this->input = $shopifyCollectionDuplicateInputInputObject;

        return $this;
    }
}
