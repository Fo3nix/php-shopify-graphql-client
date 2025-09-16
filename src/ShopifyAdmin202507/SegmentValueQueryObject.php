<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SegmentValueQueryObject extends QueryObject
{
    const OBJECT_NAME = "SegmentValue";

    public function selectLocalizedValue()
    {
        $this->selectField("localizedValue");

        return $this;
    }

    public function selectQueryName()
    {
        $this->selectField("queryName");

        return $this;
    }
}
