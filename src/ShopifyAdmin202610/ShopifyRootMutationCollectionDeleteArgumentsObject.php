<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCollectionDeleteArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The collection to delete.
     */
    public function setInput(ShopifyCollectionDeleteInputInputObject $shopifyCollectionDeleteInputInputObject): static
    {
        $this->input = $shopifyCollectionDeleteInputInputObject;

        return $this;
    }
}
