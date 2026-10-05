<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyFinancialSummaryDiscountApplicationQueryObject extends QueryObject
{
    const OBJECT_NAME = "FinancialSummaryDiscountApplication";

    public function selectAllocationMethod()
    {
        $this->selectField("allocationMethod");

        return $this;
    }

    public function selectTargetSelection()
    {
        $this->selectField("targetSelection");

        return $this;
    }

    public function selectTargetType()
    {
        $this->selectField("targetType");

        return $this;
    }
}
