<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShopPayPaymentRequestImageQueryObject extends QueryObject
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
