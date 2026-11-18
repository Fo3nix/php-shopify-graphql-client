<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The response type for the `segmentMembership` object.
 */
class ShopifySegmentMembershipQueryObject extends QueryObject
{
    const OBJECT_NAME = "SegmentMembership";

    /**
     * A Boolean that indicates whether or not the customer in the query is a member of the segment, which is identified using the `segmentId`.
     */
    public function selectIsMember(): static
    {
        $this->selectField("isMember");

        return $this;
    }

    /**
     * A `segmentId` that's used for testing membership.
     */
    public function selectSegmentId(): static
    {
        $this->selectField("segmentId");

        return $this;
    }
}
