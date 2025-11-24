<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionShippingOptionResultFailureQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionShippingOptionResultFailure";

    public function selectMessage()
    {
        $this->selectField("message");

        return $this;
    }
}
