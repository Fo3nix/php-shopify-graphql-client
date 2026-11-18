<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationProductDeleteMediaArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["productId", "mediaIds"];

    protected $productId;
    protected $mediaIds;

    /**
     * Specifies the product ID from which the media will be deleted.
     */
    public function setProductId($productId): static
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * The media IDs to be deleted.
     */
    public function setMediaIds(array $mediaIds): static
    {
        $this->mediaIds = $mediaIds;

        return $this;
    }
}
