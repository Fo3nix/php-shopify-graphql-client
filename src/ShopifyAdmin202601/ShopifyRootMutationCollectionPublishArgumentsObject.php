<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCollectionPublishArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * Specify a collection to publish and the sales channels to publish it to.
     */
    public function setInput(ShopifyCollectionPublishInputInputObject $shopifyCollectionPublishInputInputObject): static
    {
        $this->input = $shopifyCollectionPublishInputInputObject;

        return $this;
    }
}
