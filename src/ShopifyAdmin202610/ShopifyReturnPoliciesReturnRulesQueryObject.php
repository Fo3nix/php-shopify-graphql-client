<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyReturnPoliciesReturnRulesQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReturnPoliciesReturnRules";

    public function selectCanAcceptReturns()
    {
        $this->selectField("canAcceptReturns");

        return $this;
    }

    public function selectExtendWindowToBusinessDay()
    {
        $this->selectField("extendWindowToBusinessDay");

        return $this;
    }

    public function selectReturnWindowDays()
    {
        $this->selectField("returnWindowDays");

        return $this;
    }

    public function selectReturnWindowStartingFrom()
    {
        $this->selectField("returnWindowStartingFrom");

        return $this;
    }
}
