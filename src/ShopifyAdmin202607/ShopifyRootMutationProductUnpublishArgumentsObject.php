<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationProductUnpublishArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * Specifies the product to unpublish and the channel to unpublish it from.
     */
    public function setInput(ShopifyProductUnpublishInputInputObject $shopifyProductUnpublishInputInputObject): static
    {
        $this->input = $shopifyProductUnpublishInputInputObject;

        return $this;
    }
}
