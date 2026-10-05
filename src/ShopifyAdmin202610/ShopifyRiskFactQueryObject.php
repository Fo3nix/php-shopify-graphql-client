<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyRiskFactQueryObject extends QueryObject
{
    const OBJECT_NAME = "RiskFact";

    public function selectDescription()
    {
        $this->selectField("description");

        return $this;
    }

    public function selectSentiment()
    {
        $this->selectField("sentiment");

        return $this;
    }
}
