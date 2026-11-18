<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A Shopify product taxonomy attribute.
 */
class ShopifyTaxonomyAttributeQueryObject extends QueryObject
{
    const OBJECT_NAME = "TaxonomyAttribute";

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }
}
