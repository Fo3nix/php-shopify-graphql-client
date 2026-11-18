<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationProductFeedCreateArgumentsObject extends ArgumentsObject
{
    protected $input;

    /**
     * The properties of the new product feed.
     */
    public function setInput(ShopifyProductFeedInputInputObject $shopifyProductFeedInputInputObject): static
    {
        $this->input = $shopifyProductFeedInputInputObject;

        return $this;
    }
}
