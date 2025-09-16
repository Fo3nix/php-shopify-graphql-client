<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class LocaleQueryObject extends QueryObject
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
