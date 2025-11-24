<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyNavigationItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "NavigationItem";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

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
