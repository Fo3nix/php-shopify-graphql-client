<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * Specifies shipping delivery method fields.
 *
 * This input accepts partial input. When a field is not provided,
 * its prior value is left unchanged.
 */
class ShopifySubscriptionDeliveryMethodShippingInputInputObject extends InputObject
{
    protected $address;
    protected $shippingOption;

    /**
     * The address to ship to.
     */
    public function setAddress(ShopifyMailingAddressInputInputObject $shopifyMailingAddressInputInputObject): static
    {
        $this->address = $shopifyMailingAddressInputInputObject;

        return $this;
    }

    /**
     * The details of the shipping method to use.
     */
    public function setShippingOption(ShopifySubscriptionDeliveryMethodShippingOptionInputInputObject $shopifySubscriptionDeliveryMethodShippingOptionInputInputObject): static
    {
        $this->shippingOption = $shopifySubscriptionDeliveryMethodShippingOptionInputInputObject;

        return $this;
    }
}
