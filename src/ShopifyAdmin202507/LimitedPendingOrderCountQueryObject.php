<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class LimitedPendingOrderCountQueryObject extends QueryObject
{
    const OBJECT_NAME = "LimitedPendingOrderCount";

    public function selectAtMax()
    {
        $this->selectField("atMax");

        return $this;
    }

    public function selectCount()
    {
        $this->selectField("count");

        return $this;
    }
}
