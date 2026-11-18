<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return Rules that apply to returns under a return policy profile.
 */
class ShopifyReturnPoliciesReturnRulesQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReturnPoliciesReturnRules";

    /**
     * Whether the policy accepts returns. When false, the customer can't request returns for items under this policy.
     */
    public function selectCanAcceptReturns(): static
    {
        $this->selectField("canAcceptReturns");

        return $this;
    }

    /**
     * The return window is extended to the next business day when it falls on a weekend or holiday.
     */
    public function selectExtendWindowToBusinessDay(): static
    {
        $this->selectField("extendWindowToBusinessDay");

        return $this;
    }

    /**
     * The return window by number of days. Set to -1 to indicate an infinite return window. When `canAcceptReturns` is false, this value is ignored as returns aren't accepted.
     */
    public function selectReturnWindowDays(): static
    {
        $this->selectField("returnWindowDays");

        return $this;
    }

    /**
     * The starting point for calculating the return window.
     */
    public function selectReturnWindowStartingFrom(): static
    {
        $this->selectField("returnWindowStartingFrom");

        return $this;
    }
}
