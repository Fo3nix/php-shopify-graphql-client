<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\InputObject;

class MoneyInputInputObject extends InputObject
{
    protected $amount;
    protected $currencyCode;

    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }
}
