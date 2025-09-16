<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MetafieldCapabilityUniqueValuesQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldCapabilityUniqueValues";

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
