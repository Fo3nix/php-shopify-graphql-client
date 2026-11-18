<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The resolved price inclusivity attributes.
 */
class ShopifyResolvedPriceInclusivityQueryObject extends QueryObject
{
    const OBJECT_NAME = "ResolvedPriceInclusivity";

    /**
     * Whether duties are included in the price.
     */
    public function selectDutiesIncluded(): static
    {
        $this->selectField("dutiesIncluded");

        return $this;
    }

    /**
     * Whether taxes are included in the price.
     */
    public function selectTaxesIncluded(): static
    {
        $this->selectField("taxesIncluded");

        return $this;
    }
}
