<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Additional context provided with an order risk assessment. Facts may not affect the order's risk recommendation.
 */
class ShopifyRiskFactQueryObject extends QueryObject
{
    const OBJECT_NAME = "RiskFact";

    /**
     * Descriptions longer than 256 characters are truncated.
     */
    public function selectDescription(): static
    {
        $this->selectField("description");

        return $this;
    }

    /**
     * Indicates whether the fact contributes negatively, neutrally, or positively to risk.
     */
    public function selectSentiment(): static
    {
        $this->selectField("sentiment");

        return $this;
    }
}
