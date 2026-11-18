<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Settings related to payments.
 */
class ShopifyPaymentSettingsQueryObject extends QueryObject
{
    const OBJECT_NAME = "PaymentSettings";

    /**
     * List of the digital wallets which the shop supports.
     */
    public function selectSupportedDigitalWallets(): static
    {
        $this->selectField("supportedDigitalWallets");

        return $this;
    }
}
