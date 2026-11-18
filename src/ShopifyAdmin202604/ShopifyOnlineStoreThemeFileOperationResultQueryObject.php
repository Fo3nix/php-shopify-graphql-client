<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents the result of a copy, delete, or write operation performed on a theme file.
 */
class ShopifyOnlineStoreThemeFileOperationResultQueryObject extends QueryObject
{
    const OBJECT_NAME = "OnlineStoreThemeFileOperationResult";

    /**
     * The md5 digest of the theme file for data integrity.
     */
    public function selectChecksumMd5(): static
    {
        $this->selectField("checksumMd5");

        return $this;
    }

    /**
     * The date and time when the theme file was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * Unique identifier of the theme file.
     */
    public function selectFilename(): static
    {
        $this->selectField("filename");

        return $this;
    }

    /**
     * The size of the theme file in bytes.
     */
    public function selectSize(): static
    {
        $this->selectField("size");

        return $this;
    }

    /**
     * The date and time when the theme file was last updated.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
