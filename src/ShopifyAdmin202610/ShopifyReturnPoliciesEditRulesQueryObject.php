<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Rules that apply to buyer-initiated edit and cancellation requests under a return policy profile.
 */
class ShopifyReturnPoliciesEditRulesQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReturnPoliciesEditRules";

    /**
     * Whether the policy accepts buyer-initiated edit requests. When false, the customer can't request edits or cancellations for items under this policy.
     */
    public function selectCanAcceptEdits(): static
    {
        $this->selectField("canAcceptEdits");

        return $this;
    }

    /**
     * The cancellation window in minutes. Set to -1 to indicate a window until fulfillment. When `canAcceptEdits` is false, this value is ignored as edit requests aren't accepted.
     */
    public function selectEditWindowMinutes(): static
    {
        $this->selectField("editWindowMinutes");

        return $this;
    }
}
