<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class PaymentSettingsQueryObject extends QueryObject
{
    const OBJECT_NAME = "PaymentSettings";

    public function selectSupportedDigitalWallets()
    {
        $this->selectField("supportedDigitalWallets");

        return $this;
    }
}
