<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Local pickup settings associated with a location.
 */
class ShopifyDeliveryLocalPickupSettingsQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryLocalPickupSettings";

    /**
     * Additional instructions or information related to the local pickup.
     */
    public function selectInstructions(): static
    {
        $this->selectField("instructions");

        return $this;
    }

    /**
     * The estimated pickup time to show customers at checkout.
     */
    public function selectPickupTime(): static
    {
        $this->selectField("pickupTime");

        return $this;
    }
}
