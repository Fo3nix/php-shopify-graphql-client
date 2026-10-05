<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyReturnPoliciesEditRulesQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReturnPoliciesEditRules";

    public function selectCanAcceptEdits()
    {
        $this->selectField("canAcceptEdits");

        return $this;
    }

    public function selectEditWindowMinutes()
    {
        $this->selectField("editWindowMinutes");

        return $this;
    }
}
