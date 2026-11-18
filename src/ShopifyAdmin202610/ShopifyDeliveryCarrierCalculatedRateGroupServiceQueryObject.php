<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A carrier-provided service within a carrier-calculated rate group.
 *
 * Represents an individual service that the merchant has explicitly included or excluded.
 */
class ShopifyDeliveryCarrierCalculatedRateGroupServiceQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryCarrierCalculatedRateGroupService";

    /**
     * The name of the carrier-provided service.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * Whether this service is included or excluded at checkout.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }
}
