<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a pickup delivery method.
 *
 * This input accepts partial input. When a field is not provided,
 * its prior value is left unchanged.
 */
class ShopifySubscriptionDeliveryMethodPickupInputInputObject extends InputObject
{
    protected $pickupOption;

    /**
     * The details of the pickup method to use.
     */
    public function setPickupOption(ShopifySubscriptionDeliveryMethodPickupOptionInputInputObject $shopifySubscriptionDeliveryMethodPickupOptionInputInputObject): static
    {
        $this->pickupOption = $shopifySubscriptionDeliveryMethodPickupOptionInputInputObject;

        return $this;
    }
}
