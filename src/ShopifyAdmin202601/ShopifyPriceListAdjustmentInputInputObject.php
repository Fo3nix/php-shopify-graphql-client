<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields to set a price list adjustment.
 */
class ShopifyPriceListAdjustmentInputInputObject extends InputObject
{
    const REQUIRED = ["value", "type"];

    protected $value;
    protected $type;

    /**
     * The value of the price adjustment as specified by the `type`.
     */
    public function setValue($value): static
    {
        $this->value = $value;

        return $this;
    }

    /**
     * The type of price adjustment, such as percentage increase or decrease.
     */
    public function setType($shopifyPriceListAdjustmentType): static
    {
        $this->type = new RawObject($shopifyPriceListAdjustmentType);

        return $this;
    }
}
