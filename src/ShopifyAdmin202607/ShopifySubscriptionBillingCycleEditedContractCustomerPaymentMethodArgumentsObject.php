<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifySubscriptionBillingCycleEditedContractCustomerPaymentMethodArgumentsObject extends ArgumentsObject
{
    protected $showRevoked;

    /**
     * Whether to show the customer's revoked payment method.
     */
    public function setShowRevoked($showRevoked): static
    {
        $this->showRevoked = $showRevoked;

        return $this;
    }
}
