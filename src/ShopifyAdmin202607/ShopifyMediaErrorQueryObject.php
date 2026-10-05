<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMediaErrorQueryObject extends QueryObject
{
    const OBJECT_NAME = "MediaError";

    public function selectCode()
    {
        $this->selectField("code");

        return $this;
    }

    public function selectDetails()
    {
        $this->selectField("details");

        return $this;
    }

    public function selectMessage()
    {
        $this->selectField("message");

        return $this;
    }
}
