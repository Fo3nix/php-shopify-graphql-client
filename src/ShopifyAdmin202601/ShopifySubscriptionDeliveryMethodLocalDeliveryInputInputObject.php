<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a local delivery method.
 *
 * This input accepts partial input. When a field is not provided,
 * its prior value is left unchanged.
 */
class ShopifySubscriptionDeliveryMethodLocalDeliveryInputInputObject extends InputObject
{
    protected $address;
    protected $localDeliveryOption;

    /**
     * The address to deliver to.
     */
    public function setAddress(ShopifyMailingAddressInputInputObject $shopifyMailingAddressInputInputObject): static
    {
        $this->address = $shopifyMailingAddressInputInputObject;

        return $this;
    }

    /**
     * The details of the local delivery method to use.
     */
    public function setLocalDeliveryOption(ShopifySubscriptionDeliveryMethodLocalDeliveryOptionInputInputObject $shopifySubscriptionDeliveryMethodLocalDeliveryOptionInputInputObject): static
    {
        $this->localDeliveryOption = $shopifySubscriptionDeliveryMethodLocalDeliveryOptionInputInputObject;

        return $this;
    }
}
