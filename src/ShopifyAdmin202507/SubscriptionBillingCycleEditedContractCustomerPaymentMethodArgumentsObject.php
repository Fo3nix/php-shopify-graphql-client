<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class SubscriptionBillingCycleEditedContractCustomerPaymentMethodArgumentsObject extends ArgumentsObject
{
    protected $showRevoked;

    public function setShowRevoked($showRevoked)
    {
        $this->showRevoked = $showRevoked;

        return $this;
    }
}
