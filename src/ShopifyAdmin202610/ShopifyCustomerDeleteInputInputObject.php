<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields to delete a customer.
 */
class ShopifyCustomerDeleteInputInputObject extends InputObject
{
    const REQUIRED = ["id"];

    protected $id;

    /**
     * The ID of the customer to delete.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
