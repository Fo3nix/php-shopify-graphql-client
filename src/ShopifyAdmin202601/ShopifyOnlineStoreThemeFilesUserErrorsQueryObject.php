<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * User errors for theme file operations.
 */
class ShopifyOnlineStoreThemeFilesUserErrorsQueryObject extends QueryObject
{
    const OBJECT_NAME = "OnlineStoreThemeFilesUserErrors";

    /**
     * The error code.
     */
    public function selectCode(): static
    {
        $this->selectField("code");

        return $this;
    }

    /**
     * The path to the input field that caused the error.
     */
    public function selectField_(): static
    {
        $this->selectField("field");

        return $this;
    }

    /**
     * The filename of the theme file.
     */
    public function selectFilename(): static
    {
        $this->selectField("filename");

        return $this;
    }

    /**
     * The error message.
     */
    public function selectMessage(): static
    {
        $this->selectField("message");

        return $this;
    }
}
