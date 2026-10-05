<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyOnlineStoreThemeFileBodyTextQueryObject extends QueryObject
{
    const OBJECT_NAME = "OnlineStoreThemeFileBodyText";

    public function selectContent()
    {
        $this->selectField("content");

        return $this;
    }
}
