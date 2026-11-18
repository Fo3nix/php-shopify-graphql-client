<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for including or excluding a carrier-provided service in a rate group.
 */
class ShopifyDeliveryCarrierCalculatedRateGroupServiceInputInputObject extends InputObject
{
    const REQUIRED = ["name", "status"];

    protected $name;
    protected $status;

    /**
     * The name of the carrier-provided service.
     */
    public function setName($name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Whether this service is included or excluded at checkout.
     */
    public function setStatus($shopifyDeliveryCarrierCalculatedRateGroupServiceStatus): static
    {
        $this->status = new RawObject($shopifyDeliveryCarrierCalculatedRateGroupServiceStatus);

        return $this;
    }
}
