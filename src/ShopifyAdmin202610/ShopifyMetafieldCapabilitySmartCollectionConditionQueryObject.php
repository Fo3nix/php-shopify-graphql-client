<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMetafieldCapabilitySmartCollectionConditionQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldCapabilitySmartCollectionCondition";

    public function selectEligible()
    {
        $this->selectField("eligible");

        return $this;
    }

    public function selectEnabled()
    {
        $this->selectField("enabled");

        return $this;
    }
}
