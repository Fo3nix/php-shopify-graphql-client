<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCollectionUnpublishArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * Specify a collection to unpublish and the sales channels to remove it from.
     */
    public function setInput(ShopifyCollectionUnpublishInputInputObject $shopifyCollectionUnpublishInputInputObject): static
    {
        $this->input = $shopifyCollectionUnpublishInputInputObject;

        return $this;
    }
}
