<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationChannelCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The input fields for creating the channel.
     */
    public function setInput(ShopifyChannelCreateInputInputObject $shopifyChannelCreateInputInputObject): static
    {
        $this->input = $shopifyChannelCreateInputInputObject;

        return $this;
    }
}
