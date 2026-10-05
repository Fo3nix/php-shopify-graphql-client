<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyLocaleQueryObject extends QueryObject
{
    const OBJECT_NAME = "Locale";

    public function selectIsoCode()
    {
        $this->selectField("isoCode");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }
}
