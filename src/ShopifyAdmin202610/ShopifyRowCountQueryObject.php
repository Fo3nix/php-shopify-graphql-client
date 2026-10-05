<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyRowCountQueryObject extends QueryObject
{
    const OBJECT_NAME = "RowCount";

    public function selectCount()
    {
        $this->selectField("count");

        return $this;
    }

    public function selectExceedsMax()
    {
        $this->selectField("exceedsMax");

        return $this;
    }
}
