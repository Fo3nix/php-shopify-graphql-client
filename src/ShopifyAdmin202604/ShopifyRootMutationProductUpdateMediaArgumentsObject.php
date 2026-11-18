<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationProductUpdateMediaArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["productId", "media"];

    protected $productId;
    protected $media;

    /**
     * Specifies the product on which media will be updated.
     */
    public function setProductId($productId): static
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * A list of media updates.
     */
    public function setMedia(array $media): static
    {
        $this->media = $media;

        return $this;
    }
}
