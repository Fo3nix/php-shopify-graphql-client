<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for an inventory item measurement.
 */
class ShopifyInventoryItemMeasurementInputInputObject extends InputObject
{
    protected $weight;
    protected $shippingPackageId;

    /**
     * The weight of the inventory item.
     */
    public function setWeight(ShopifyWeightInputInputObject $shopifyWeightInputInputObject): static
    {
        $this->weight = $shopifyWeightInputInputObject;

        return $this;
    }

    /**
     * Shipping package associated with inventory item.
     */
    public function setShippingPackageId($shippingPackageId): static
    {
        $this->shippingPackageId = $shippingPackageId;

        return $this;
    }
}
