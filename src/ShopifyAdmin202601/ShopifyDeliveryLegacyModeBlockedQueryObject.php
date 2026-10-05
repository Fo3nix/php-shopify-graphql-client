<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDeliveryLegacyModeBlockedQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryLegacyModeBlocked";

    public function selectBlocked()
    {
        $this->selectField("blocked");

        return $this;
    }

    public function selectReasons()
    {
        $this->selectField("reasons");

        return $this;
    }
}
