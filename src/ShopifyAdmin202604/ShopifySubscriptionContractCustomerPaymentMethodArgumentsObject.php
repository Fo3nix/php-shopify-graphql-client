<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifySubscriptionContractCustomerPaymentMethodArgumentsObject extends ArgumentsObject
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
