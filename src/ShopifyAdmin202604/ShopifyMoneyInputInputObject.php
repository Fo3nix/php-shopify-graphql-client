<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for a monetary value with currency.
 */
class ShopifyMoneyInputInputObject extends InputObject
{
    const REQUIRED = ["amount", "currencyCode"];

    protected $amount;
    protected $currencyCode;

    /**
     * Decimal money amount.
     */
    public function setAmount($amount): static
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Currency of the money.
     */
    public function setCurrencyCode($shopifyCurrencyCode): static
    {
        $this->currencyCode = new RawObject($shopifyCurrencyCode);

        return $this;
    }
}
