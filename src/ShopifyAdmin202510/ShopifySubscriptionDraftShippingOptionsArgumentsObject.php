<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifySubscriptionDraftShippingOptionsArgumentsObject extends ArgumentsObject
{
    protected $deliveryAddress;

    public function setDeliveryAddress(ShopifyMailingAddressInputInputObject $shopifyMailingAddressInputInputObject)
    {
        $this->deliveryAddress = $shopifyMailingAddressInputInputObject;

        return $this;
    }
}
