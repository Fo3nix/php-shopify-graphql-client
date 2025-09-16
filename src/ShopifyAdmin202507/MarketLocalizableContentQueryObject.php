<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MarketLocalizableContentQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketLocalizableContent";

    public function selectDigest()
    {
        $this->selectField("digest");

        return $this;
    }

    public function selectKey()
    {
        $this->selectField("key");

        return $this;
    }

    public function selectValue()
    {
        $this->selectField("value");

        return $this;
    }
}
