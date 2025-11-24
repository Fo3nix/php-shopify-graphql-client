<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCurrencyFormatsQueryObject extends QueryObject
{
    const OBJECT_NAME = "CurrencyFormats";

    public function selectMoneyFormat()
    {
        $this->selectField("moneyFormat");

        return $this;
    }

    public function selectMoneyInEmailsFormat()
    {
        $this->selectField("moneyInEmailsFormat");

        return $this;
    }

    public function selectMoneyWithCurrencyFormat()
    {
        $this->selectField("moneyWithCurrencyFormat");

        return $this;
    }

    public function selectMoneyWithCurrencyInEmailsFormat()
    {
        $this->selectField("moneyWithCurrencyInEmailsFormat");

        return $this;
    }
}
