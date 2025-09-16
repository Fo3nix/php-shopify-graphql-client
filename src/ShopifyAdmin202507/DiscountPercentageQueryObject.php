<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DiscountPercentageQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountPercentage";

    public function selectPercentage()
    {
        $this->selectField("percentage");

        return $this;
    }
}
