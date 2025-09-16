<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DepositPercentageQueryObject extends QueryObject
{
    const OBJECT_NAME = "DepositPercentage";

    public function selectPercentage()
    {
        $this->selectField("percentage");

        return $this;
    }
}
