<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationOrderInvoiceSendArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;
    protected $email;

    /**
     * The order associated with the invoice.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The email input fields for the order invoice. The `bcc` and `from` fields should be store or staff account emails.
     */
    public function setEmail(ShopifyEmailInputInputObject $shopifyEmailInputInputObject): static
    {
        $this->email = $shopifyEmailInputInputObject;

        return $this;
    }
}
