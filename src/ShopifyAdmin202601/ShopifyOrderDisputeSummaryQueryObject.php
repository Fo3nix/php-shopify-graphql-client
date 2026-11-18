<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * A summary of the important details for a dispute on an order.
 */
class ShopifyOrderDisputeSummaryQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderDisputeSummary";

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The type that the dispute was initiated as.
     */
    public function selectInitiatedAs(): static
    {
        $this->selectField("initiatedAs");

        return $this;
    }

    /**
     * The current status of the dispute.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }
}
