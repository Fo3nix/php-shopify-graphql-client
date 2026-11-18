<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields required to adjust the available quantity of a product variant at a location.
 */
class ShopifyInventoryAdjustmentInputInputObject extends InputObject
{
    const REQUIRED = ["locationId"];

    protected $locationId;
    protected $adjustment;
    protected $changeFromQuantity;

    /**
     * The ID of the location where the available quantity should be adjusted.
     */
    public function setLocationId($locationId): static
    {
        $this->locationId = $locationId;

        return $this;
    }

    /**
     * The adjustment of the available quantity at the location. If the value is `null`, then the product variant is no longer stocked at the location.
     */
    public function setAdjustment($adjustment): static
    {
        $this->adjustment = $adjustment;

        return $this;
    }

    /**
     * The quantity to compare against before applying the delta. This field is mandatory- you must explicitly pass in a value (even if it's `null`), or else you will get an error.
     */
    public function setChangeFromQuantity($changeFromQuantity): static
    {
        $this->changeFromQuantity = $changeFromQuantity;

        return $this;
    }
}
