<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class OrderCancellationQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderCancellation";

    public function selectStaffNote()
    {
        $this->selectField("staffNote");

        return $this;
    }
}
