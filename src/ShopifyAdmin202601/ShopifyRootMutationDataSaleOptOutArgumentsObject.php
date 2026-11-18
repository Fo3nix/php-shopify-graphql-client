<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationDataSaleOptOutArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["email"];

    protected $email;

    /**
     * The email address of the customer to opt out of data sale.
     */
    public function setEmail($email): static
    {
        $this->email = $email;

        return $this;
    }
}
