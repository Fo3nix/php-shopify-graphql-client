<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MoneyV2QueryObject extends QueryObject
{
    const OBJECT_NAME = "MoneyV2";

    public function selectAmount()
    {
        $this->selectField("amount");

        return $this;
    }

    public function selectCurrencyCode()
    {
        $this->selectField("currencyCode");

        return $this;
    }
}
