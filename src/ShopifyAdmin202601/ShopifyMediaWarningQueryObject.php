<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a media warning. This occurs when there is a non-blocking concern regarding your media.
 * Consider reviewing your media to ensure it is correct and its parameters are as expected.
 */
class ShopifyMediaWarningQueryObject extends QueryObject
{
    const OBJECT_NAME = "MediaWarning";

    /**
     * The code representing the type of warning.
     */
    public function selectCode(): static
    {
        $this->selectField("code");

        return $this;
    }

    /**
     * Translated warning message.
     */
    public function selectMessage(): static
    {
        $this->selectField("message");

        return $this;
    }
}
