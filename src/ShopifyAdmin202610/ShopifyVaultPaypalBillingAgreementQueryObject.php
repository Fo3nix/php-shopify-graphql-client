<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyVaultPaypalBillingAgreementQueryObject extends QueryObject
{
    const OBJECT_NAME = "VaultPaypalBillingAgreement";

    public function selectInactive()
    {
        $this->selectField("inactive");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectPaypalAccountEmail()
    {
        $this->selectField("paypalAccountEmail");

        return $this;
    }
}
