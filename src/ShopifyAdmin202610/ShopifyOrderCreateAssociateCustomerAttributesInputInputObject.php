<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for identifying an existing customer to associate with the order.
 */
class ShopifyOrderCreateAssociateCustomerAttributesInputInputObject extends InputObject
{
    protected $id;
    protected $email;

    /**
     * The customer to associate to the order.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The email of the customer to associate to the order.
     *
     *               > Note:
     *               > If both this email input field and the email on `OrderCreateOrderInput` are provided, this field will
     *               > take precedence.
     */
    public function setEmail($email): static
    {
        $this->email = $email;

        return $this;
    }
}
