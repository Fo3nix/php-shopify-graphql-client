<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationTaxSummaryCreateArgumentsObject extends ArgumentsObject
{
    protected $orderId;
    protected $startTime;
    protected $endTime;

    /**
     * The ID of the order to create the tax summary for.
     */
    public function setOrderId($orderId): static
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * The start time of the range of orders to create the tax summary for.
     */
    public function setStartTime($startTime): static
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * The end time of the range of orders to create the tax summary for.
     */
    public function setEndTime($endTime): static
    {
        $this->endTime = $endTime;

        return $this;
    }
}
