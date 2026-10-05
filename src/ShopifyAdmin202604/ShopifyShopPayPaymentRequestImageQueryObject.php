<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShopPayPaymentRequestImageQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopPayPaymentRequestImage";

    public function selectAlt()
    {
        $this->selectField("alt");

        return $this;
    }

    public function selectUrl()
    {
        $this->selectField("url");

        return $this;
    }
}
