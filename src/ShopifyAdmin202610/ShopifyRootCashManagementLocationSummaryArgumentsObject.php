<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootCashManagementLocationSummaryArgumentsObject extends ArgumentsObject
{
    protected $locationId;
    protected $startDate;
    protected $endDate;

    public function setLocationId($locationId)
    {
        $this->locationId = $locationId;

        return $this;
    }

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
