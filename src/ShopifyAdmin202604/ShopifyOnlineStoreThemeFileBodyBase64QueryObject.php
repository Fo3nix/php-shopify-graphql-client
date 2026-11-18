<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents the base64 encoded body of a theme file.
 */
class ShopifyOnlineStoreThemeFileBodyBase64QueryObject extends QueryObject
{
    const OBJECT_NAME = "OnlineStoreThemeFileBodyBase64";

    /**
     * The body of the theme file, base64 encoded.
     */
    public function selectContentBase64(): static
    {
        $this->selectField("contentBase64");

        return $this;
    }
}
