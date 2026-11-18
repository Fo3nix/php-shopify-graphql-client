<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for updating an exclusion condition based on collections.
 */
class ShopifyCollectionSourceExclusionConditionUpdateCollectionInputInputObject extends InputObject
{
    const REQUIRED = ["values"];

    protected $values;

    /**
     * The collection IDs whose products are excluded.
     */
    public function setValues(array $values): static
    {
        $this->values = $values;

        return $this;
    }
}
