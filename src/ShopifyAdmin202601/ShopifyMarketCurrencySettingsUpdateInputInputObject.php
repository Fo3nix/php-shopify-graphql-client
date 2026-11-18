<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields used to update the currency settings of a market.
 */
class ShopifyMarketCurrencySettingsUpdateInputInputObject extends InputObject
{
    protected $baseCurrency;
    protected $baseCurrencyManualRate;
    protected $localCurrencies;
    protected $roundingEnabled;

    /**
     * The currency which this market’s customers must use if local currencies are disabled.
     */
    public function setBaseCurrency($shopifyCurrencyCode): static
    {
        $this->baseCurrency = new RawObject($shopifyCurrencyCode);

        return $this;
    }

    /**
     * The manual exchange rate that will be used to convert shop currency prices. If null, then the automatic exchange rates will be used.
     */
    public function setBaseCurrencyManualRate($baseCurrencyManualRate): static
    {
        $this->baseCurrencyManualRate = $baseCurrencyManualRate;

        return $this;
    }

    /**
     * Whether or not local currencies are enabled. If enabled, then prices will
     * be converted to give each customer the best experience based on their
     * region. If disabled, then all customers in this market will see prices
     * in the market's base currency.
     */
    public function setLocalCurrencies($localCurrencies): static
    {
        $this->localCurrencies = $localCurrencies;

        return $this;
    }

    /**
     * Whether or not rounding is enabled on multi-currency prices.
     */
    public function setRoundingEnabled($roundingEnabled): static
    {
        $this->roundingEnabled = $roundingEnabled;

        return $this;
    }
}
