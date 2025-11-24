<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifySubscriptionBillingCycleEditedContractCustomerPaymentMethodArgumentsObject extends ArgumentsObject
{
    protected $showRevoked;

    public function setShowRevoked($showRevoked)
    {
        $this->showRevoked = $showRevoked;

        return $this;
    }
}
