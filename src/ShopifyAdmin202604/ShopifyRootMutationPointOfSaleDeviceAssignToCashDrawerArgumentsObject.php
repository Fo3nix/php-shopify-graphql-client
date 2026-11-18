<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationPointOfSaleDeviceAssignToCashDrawerArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["cashDrawerId", "pointOfSaleDeviceId"];

    protected $cashDrawerId;
    protected $pointOfSaleDeviceId;

    /**
     * The cash drawer to assign the device to.
     */
    public function setCashDrawerId($cashDrawerId): static
    {
        $this->cashDrawerId = $cashDrawerId;

        return $this;
    }

    /**
     * The point of sale device to assign.
     */
    public function setPointOfSaleDeviceId($pointOfSaleDeviceId): static
    {
        $this->pointOfSaleDeviceId = $pointOfSaleDeviceId;

        return $this;
    }
}
