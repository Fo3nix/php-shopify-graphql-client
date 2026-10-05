<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionContractCalculationDiagnosticQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionContractCalculationDiagnostic";

    public function selectCode()
    {
        $this->selectField("code");

        return $this;
    }

    public function selectField_()
    {
        $this->selectField("field");

        return $this;
    }

    public function selectMessage()
    {
        $this->selectField("message");

        return $this;
    }
}
