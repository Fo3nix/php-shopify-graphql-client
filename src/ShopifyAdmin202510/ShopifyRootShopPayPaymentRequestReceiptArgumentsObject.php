<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootShopPayPaymentRequestReceiptArgumentsObject extends ArgumentsObject
{
    protected $token;

    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }
}
