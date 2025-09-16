<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DeliveryLegacyModeBlockedQueryObject extends QueryObject
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
