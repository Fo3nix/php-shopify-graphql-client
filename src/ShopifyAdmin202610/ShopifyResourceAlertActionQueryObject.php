<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyResourceAlertActionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ResourceAlertAction";

    public function selectPrimary()
    {
        $this->selectField("primary");

        return $this;
    }

    public function selectShow()
    {
        $this->selectField("show");

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
