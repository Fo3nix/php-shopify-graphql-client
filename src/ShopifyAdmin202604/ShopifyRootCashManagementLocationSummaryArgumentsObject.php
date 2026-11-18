<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootCashManagementLocationSummaryArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["locationId", "startDate", "endDate"];

    protected $locationId;
    protected $startDate;
    protected $endDate;

    /**
     * Identifies the location to get the summary for.
     */
    public function setLocationId($locationId): static
    {
        $this->locationId = $locationId;

        return $this;
    }

    /**
     * The start date to summarize from.
     */
    public function setStartDate($startDate): static
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * The end date to summarize to.
     */
    public function setEndDate($endDate): static
    {
        $this->endDate = $endDate;

        return $this;
    }
}
