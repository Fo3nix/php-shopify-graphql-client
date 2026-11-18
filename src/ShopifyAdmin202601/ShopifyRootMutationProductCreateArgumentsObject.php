<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationProductCreateArgumentsObject extends ArgumentsObject
{
    protected $product;
    protected $media;

    /**
     * The attributes of the new product.
     */
    public function setProduct(ShopifyProductCreateInputInputObject $shopifyProductCreateInputInputObject): static
    {
        $this->product = $shopifyProductCreateInputInputObject;

        return $this;
    }

    /**
     * The media to add to the product.
     */
    public function setMedia(array $media): static
    {
        $this->media = $media;

        return $this;
    }
}
