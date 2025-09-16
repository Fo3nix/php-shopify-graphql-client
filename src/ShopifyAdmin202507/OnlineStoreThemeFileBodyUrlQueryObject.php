<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class OnlineStoreThemeFileBodyUrlQueryObject extends QueryObject
{
    const OBJECT_NAME = "OnlineStoreThemeFileBodyUrl";

    public function selectUrl()
    {
        $this->selectField("url");

        return $this;
    }
}
