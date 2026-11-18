<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents the body of a theme file.
 */
class ShopifyOnlineStoreThemeFileBodyTextQueryObject extends QueryObject
{
    const OBJECT_NAME = "OnlineStoreThemeFileBodyText";

    /**
     * The body of the theme file.
     */
    public function selectContent(): static
    {
        $this->selectField("content");

        return $this;
    }
}
