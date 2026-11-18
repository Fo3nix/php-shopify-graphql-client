<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifySubscriptionDraftCustomerPaymentMethodArgumentsObject extends ArgumentsObject
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
