<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SubscriptionAppliedCodeDiscountQueryObject extends QueryObject
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
