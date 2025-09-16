<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShopAlertActionQueryObject extends QueryObject
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
