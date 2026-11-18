<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * Specifies delivery method fields for a subscription draft.
 * This is an input union: one, and only one, field can be provided.
 * The field provided will determine which delivery method is to be used.
 */
class ShopifySubscriptionDeliveryMethodInputInputObject extends InputObject
{
    protected $shipping;
    protected $localDelivery;
    protected $pickup;

    /**
     * The input fields for the shipping delivery method.
     */
    public function setShipping(ShopifySubscriptionDeliveryMethodShippingInputInputObject $shopifySubscriptionDeliveryMethodShippingInputInputObject): static
    {
        $this->shipping = $shopifySubscriptionDeliveryMethodShippingInputInputObject;

        return $this;
    }

    /**
     * The input fields for the local delivery method.
     */
    public function setLocalDelivery(ShopifySubscriptionDeliveryMethodLocalDeliveryInputInputObject $shopifySubscriptionDeliveryMethodLocalDeliveryInputInputObject): static
    {
        $this->localDelivery = $shopifySubscriptionDeliveryMethodLocalDeliveryInputInputObject;

        return $this;
    }

    /**
     * The input fields for the pickup delivery method.
     */
    public function setPickup(ShopifySubscriptionDeliveryMethodPickupInputInputObject $shopifySubscriptionDeliveryMethodPickupInputInputObject): static
    {
        $this->pickup = $shopifySubscriptionDeliveryMethodPickupInputInputObject;

        return $this;
    }
}
