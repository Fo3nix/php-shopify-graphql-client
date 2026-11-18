<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A setting for a presentment currency.
 */
class ShopifyCurrencySettingQueryObject extends QueryObject
{
    const OBJECT_NAME = "CurrencySetting";

    /**
     * The currency's ISO code.
     */
    public function selectCurrencyCode(): static
    {
        $this->selectField("currencyCode");

        return $this;
    }

    /**
     * The full name of the currency.
     */
    public function selectCurrencyName(): static
    {
        $this->selectField("currencyName");

        return $this;
    }

    /**
     * Whether the currency is enabled or not. An enabled currency setting is visible to buyers and allows orders to be generated with that currency as presentment.
     */
    public function selectEnabled(): static
    {
        $this->selectField("enabled");

        return $this;
    }

    /**
     * The manual rate, if enabled, that applies to this currency when converting from shop currency. This rate is specific to the associated market's currency setting.
     */
    public function selectManualRate(): static
    {
        $this->selectField("manualRate");

        return $this;
    }

    /**
     * The date and time when the active exchange rate for the currency was last modified. It can be the automatic rate's creation date, or the manual rate's last updated at date if active.
     */
    public function selectRateUpdatedAt(): static
    {
        $this->selectField("rateUpdatedAt");

        return $this;
    }
}
