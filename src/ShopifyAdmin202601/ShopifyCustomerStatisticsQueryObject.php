<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCustomerStatisticsQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerStatistics";

    public function selectPredictedSpendTier()
    {
        $this->selectField("predictedSpendTier");

        return $this;
    }

    public function selectRfmGroup()
    {
        $this->selectField("rfmGroup");

        return $this;
    }
}
