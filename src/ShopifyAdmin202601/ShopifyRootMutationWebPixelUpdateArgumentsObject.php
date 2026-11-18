<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationWebPixelUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "webPixel"];

    protected $id;
    protected $webPixel;

    /**
     * The ID of the web pixel to update.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The web pixel settings in JSON format.
     */
    public function setWebPixel(ShopifyWebPixelInputInputObject $shopifyWebPixelInputInputObject): static
    {
        $this->webPixel = $shopifyWebPixelInputInputObject;

        return $this;
    }
}
