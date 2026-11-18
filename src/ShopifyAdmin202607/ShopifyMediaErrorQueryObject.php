<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a media error. This typically occurs when there is an issue with the media itself causing it to fail validation.
 * Check the media before attempting to upload again.
 */
class ShopifyMediaErrorQueryObject extends QueryObject
{
    const OBJECT_NAME = "MediaError";

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
