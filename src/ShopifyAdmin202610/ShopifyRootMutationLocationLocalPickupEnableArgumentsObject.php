<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationLocationLocalPickupEnableArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["localPickupSettings"];

    protected $localPickupSettings;

    /**
     * The settings required to enable local pickup for a location.
     */
    public function setLocalPickupSettings(ShopifyDeliveryLocationLocalPickupEnableInputInputObject $shopifyDeliveryLocationLocalPickupEnableInputInputObject): static
    {
        $this->localPickupSettings = $shopifyDeliveryLocationLocalPickupEnableInputInputObject;

        return $this;
    }
}
