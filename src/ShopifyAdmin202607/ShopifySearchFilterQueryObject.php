<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A filter in a search query represented by a key value pair.
 */
class ShopifySearchFilterQueryObject extends QueryObject
{
    const OBJECT_NAME = "SearchFilter";

    /**
     * The key of the search filter.
     */
    public function selectKey(): static
    {
        $this->selectField("key");

        return $this;
    }

    /**
     * The value of the search filter.
     */
    public function selectValue(): static
    {
        $this->selectField("value");

        return $this;
    }
}
