<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A navigation item, holding basic link attributes.
 */
class ShopifyNavigationItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "NavigationItem";

    /**
     * The unique identifier of the navigation item.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The name of the navigation item.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }

    /**
     * The URL of the page that the navigation item links to.
     */
    public function selectUrl(): static
    {
        $this->selectField("url");

        return $this;
    }
}
