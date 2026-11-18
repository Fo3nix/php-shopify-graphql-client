<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A precise monetary value and its associated currency. Combines a decimal amount with a three-letter currency code to express prices, costs, and other financial values throughout the API. For example, 12.99 USD.
 */
class ShopifyMoneyV2QueryObject extends QueryObject
{
    const OBJECT_NAME = "MoneyV2";

    /**
     * A monetary value in decimal format, allowing for precise representation of cents or fractional
     * currency. For example, 12.99.
     */
    public function selectAmount(): static
    {
        $this->selectField("amount");

        return $this;
    }

    /**
     * The three-letter currency code that represents a world currency used in a store. Currency codes
     * include standard [standard ISO 4217 codes](https://en.wikipedia.org/wiki/ISO_4217), legacy codes,
     * and non-standard codes. For example, USD.
     */
    public function selectCurrencyCode(): static
    {
        $this->selectField("currencyCode");

        return $this;
    }
}
