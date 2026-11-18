<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a Shopify product taxonomy value.
 */
class ShopifyTaxonomyValueQueryObject extends QueryObject
{
    const OBJECT_NAME = "TaxonomyValue";

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The name of the product taxonomy value. For example, Red.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }
}
