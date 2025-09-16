<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPaymentsDisputeReasonDetailsQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsDisputeReasonDetails";

    public function selectNetworkReasonCode()
    {
        $this->selectField("networkReasonCode");

        return $this;
    }

    public function selectReason()
    {
        $this->selectField("reason");

        return $this;
    }
}
