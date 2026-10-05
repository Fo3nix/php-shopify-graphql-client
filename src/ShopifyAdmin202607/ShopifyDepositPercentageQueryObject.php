<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDepositPercentageQueryObject extends QueryObject
{
    const OBJECT_NAME = "DepositPercentage";

    public function selectPercentage()
    {
        $this->selectField("percentage");

        return $this;
    }
}
