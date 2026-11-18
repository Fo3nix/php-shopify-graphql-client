<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A component that's included in a bundle consolidated option selection.
 */
class ShopifyComponentizedProductsBundleConsolidatedOptionSelectionComponentQueryObject extends QueryObject
{
    const OBJECT_NAME = "ComponentizedProductsBundleConsolidatedOptionSelectionComponent";

    /**
     * The ID of the component's option that's included in this consolidated option selection.
     */
    public function selectOptionId(): static
    {
        $this->selectField("optionId");

        return $this;
    }

    /**
     * The value of the component's option value that's included in this consolidated option selection.
     */
    public function selectValue(): static
    {
        $this->selectField("value");

        return $this;
    }
}
