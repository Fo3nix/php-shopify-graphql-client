<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifySubscriptionDraftDeliveryOptionsArgumentsObject extends ArgumentsObject
{
    protected $deliveryAddress;

    /**
     * The address to deliver the subscription contract to.
     */
    public function setDeliveryAddress(ShopifyMailingAddressInputInputObject $shopifyMailingAddressInputInputObject): static
    {
        $this->deliveryAddress = $shopifyMailingAddressInputInputObject;

        return $this;
    }
}
