<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * A component option value related to a bundle line.
 */
class ShopifyProductBundleComponentOptionSelectionValueQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductBundleComponentOptionSelectionValue";

    /**
     * Selection status of the option.
     */
    public function selectSelectionStatus(): static
    {
        $this->selectField("selectionStatus");

        return $this;
    }

    /**
     * The value of the option.
     */
    public function selectValue(): static
    {
        $this->selectField("value");

        return $this;
    }
}
