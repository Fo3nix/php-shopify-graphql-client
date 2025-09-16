<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MetafieldCapabilitySmartCollectionConditionQueryObject extends QueryObject
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
