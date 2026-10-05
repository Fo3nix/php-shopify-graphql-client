<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionContractCalculationCadenceQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionContractCalculationCadence";

    public function selectCount()
    {
        $this->selectField("count");

        return $this;
    }

    public function selectUnit()
    {
        $this->selectField("unit");

        return $this;
    }
}
