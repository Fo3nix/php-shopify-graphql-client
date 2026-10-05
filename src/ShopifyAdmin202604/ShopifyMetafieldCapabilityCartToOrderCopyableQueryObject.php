<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMetafieldCapabilityCartToOrderCopyableQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldCapabilityCartToOrderCopyable";

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
