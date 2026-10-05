<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

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
