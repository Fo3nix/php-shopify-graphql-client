<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

class ShopifySubscriptionBillingCyclesDateRangeSelectorInputObject extends InputObject
{
    protected $startDate;
    protected $endDate;

    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }
}
