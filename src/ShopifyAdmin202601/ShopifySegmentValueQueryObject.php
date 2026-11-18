<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * A list of suggested values associated with an individual segment. A
 * segment is a group of members, such as customers, that meet specific
 * criteria.
 */
class ShopifySegmentValueQueryObject extends QueryObject
{
    const OBJECT_NAME = "SegmentValue";

    /**
     * The localized version of the value's name. This name is displayed to the merchant.
     */
    public function selectLocalizedValue(): static
    {
        $this->selectField("localizedValue");

        return $this;
    }

    /**
     * The name of the query associated with the suggestion.
     */
    public function selectQueryName(): static
    {
        $this->selectField("queryName");

        return $this;
    }
}
