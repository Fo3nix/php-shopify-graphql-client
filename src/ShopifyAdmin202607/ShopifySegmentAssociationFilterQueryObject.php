<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A filter that takes a value that's associated with an object. For example, the `tags` field is associated with the [`Customer`](/api/admin-graphql/latest/objects/Customer) object.
 */
class ShopifySegmentAssociationFilterQueryObject extends QueryObject
{
    const OBJECT_NAME = "SegmentAssociationFilter";

    /**
     * The localized name of the filter.
     */
    public function selectLocalizedName(): static
    {
        $this->selectField("localizedName");

        return $this;
    }

    /**
     * Whether a file can have multiple values for a single customer.
     */
    public function selectMultiValue(): static
    {
        $this->selectField("multiValue");

        return $this;
    }

    /**
     * The query name of the filter.
     */
    public function selectQueryName(): static
    {
        $this->selectField("queryName");

        return $this;
    }
}
