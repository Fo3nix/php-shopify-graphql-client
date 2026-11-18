<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCollectionUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The updated properties for the collection.
     */
    public function setInput(ShopifyCollectionInputInputObject $shopifyCollectionInputInputObject): static
    {
        $this->input = $shopifyCollectionInputInputObject;

        return $this;
    }
}
