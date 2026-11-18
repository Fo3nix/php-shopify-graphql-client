<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationWebPixelCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["webPixel"];

    protected $webPixel;

    /**
     * The web pixel settings in JSON format.
     */
    public function setWebPixel(ShopifyWebPixelInputInputObject $shopifyWebPixelInputInputObject): static
    {
        $this->webPixel = $shopifyWebPixelInputInputObject;

        return $this;
    }
}
