<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyOnlineStoreThemeFileBodyUrlQueryObject extends QueryObject
{
    const OBJECT_NAME = "OnlineStoreThemeFileBodyUrl";

    public function selectUrl()
    {
        $this->selectField("url");

        return $this;
    }
}
