<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationMobilePlatformApplicationCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The input to create a mobile platform application.
     */
    public function setInput(ShopifyMobilePlatformApplicationCreateInputInputObject $shopifyMobilePlatformApplicationCreateInputInputObject): static
    {
        $this->input = $shopifyMobilePlatformApplicationCreateInputInputObject;

        return $this;
    }
}
