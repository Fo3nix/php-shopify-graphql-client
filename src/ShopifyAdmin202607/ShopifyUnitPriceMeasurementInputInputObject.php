<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for the measurement used to calculate a unit price for a product variant (e.g. $9.99 / 100ml).
 */
class ShopifyUnitPriceMeasurementInputInputObject extends InputObject
{
    protected $quantityValue;
    protected $quantityUnit;
    protected $referenceValue;
    protected $referenceUnit;

    /**
     * The quantity value for the unit price measurement.
     */
    public function setQuantityValue($quantityValue): static
    {
        $this->quantityValue = $quantityValue;

        return $this;
    }

    /**
     * The quantity unit for the unit price measurement.
     */
    public function setQuantityUnit($shopifyUnitPriceMeasurementMeasuredUnit): static
    {
        $this->quantityUnit = new RawObject($shopifyUnitPriceMeasurementMeasuredUnit);

        return $this;
    }

    /**
     * The reference value for the unit price measurement.
     */
    public function setReferenceValue($referenceValue): static
    {
        $this->referenceValue = $referenceValue;

        return $this;
    }

    /**
     * The reference unit for the unit price measurement.
     */
    public function setReferenceUnit($shopifyUnitPriceMeasurementMeasuredUnit): static
    {
        $this->referenceUnit = new RawObject($shopifyUnitPriceMeasurementMeasuredUnit);

        return $this;
    }
}
