<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * A file error. This typically occurs when there is an issue with the file itself causing it to fail validation.
 * Check the file before attempting to upload again.
 */
class ShopifyFileErrorQueryObject extends QueryObject
{
    const OBJECT_NAME = "FileError";

    /**
     * Code representing the type of error.
     */
    public function selectCode(): static
    {
        $this->selectField("code");

        return $this;
    }

    /**
     * Additional details regarding the error.
     */
    public function selectDetails(): static
    {
        $this->selectField("details");

        return $this;
    }

    /**
     * Translated error message.
     */
    public function selectMessage(): static
    {
        $this->selectField("message");

        return $this;
    }
}
