<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyOrderCancellationQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderCancellation";

    public function selectStaffNote()
    {
        $this->selectField("staffNote");

        return $this;
    }
}
