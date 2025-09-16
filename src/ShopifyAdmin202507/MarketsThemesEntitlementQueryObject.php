<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MarketsThemesEntitlementQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketsThemesEntitlement";

    public function selectEnabled()
    {
        $this->selectField("enabled");

        return $this;
    }
}
