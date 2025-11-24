<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\InputObject;

class ShopifyMoneyInputInputObject extends InputObject
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
