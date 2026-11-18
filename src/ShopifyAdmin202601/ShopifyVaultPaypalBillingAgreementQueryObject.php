<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a paypal billing agreement payment instrument.
 */
class ShopifyVaultPaypalBillingAgreementQueryObject extends QueryObject
{
    const OBJECT_NAME = "VaultPaypalBillingAgreement";

    /**
     * Whether the paypal billing agreement is inactive.
     */
    public function selectInactive(): static
    {
        $this->selectField("inactive");

        return $this;
    }

    /**
     * The paypal account name.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The paypal account email address.
     */
    public function selectPaypalAccountEmail(): static
    {
        $this->selectField("paypalAccountEmail");

        return $this;
    }
}
