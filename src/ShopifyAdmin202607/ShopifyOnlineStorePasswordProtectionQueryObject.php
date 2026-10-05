<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyOnlineStorePasswordProtectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "OnlineStorePasswordProtection";

    public function selectEnabled()
    {
        $this->selectField("enabled");

        return $this;
    }
}
