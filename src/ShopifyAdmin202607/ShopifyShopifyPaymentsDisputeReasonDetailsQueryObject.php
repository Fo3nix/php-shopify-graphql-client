<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShopifyPaymentsDisputeReasonDetailsQueryObject extends QueryObject
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
