<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class RootShopPayPaymentRequestReceiptArgumentsObject extends ArgumentsObject
{
    protected $token;

    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }
}
