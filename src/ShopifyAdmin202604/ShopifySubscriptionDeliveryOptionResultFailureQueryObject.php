<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionDeliveryOptionResultFailureQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionDeliveryOptionResultFailure";

    public function selectMessage()
    {
        $this->selectField("message");

        return $this;
    }
}
