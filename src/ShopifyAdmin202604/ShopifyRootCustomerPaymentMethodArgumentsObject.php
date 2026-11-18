<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootCustomerPaymentMethodArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;
    protected $showRevoked;

    /**
     * The ID of the CustomerPaymentMethod to return.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Whether to show the customer's revoked payment method.
     */
    public function setShowRevoked($showRevoked): static
    {
        $this->showRevoked = $showRevoked;

        return $this;
    }
}
