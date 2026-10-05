<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionContractCalculationPendingQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionContractCalculationPending";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }
}
