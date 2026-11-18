<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationDraftOrderInvoiceSendArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;
    protected $email;

    /**
     * Specifies the draft order to send the invoice for.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Specifies the draft order invoice email fields.
     */
    public function setEmail(ShopifyEmailInputInputObject $shopifyEmailInputInputObject): static
    {
        $this->email = $shopifyEmailInputInputObject;

        return $this;
    }
}
