<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationProductUpdateArgumentsObject extends ArgumentsObject
{
    protected $product;
    protected $media;

    /**
     * The updated properties for a product.
     */
    public function setProduct(ShopifyProductUpdateInputInputObject $shopifyProductUpdateInputInputObject): static
    {
        $this->product = $shopifyProductUpdateInputInputObject;

        return $this;
    }

    /**
     * List of new media to be added to the product.
     */
    public function setMedia(array $media): static
    {
        $this->media = $media;

        return $this;
    }
}
