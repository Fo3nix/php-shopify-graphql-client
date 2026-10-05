<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMarketsThemesEntitlementQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketsThemesEntitlement";

    public function selectEnabled()
    {
        $this->selectField("enabled");

        return $this;
    }
}
