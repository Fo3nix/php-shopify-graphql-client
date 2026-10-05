<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionBillingAttemptPaymentErrorQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingAttemptPaymentError";

    public function selectCode()
    {
        $this->selectField("code");

        return $this;
    }
}
