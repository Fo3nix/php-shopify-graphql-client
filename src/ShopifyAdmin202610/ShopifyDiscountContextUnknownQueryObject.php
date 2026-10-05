<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDiscountContextUnknownQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountContextUnknown";

    public function selectContextType()
    {
        $this->selectField("contextType");

        return $this;
    }
}
