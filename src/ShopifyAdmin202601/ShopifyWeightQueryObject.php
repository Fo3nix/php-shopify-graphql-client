<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * A weight measurement with its numeric value and unit. Used throughout the API, for example in shipping calculations, delivery conditions, order line items, and inventory measurements.
 *
 * The weight combines a decimal value with a standard unit of measurement to ensure consistent weight handling across different regional systems.
 */
class ShopifyWeightQueryObject extends QueryObject
{
    const OBJECT_NAME = "Weight";

    /**
     * The unit of measurement for `value`.
     */
    public function selectUnit(): static
    {
        $this->selectField("unit");

        return $this;
    }

    /**
     * The weight value using the unit system specified with `unit`.
     */
    public function selectValue(): static
    {
        $this->selectField("value");

        return $this;
    }
}
