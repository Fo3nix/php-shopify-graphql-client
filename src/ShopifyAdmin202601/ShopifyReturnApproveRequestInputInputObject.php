<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for approving a customer's return request.
 */
class ShopifyReturnApproveRequestInputInputObject extends InputObject
{
    const REQUIRED = ["id"];

    protected $id;
    protected $notifyCustomer;

    /**
     * The ID of the return that's being approved.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Notify the customer when a return request is approved.
     * The customer will only receive a notification if `Order.email` is present.
     */
    public function setNotifyCustomer($notifyCustomer): static
    {
        $this->notifyCustomer = $notifyCustomer;

        return $this;
    }
}
