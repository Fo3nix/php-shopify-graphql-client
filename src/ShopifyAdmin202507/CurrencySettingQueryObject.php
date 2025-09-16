<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CurrencySettingQueryObject extends QueryObject
{
    const OBJECT_NAME = "CurrencySetting";

    public function selectCurrencyCode()
    {
        $this->selectField("currencyCode");

        return $this;
    }

    public function selectCurrencyName()
    {
        $this->selectField("currencyName");

        return $this;
    }

    public function selectEnabled()
    {
        $this->selectField("enabled");

        return $this;
    }

    public function selectManualRate()
    {
        $this->selectField("manualRate");

        return $this;
    }

    public function selectRateUpdatedAt()
    {
        $this->selectField("rateUpdatedAt");

        return $this;
    }
}
