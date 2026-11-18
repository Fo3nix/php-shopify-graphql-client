<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents the url of the body of a theme file.
 */
class ShopifyOnlineStoreThemeFileBodyUrlQueryObject extends QueryObject
{
    const OBJECT_NAME = "OnlineStoreThemeFileBodyUrl";

    /**
     * The short lived url for the body of the theme file.
     */
    public function selectUrl(): static
    {
        $this->selectField("url");

        return $this;
    }
}
