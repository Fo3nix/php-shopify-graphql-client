<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A customer's computed statistics.
 */
class ShopifyCustomerStatisticsQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerStatistics";

    /**
     * The predicted spend tier of a customer with a shop.
     */
    public function selectPredictedSpendTier(): static
    {
        $this->selectField("predictedSpendTier");

        return $this;
    }

    /**
     * The RFM (Recency, Frequency, Monetary) group of the customer.
     */
    public function selectRfmGroup(): static
    {
        $this->selectField("rfmGroup");

        return $this;
    }
}
