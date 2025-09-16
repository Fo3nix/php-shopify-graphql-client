<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class OnlineStoreThemeFileBodyTextQueryObject extends QueryObject
{
    const OBJECT_NAME = "OnlineStoreThemeFileBodyText";

    public function selectContent()
    {
        $this->selectField("content");

        return $this;
    }
}
