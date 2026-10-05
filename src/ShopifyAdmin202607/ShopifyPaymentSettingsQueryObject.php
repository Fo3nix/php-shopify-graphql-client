<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPaymentSettingsQueryObject extends QueryObject
{
    const OBJECT_NAME = "PaymentSettings";

    public function selectSupportedDigitalWallets()
    {
        $this->selectField("supportedDigitalWallets");

        return $this;
    }
}
