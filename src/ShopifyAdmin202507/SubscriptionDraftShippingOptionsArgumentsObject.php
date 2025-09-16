<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class SubscriptionDraftShippingOptionsArgumentsObject extends ArgumentsObject
{
    protected $deliveryAddress;

    public function setDeliveryAddress(MailingAddressInputInputObject $mailingAddressInputInputObject)
    {
        $this->deliveryAddress = $mailingAddressInputInputObject;

        return $this;
    }
}
