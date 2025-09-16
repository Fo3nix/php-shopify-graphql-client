<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class OnlineStorePasswordProtectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "OnlineStorePasswordProtection";

    public function selectEnabled()
    {
        $this->selectField("enabled");

        return $this;
    }
}
