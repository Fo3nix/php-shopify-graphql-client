<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

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
