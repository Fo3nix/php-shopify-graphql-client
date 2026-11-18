<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationProductPublishArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * Specifies the product to publish and the channels to publish it to.
     */
    public function setInput(ShopifyProductPublishInputInputObject $shopifyProductPublishInputInputObject): static
    {
        $this->input = $shopifyProductPublishInputInputObject;

        return $this;
    }
}
