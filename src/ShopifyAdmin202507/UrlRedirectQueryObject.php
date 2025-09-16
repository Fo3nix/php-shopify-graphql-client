<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class UrlRedirectQueryObject extends QueryObject
{
    const OBJECT_NAME = "UrlRedirect";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectPath()
    {
        $this->selectField("path");

        return $this;
    }

    public function selectTarget()
    {
        $this->selectField("target");

        return $this;
    }
}
