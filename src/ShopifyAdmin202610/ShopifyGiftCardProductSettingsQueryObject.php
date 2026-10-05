<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyGiftCardProductSettingsQueryObject extends QueryObject
{
    const OBJECT_NAME = "GiftCardProductSettings";

    public function selectCrossCurrencyRedeemable()
    {
        $this->selectField("crossCurrencyRedeemable");

        return $this;
    }

    public function selectIssuanceCurrency()
    {
        $this->selectField("issuanceCurrency");

        return $this;
    }
}
