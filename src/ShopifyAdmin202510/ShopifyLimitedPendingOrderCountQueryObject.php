<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyLimitedPendingOrderCountQueryObject extends QueryObject
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
