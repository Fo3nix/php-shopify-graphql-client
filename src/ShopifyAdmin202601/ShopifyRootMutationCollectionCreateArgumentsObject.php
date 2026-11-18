<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCollectionCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The properties to use when creating the collection.
     */
    public function setInput(ShopifyCollectionInputInputObject $shopifyCollectionInputInputObject): static
    {
        $this->input = $shopifyCollectionInputInputObject;

        return $this;
    }
}
