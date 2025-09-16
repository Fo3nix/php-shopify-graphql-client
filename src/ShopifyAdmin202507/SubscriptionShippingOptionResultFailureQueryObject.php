<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SubscriptionShippingOptionResultFailureQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionShippingOptionResultFailure";

    public function selectMessage()
    {
        $this->selectField("message");

        return $this;
    }
}
