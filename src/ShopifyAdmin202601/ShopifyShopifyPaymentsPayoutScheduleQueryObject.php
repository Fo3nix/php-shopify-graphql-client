<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShopifyPaymentsPayoutScheduleQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsPayoutSchedule";

    public function selectInterval()
    {
        $this->selectField("interval");

        return $this;
    }

    public function selectMonthlyAnchor()
    {
        $this->selectField("monthlyAnchor");

        return $this;
    }

    public function selectWeeklyAnchor()
    {
        $this->selectField("weeklyAnchor");

        return $this;
    }
}
