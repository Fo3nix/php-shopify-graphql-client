<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCustomerSendAccountInviteEmailArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["customerId"];

    protected $customerId;
    protected $email;

    /**
     * The ID of the customer to whom an account invite email is to be sent.
     */
    public function setCustomerId($customerId): static
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * Specifies the account invite email fields.
     */
    public function setEmail(ShopifyEmailInputInputObject $shopifyEmailInputInputObject): static
    {
        $this->email = $shopifyEmailInputInputObject;

        return $this;
    }
}
