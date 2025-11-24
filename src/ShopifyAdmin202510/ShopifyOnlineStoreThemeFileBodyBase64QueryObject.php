<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyOnlineStoreThemeFileBodyBase64QueryObject extends QueryObject
{
    const OBJECT_NAME = "OnlineStoreThemeFileBodyBase64";

    public function selectContentBase64()
    {
        $this->selectField("contentBase64");

        return $this;
    }
}
