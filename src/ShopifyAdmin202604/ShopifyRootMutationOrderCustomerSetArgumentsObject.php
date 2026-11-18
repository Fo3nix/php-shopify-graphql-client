<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationOrderCustomerSetArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["orderId", "customerId"];

    protected $orderId;
    protected $customerId;

    /**
     * The ID of the order having a customer set.
     */
    public function setOrderId($orderId): static
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * The ID of the customer being set on the order.
     */
    public function setCustomerId($customerId): static
    {
        $this->customerId = $customerId;

        return $this;
    }
}
