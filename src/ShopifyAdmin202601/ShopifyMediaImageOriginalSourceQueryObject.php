<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The original source for an image.
 */
class ShopifyMediaImageOriginalSourceQueryObject extends QueryObject
{
    const OBJECT_NAME = "MediaImageOriginalSource";

    /**
     * The size of the original file in bytes.
     */
    public function selectFileSize(): static
    {
        $this->selectField("fileSize");

        return $this;
    }

    /**
     * The URL of the original image, valid only for a short period.
     */
    public function selectUrl(): static
    {
        $this->selectField("url");

        return $this;
    }
}
