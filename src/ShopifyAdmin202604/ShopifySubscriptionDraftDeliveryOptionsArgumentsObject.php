<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifySubscriptionDraftDeliveryOptionsArgumentsObject extends ArgumentsObject
{
    protected $deliveryAddress;

    public function setDeliveryAddress(ShopifyMailingAddressInputInputObject $shopifyMailingAddressInputInputObject)
    {
        $this->deliveryAddress = $shopifyMailingAddressInputInputObject;

        return $this;
    }
}
