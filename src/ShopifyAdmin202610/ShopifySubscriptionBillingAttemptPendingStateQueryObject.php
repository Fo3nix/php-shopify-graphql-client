<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionBillingAttemptPendingStateQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingAttemptPendingState";

    public function selectProcessing()
    {
        $this->selectField("processing");

        return $this;
    }
}
