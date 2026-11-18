<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents the result of a read operation performed on a theme asset.
 */
class ShopifyOnlineStoreThemeFileReadResultQueryObject extends QueryObject
{
    const OBJECT_NAME = "OnlineStoreThemeFileReadResult";

    /**
     * Type that indicates the result of the operation.
     */
    public function selectCode(): static
    {
        $this->selectField("code");

        return $this;
    }

    /**
     * Unique identifier associated with the operation and the theme file.
     */
    public function selectFilename(): static
    {
        $this->selectField("filename");

        return $this;
    }
}
