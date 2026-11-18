<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationProductCreateMediaArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["productId", "media"];

    protected $productId;
    protected $media;

    /**
     * Specifies the product associated with the media.
     */
    public function setProductId($productId): static
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * List of new media to be added to a product.
     */
    public function setMedia(array $media): static
    {
        $this->media = $media;

        return $this;
    }
}
