<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class OrderRiskQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderRisk";

    /**
     * @deprecated This field is deprecated in favor of OrderRiskAssessment.facts.
     */
    public function selectDisplay()
    {
        $this->selectField("display");

        return $this;
    }

    /**
     * @deprecated This field is deprecated in favor of OrderRiskAssessment.riskLevel which allows for more granular risk levels, including PENDING and NONE.
     */
    public function selectLevel()
    {
        $this->selectField("level");

        return $this;
    }

    /**
     * @deprecated This field is deprecated in favor of OrderRiskAssessment.facts.
     */
    public function selectMessage()
    {
        $this->selectField("message");

        return $this;
    }
}
