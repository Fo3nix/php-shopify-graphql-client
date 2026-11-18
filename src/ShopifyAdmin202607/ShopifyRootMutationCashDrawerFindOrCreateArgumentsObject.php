<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCashDrawerFindOrCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["locationId", "name", "pointOfSaleDeviceId"];

    protected $locationId;
    protected $name;
    protected $pointOfSaleDeviceId;

    /**
     * The location the cash drawer is located in.
     */
    public function setLocationId($locationId): static
    {
        $this->locationId = $locationId;

        return $this;
    }

    /**
     * The name of the cash drawer.
     */
    public function setName($name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * The point of sale device to assign to the cash drawer.
     */
    public function setPointOfSaleDeviceId($pointOfSaleDeviceId): static
    {
        $this->pointOfSaleDeviceId = $pointOfSaleDeviceId;

        return $this;
    }
}
