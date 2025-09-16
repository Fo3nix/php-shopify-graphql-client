<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class OnlineStoreThemeFileBodyBase64QueryObject extends QueryObject
{
    const OBJECT_NAME = "OnlineStoreThemeFileBodyBase64";

    public function selectContentBase64()
    {
        $this->selectField("contentBase64");

        return $this;
    }
}
