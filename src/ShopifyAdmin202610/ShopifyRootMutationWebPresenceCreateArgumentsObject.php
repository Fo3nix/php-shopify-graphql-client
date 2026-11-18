<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationWebPresenceCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The details of the web presence to be created.
     */
    public function setInput(ShopifyWebPresenceCreateInputInputObject $shopifyWebPresenceCreateInputInputObject): static
    {
        $this->input = $shopifyWebPresenceCreateInputInputObject;

        return $this;
    }
}
