<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootCustomerSegmentMembershipArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["segmentIds", "customerId"];

    protected $segmentIds;
    protected $customerId;

    /**
     * The segments to evaluate for the given customer.
     */
    public function setSegmentIds(array $segmentIds): static
    {
        $this->segmentIds = $segmentIds;

        return $this;
    }

    /**
     * The ID of the customer that has the membership.
     */
    public function setCustomerId($customerId): static
    {
        $this->customerId = $customerId;

        return $this;
    }
}
