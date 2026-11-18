<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationFulfillmentOrdersRerouteArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["fulfillmentOrderIds"];

    protected $fulfillmentOrderIds;
    protected $includedLocationIds;
    protected $excludedLocationIds;

    /**
     * The list of IDs of the fulfillment orders.
     */
    public function setFulfillmentOrderIds(array $fulfillmentOrderIds): static
    {
        $this->fulfillmentOrderIds = $fulfillmentOrderIds;

        return $this;
    }

    /**
     * The list of IDs of the locations to include for rerouting. By default, all locations are included.
     */
    public function setIncludedLocationIds(array $includedLocationIds): static
    {
        $this->includedLocationIds = $includedLocationIds;

        return $this;
    }

    /**
     * The list of IDs of the locations to exclude for rerouting. Excluded locations specified here take precedence over included locations provided through included_location_ids.
     */
    public function setExcludedLocationIds(array $excludedLocationIds): static
    {
        $this->excludedLocationIds = $excludedLocationIds;

        return $this;
    }
}
