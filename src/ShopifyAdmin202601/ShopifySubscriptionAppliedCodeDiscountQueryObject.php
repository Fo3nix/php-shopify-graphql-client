<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionAppliedCodeDiscountQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionAppliedCodeDiscount";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectRedeemCode()
    {
        $this->selectField("redeemCode");

        return $this;
    }

    public function selectRejectionReason()
    {
        $this->selectField("rejectionReason");

        return $this;
    }
}
