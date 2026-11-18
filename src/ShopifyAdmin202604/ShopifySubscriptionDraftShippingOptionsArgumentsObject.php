<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifySubscriptionDraftShippingOptionsArgumentsObject extends ArgumentsObject
{
    protected $deliveryAddress;

    /**
     * The address to delivery the subscription contract to.
     */
    public function setDeliveryAddress(ShopifyMailingAddressInputInputObject $shopifyMailingAddressInputInputObject): static
    {
        $this->deliveryAddress = $shopifyMailingAddressInputInputObject;

        return $this;
    }
}
