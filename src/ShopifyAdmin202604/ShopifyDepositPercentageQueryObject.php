<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A percentage deposit.
 */
class ShopifyDepositPercentageQueryObject extends QueryObject
{
    const OBJECT_NAME = "DepositPercentage";

    /**
     * The percentage value of the deposit.
     */
    public function selectPercentage(): static
    {
        $this->selectField("percentage");

        return $this;
    }
}
