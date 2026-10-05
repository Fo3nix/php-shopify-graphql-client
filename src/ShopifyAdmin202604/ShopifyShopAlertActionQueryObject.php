<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShopAlertActionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopAlertAction";

    public function selectTitle()
    {
        $this->selectField("title");

        return $this;
    }

    public function selectUrl()
    {
        $this->selectField("url");

        return $this;
    }
}
