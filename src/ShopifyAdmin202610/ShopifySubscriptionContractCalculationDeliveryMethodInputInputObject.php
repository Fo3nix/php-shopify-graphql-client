<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for delivery used during a contract calculation.
 * This is a oneOf input: one, and only one, field can be provided.
 *
 * Provide `shipping`, `localDelivery`, or `pickup` to set the committed delivery method.
 * Provide `none` to explicitly set no delivery method (digital-only subscriptions).
 * Provide `fetchAvailableDeliveryOptions` to discover the available delivery options for an
 * address without changing the contract's committed delivery method. The resulting calculation
 * can't be committed. Create a new calculation with the chosen delivery method, then commit it.
 */
class ShopifySubscriptionContractCalculationDeliveryMethodInputInputObject extends InputObject
{
    protected $shipping;
    protected $localDelivery;
    protected $pickup;
    protected $none;
    protected $fetchAvailableDeliveryOptions;

    /**
     * The input fields for the shipping delivery method.
     */
    public function setShipping(ShopifySubscriptionContractCalculationDeliveryMethodShippingInputInputObject $shopifySubscriptionContractCalculationDeliveryMethodShippingInputInputObject): static
    {
        $this->shipping = $shopifySubscriptionContractCalculationDeliveryMethodShippingInputInputObject;

        return $this;
    }

    /**
     * The input fields for the local delivery method.
     */
    public function setLocalDelivery(ShopifySubscriptionContractCalculationDeliveryMethodLocalDeliveryInputInputObject $shopifySubscriptionContractCalculationDeliveryMethodLocalDeliveryInputInputObject): static
    {
        $this->localDelivery = $shopifySubscriptionContractCalculationDeliveryMethodLocalDeliveryInputInputObject;

        return $this;
    }

    /**
     * The input fields for the pickup delivery method.
     */
    public function setPickup(ShopifySubscriptionContractCalculationDeliveryMethodPickupInputInputObject $shopifySubscriptionContractCalculationDeliveryMethodPickupInputInputObject): static
    {
        $this->pickup = $shopifySubscriptionContractCalculationDeliveryMethodPickupInputInputObject;

        return $this;
    }

    /**
     * Explicitly set no delivery method (digital-only subscriptions). Must be `true`.
     */
    public function setNone($none): static
    {
        $this->none = $none;

        return $this;
    }

    /**
     * Discover the available delivery options for an address without changing the contract's committed delivery method. The resulting calculation can't be committed. Create a new calculation with the chosen delivery method, then commit it. Mutually exclusive with setting a delivery method.
     */
    public function setFetchAvailableDeliveryOptions(ShopifySubscriptionContractCalculationFetchDeliveryOptionsInputInputObject $shopifySubscriptionContractCalculationFetchDeliveryOptionsInputInputObject): static
    {
        $this->fetchAvailableDeliveryOptions = $shopifySubscriptionContractCalculationFetchDeliveryOptionsInputInputObject;

        return $this;
    }
}
