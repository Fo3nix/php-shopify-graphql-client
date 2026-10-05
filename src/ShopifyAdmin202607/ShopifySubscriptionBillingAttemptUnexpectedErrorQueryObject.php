<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionBillingAttemptUnexpectedErrorQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingAttemptUnexpectedError";

    public function selectMessage()
    {
        $this->selectField("message");

        return $this;
    }
}
