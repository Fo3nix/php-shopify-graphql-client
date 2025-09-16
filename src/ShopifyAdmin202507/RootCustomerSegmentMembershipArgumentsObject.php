<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class RootCustomerSegmentMembershipArgumentsObject extends ArgumentsObject
{
    protected $segmentIds;
    protected $customerId;

    public function setSegmentIds(array $segmentIds)
    {
        $this->segmentIds = $segmentIds;

        return $this;
    }

    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }
}
