<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class TranslatableContentQueryObject extends QueryObject
{
    const OBJECT_NAME = "TranslatableContent";

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

    public function selectLocale()
    {
        $this->selectField("locale");

        return $this;
    }

    public function selectType()
    {
        $this->selectField("type");

        return $this;
    }

    public function selectValue()
    {
        $this->selectField("value");

        return $this;
    }
}
