<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SubscriptionDeliveryOptionResultFailureQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionDeliveryOptionResultFailure";

    public function selectMessage()
    {
        $this->selectField("message");

        return $this;
    }
}
