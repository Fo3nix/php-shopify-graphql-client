<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionBillingAttemptGeneralErrorQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingAttemptGeneralError";

    public function selectCode()
    {
        $this->selectField("code");

        return $this;
    }
}
