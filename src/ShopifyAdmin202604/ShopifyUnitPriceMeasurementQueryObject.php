<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The measurement used to calculate a unit price for a product variant (e.g. $9.99 / 100ml).
 */
class ShopifyUnitPriceMeasurementQueryObject extends QueryObject
{
    const OBJECT_NAME = "UnitPriceMeasurement";

    /**
     * The type of unit of measurement for the unit price measurement.
     */
    public function selectMeasuredType(): static
    {
        $this->selectField("measuredType");

        return $this;
    }

    /**
     * The quantity unit for the unit price measurement.
     */
    public function selectQuantityUnit(): static
    {
        $this->selectField("quantityUnit");

        return $this;
    }

    /**
     * The quantity value for the unit price measurement.
     */
    public function selectQuantityValue(): static
    {
        $this->selectField("quantityValue");

        return $this;
    }

    /**
     * The reference unit for the unit price measurement.
     */
    public function selectReferenceUnit(): static
    {
        $this->selectField("referenceUnit");

        return $this;
    }

    /**
     * The reference value for the unit price measurement.
     */
    public function selectReferenceValue(): static
    {
        $this->selectField("referenceValue");

        return $this;
    }
}
