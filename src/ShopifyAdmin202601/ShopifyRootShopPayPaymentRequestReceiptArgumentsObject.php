<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootShopPayPaymentRequestReceiptArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["token"];

    protected $token;

    /**
     * Unique identifier of the payment request receipt.
     */
    public function setToken($token): static
    {
        $this->token = $token;

        return $this;
    }
}
