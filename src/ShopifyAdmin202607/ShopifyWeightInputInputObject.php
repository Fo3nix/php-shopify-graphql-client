<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for the weight unit and value inputs.
 */
class ShopifyWeightInputInputObject extends InputObject
{
    const REQUIRED = ["value", "unit"];

    protected $value;
    protected $unit;

    /**
     * The weight value using the unit system specified with `weight_unit`.
     */
    public function setValue($value): static
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Unit of measurement for `value`.
     */
    public function setUnit($shopifyWeightUnit): static
    {
        $this->unit = new RawObject($shopifyWeightUnit);

        return $this;
    }
}
