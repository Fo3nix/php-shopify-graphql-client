<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A filter option is one possible value in a search filter.
 */
class ShopifyFilterOptionQueryObject extends QueryObject
{
    const OBJECT_NAME = "FilterOption";

    /**
     * The filter option's label for display purposes.
     */
    public function selectLabel(): static
    {
        $this->selectField("label");

        return $this;
    }

    /**
     * The filter option's value.
     */
    public function selectValue(): static
    {
        $this->selectField("value");

        return $this;
    }
}
