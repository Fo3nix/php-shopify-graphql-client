<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class FinancialSummaryDiscountApplicationQueryObject extends QueryObject
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
