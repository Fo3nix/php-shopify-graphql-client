<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMoneyV2QueryObject extends QueryObject
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
